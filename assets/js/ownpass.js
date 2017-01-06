function opOnCaptcha(response) {
    $('#mailingForm').submit();
}

$(function() {
    $(document).on('click', 'header nav button', function(e) {
        e.preventDefault();

        $(this).closest('nav').find('ul').toggleClass('responsive');
    });
});
