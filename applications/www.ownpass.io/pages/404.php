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
                    <div class="col-lg-12 text-center"
                         data-ga-event-action="banner-404"
                         data-ga-event-category="Banner"
                         data-ga-event-label="Page Not Found">
                        <h1>Page Not Found</h1>

                        <p>
                            It seems you have reached a page that no longer exists.
                        </p>
                    </div>
                </div>
        </section>

        <section>
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>
                            The page you are trying to reach no longer exists.
                        </p>

                        <p>
                            <svg class="icon icon-pacman">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="/svg/symbol-defs.svg#icon-pacman"></use>
                            </svg>
                        </p>

                        <p>
                            It seems pacman has eaten this page.
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
