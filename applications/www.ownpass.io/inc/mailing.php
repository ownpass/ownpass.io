<section id="mailing">
    <form id="mailingForm" action="//<?php echo $_SERVER['HTTP_HOST']; ?>" method="post" novalidate>
        <div class="wrap container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Stay up-to-date</h2>

                    <p>Stay up-to-date and get informed of new releases, sign up for the mailing list below.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-sm-offset-2">
                    <input type="email" name="emailAddress" id="mailing-email" placeholder="email@address.com">
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <button class="g-recaptcha"
                            data-ga-event-action="mailing-subscribe-clicked"
                            data-ga-event-category="Mailing"
                            data-ga-event-label="Mailing Subscribe"
                            data-sitekey="6Len4RAUAAAAAMmd0FyRmcWyiObT9ku8hCxfrVSa"
                            data-callback="opOnCaptcha">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>
