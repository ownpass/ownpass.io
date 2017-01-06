function opOnCaptcha(response) {
    $('#mailingForm').submit();
}

$(document).on('submit', '#mailingForm', function (e) {
    ga('send', {
        hitType: 'event',
        eventAction: 'mailing-subscribe-submit',
        eventCategory: 'Mailing',
        eventLabel: 'Mailing Form Submit'
    });
});

$(document).on('click', 'header nav button', function (e) {
    e.preventDefault();

    $(this).closest('nav').find('ul').toggleClass('responsive');
});

$(document).on('click', '[data-ga-event-action]', function (e) {
    var data = $(this).data();

    ga('send', {
        hitType: 'event',
        eventAction: data.gaEventAction,
        eventCategory: data.gaEventCategory,
        eventLabel: data.gaEventLabel
    });
});
