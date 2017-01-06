<!DOCTYPE html>
<html lang="en">
    <head>
        <?php

        $headTitle = 'Download OwnPass, self hosted, open source password management';

        require __DIR__ . '/../inc/head.php';

        ?>
    </head>
    <body>

        <?php require __DIR__ . '/../inc/header.php'; ?>

        <section id="introduction">
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center"
                         data-ga-event-action="banner-download"
                         data-ga-event-category="Banner"
                         data-ga-event-label="Get started by downloading OwnPass">
                        <h1>Get started by downloading OwnPass</h1>

                        <p>
                            Get started by downloading OwnPass for your platform. The browser extensions can be found
                            in their correspondent store and the mobile apps can be found in the playstore and app store.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="download-section">
            <div class="wrap container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-lg-4 text-center"
                         data-ga-event-action="download-server"
                         data-ga-event-category="Download"
                         data-ga-event-label="Server">
                        <svg class="icon icon-cloud"><use xlink:href="/svg/symbol-defs.svg#icon-cloud"></use></svg>

                        <h2>Server</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>
                    <div class="col-xs-12 col-lg-4 text-center"
                         data-ga-event-action="download-apple"
                         data-ga-event-category="Download"
                         data-ga-event-label="Apple">
                        <svg class="icon icon-appleinc"><use xlink:href="/svg/symbol-defs.svg#icon-appleinc"></use></svg>

                        <h2>Apple</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>
                    <div class="col-xs-12 col-lg-4 text-center"
                         data-ga-event-action="download-android"
                         data-ga-event-category="Download"
                         data-ga-event-label="Android">
                        <svg class="icon icon-android"><use xlink:href="/svg/symbol-defs.svg#icon-android"></use></svg>

                        <h2>Android</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>

                    <div class="col-xs-12 col-lg-4 col-lg-offset-4 text-center"
                         data-ga-event-action="download-chrome"
                         data-ga-event-category="Download"
                         data-ga-event-label="Google Chrome">
                        <svg class="icon icon-chrome"><use xlink:href="/svg/symbol-defs.svg#icon-chrome"></use></svg>

                        <h2>Google Chrome</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>
                    <div class="col-xs-12 col-lg-4 text-center"
                         data-ga-event-action="download-firefox"
                         data-ga-event-category="Download"
                         data-ga-event-label="Firefox">
                        <svg class="icon icon-firefox"><use xlink:href="/svg/symbol-defs.svg#icon-firefox"></use></svg>

                        <h2>Firefox</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-lg-offset-4 text-center"
                         data-ga-event-action="download-microsoft-edge"
                         data-ga-event-category="Download"
                         data-ga-event-label="Microsoft Edge">
                        <svg class="icon icon-edge"><use xlink:href="/svg/symbol-defs.svg#icon-edge"></use></svg>

                        <h2>Microsoft Edge</h2>

                        <p class="coming-soon">
                            Coming soon
                        </p>
                    </div>
                    <div class="col-xs-12 col-lg-4 text-center"
                         data-ga-event-action="download-safari"
                         data-ga-event-category="Download"
                         data-ga-event-label="Safari">
                        <svg class="icon icon-safari"><use xlink:href="/svg/symbol-defs.svg#icon-safari"></use></svg>

                        <h2>Safari</h2>

                        <p class="coming-soon">
                            Coming soon
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
