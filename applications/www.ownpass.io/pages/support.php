<!DOCTYPE html>
<html lang="en">
    <head>
        <?php

        $headTitle = 'OwnPass Support';

        require __DIR__ . '/../inc/head.php';

        ?>
    </head>
    <body>

        <?php require __DIR__ . '/../inc/header.php'; ?>

        <section id="introduction">
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center"
                         data-ga-event-action="banner-support"
                         data-ga-event-category="Banner"
                         data-ga-event-label="Support">
                        <h1>Support</h1>

                        <p>
                            It's perfectly normal to have questions. This page hopefully answers those questions. If
                            for some reason we have not managed to provide you with the answers you are seeking. Do not
                            hesitate to ask us!
                        </p>
                    </div>
                </div>
        </section>

        <section id="support-section">
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-lg-5 text-center">
                        <a href="/manual/user-guide"
                           data-ga-event-action="support-user-guide"
                           data-ga-event-category="Support"
                           data-ga-event-label="User Guide">
                            <svg class="icon icon-lifebuoy">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="/svg/symbol-defs.svg#icon-lifebuoy"></use>
                            </svg>

                            <h2>User Guide</h2>

                            <p>
                                The user manual describing how to use OwnPass and all its clients.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 text-center">
                        <a href="/manual/technical-reference"
                           data-ga-event-action="support-technical-reference"
                           data-ga-event-category="Support"
                           data-ga-event-label="Technical Reference">
                            <svg class="icon icon-lifebuoy">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="/svg/symbol-defs.svg#icon-lifebuoy"></use>
                            </svg>

                            <h2>Technical Reference</h2>

                            <p>
                                The technical reference that helps developers on getting started to participate on the
                                project.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 text-center">
                        <a href="https://groups.google.com/forum/#!forum/ownpass"
                           data-ga-event-action="support-forum"
                           data-ga-event-category="Support"
                           data-ga-event-label="Forum">
                            <svg class="icon icon-google-plus">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="/svg/symbol-defs.svg#icon-google-plus"></use>
                            </svg>

                            <h2>Forums</h2>

                            <p>
                                Ask question or suggest new features. Interacting with developers and other OwnPass
                                users is possible here.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 text-center">
                        <svg class="icon icon-mail4">
                            <use xlink:href="/svg/symbol-defs.svg#icon-mail4"></use>
                        </svg>

                        <h2>Contact us</h2>

                        <p>
                            If the FAQ did not provide answers to your questions, please e-mail us. You can reach us
                            at support@ownpass.io
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
