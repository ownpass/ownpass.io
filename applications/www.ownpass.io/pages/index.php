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
                        <h1>Self-Hosted Password Management</h1>

                        <p>
                            Do you want secure password management that you can host on your own servers? Than
                            OwnPass is right for you. By hosting the software on your own servers you have total
                            control over all passwords.
                        </p>
                    </div>
                </div>
        </section>

        <section>
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center">
                        <svg class="icon icon-mobile2">
                            <use xlink:href="/svg/symbol-defs.svg#icon-mobile2"></use>
                        </svg>

                        <h2>Availability</h2>

                        <p>
                            OwnPass is available everywhere. On any device, in any browser.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <svg class="icon icon-cloud">
                            <use xlink:href="/svg/symbol-defs.svg#icon-cloud"></use>
                        </svg>

                        <h2>Self Hosted</h2>

                        <p>
                            You host OwnPass on your own server giving you complete control.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <svg class="icon icon-users">
                            <use xlink:href="/svg/symbol-defs.svg#icon-users"></use>
                        </svg>

                        <h2>Multiple Users</h2>

                        <p>
                            It's possible to create multiple user accounts and share passwords.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <svg class="icon icon-github">
                            <use xlink:href="/svg/symbol-defs.svg#icon-github"></use>
                        </svg>

                        <h2>Open Source</h2>

                        <p>
                            The source code of OwnPass is publicly available.
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
