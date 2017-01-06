<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$config = include __DIR__ . '/../applications/www.ownpass.io/config/config.global.php';
if (file_exists(__DIR__ . '/../applications/www.ownpass.io/config/config.local.php')) {
    $config = array_merge($config, include __DIR__ . '/../applications/www.ownpass.io/config/config.local.php');
}

$page = $_SERVER['REQUEST_URI'] === '/' ? '/index' : $_SERVER['REQUEST_URI'];
$base = realpath(__DIR__ . '/../applications/www.ownpass.io/pages');
$path = $base . '/' . ltrim($page, '/') . '.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['g-recaptcha-response']) &&
        !empty($_POST['emailAddress']) &&
        filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL)) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: apikey ' . $config['mailchimp_api_key']
        ]);
        curl_setopt($ch, CURLOPT_USERAGENT, 'ownpass/website');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'secret' => $config['recaptcha_secret_key'],
            'response' => $_POST['g-recaptcha-response'],
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ]);

        $body = curl_exec($ch);
        $headers = curl_getinfo($ch);

        if ($body === false) {
            $error = curl_error($ch);
            curl_close($ch);

            throw new RuntimeException($error);
        }

        curl_close($ch);

        $response = json_decode($body, true);

        if (isset($response['success']) && $response['success'] === true) {
            list(, $dataCenter) = explode('-', $config['mailchimp_api_key']);
            $apiEndpoint = sprintf(
                'https://%s.api.mailchimp.com/3.0/lists/%s/members',
                $dataCenter,
                $config['mailchimp_list_id']
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: application/vnd.api+json',
                'Content-Type: application/vnd.api+json',
                'Authorization: apikey ' . $config['mailchimp_api_key']
            ]);
            curl_setopt($ch, CURLOPT_USERAGENT, 'ownpass/website');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLINFO_HEADER_OUT, true);
            curl_setopt($ch, CURLOPT_POST, true);

            $encoded = json_encode([
                'email_address' => $_POST['emailAddress'],
                'status' => 'subscribed',
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);

            $body = curl_exec($ch);
            $headers = curl_getinfo($ch);

            if ($body === false) {
                $error = curl_error($ch);
                curl_close($ch);

                throw new RuntimeException($error);
            }

            curl_close($ch);
        }
    }

    header('Location: /');
    exit;
}

if (is_file($path)) {
    $path = realpath($path);

    if (substr($path, 0, strlen($base)) !== $base) {
        $path = null;
    }
} else {
    $path = null;
}

if (!$path) {
    $path = $base . '/404.php';
}

include $path;
