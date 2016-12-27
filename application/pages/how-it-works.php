<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/../inc/head.php'; ?>
    </head>
    <body>

        <?php require __DIR__ . '/../inc/header.php'; ?>

        <section id="introduction">
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>How it works</h1>

                        <p>
                            How does OwnPass actually work? Is your data safely stored?
                        </p>
                    </div>
                </div>
        </section>

        <section>
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-lg-3 text-center">
                        <svg class="icon icon-cloud"><use xlink:href="/svg/symbol-defs.svg#icon-cloud"></use></svg>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <h2>Private Cloud</h2>

                        <p>
                            OwnPass will be installed on your own servers. This way only you know where your data is
                            stored. Only you control who has access to the data. As an extra layer of security you
                            could run OwnPass behind a VPN so that only the people you trust have access to it.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-3 text-center">
                        <svg class="icon icon-key"><use xlink:href="/svg/symbol-defs.svg#icon-key"></use></svg>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <h2>Encryption</h2>

                        <p>
                            OwnPass will store your data highly encrypted by using AES-256 encryption. All data you
                            send to your own OwnPass server is first encrypted on the client side before it is sent
                            over an internet line. Data encrypted with AES-256 is effectively impossible to decrypt.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-3 text-center">
                        <svg class="icon icon-users"><use xlink:href="/svg/symbol-defs.svg#icon-users"></use></svg>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <h2>Multiple Accounts</h2>

                        <p>
                            Using OwnPass with teams is no problem. One OwnPass server can contain multiple user
                            accounts so that your entire team can benefit from password management. And don't worry,
                            since all data is encrypted using a master password, only the users themselves can decrypt
                            it.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php

        require __DIR__ . '/../inc/mailing.php';
        require __DIR__ . '/../inc/footer.php';

        ?>

    </body>
</html>
