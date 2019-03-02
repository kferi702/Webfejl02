$(document).ready(function () {

    $("#logout").css("display", "none");

    /*
     * Form alapértelmezett működésének megakadályozása
     */
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
    }) // Form letiltás vége
    
    /*
     * Login esemény megvalósítása ajax-szal
     */
    $('[name=enter]').click(function () {

        let email = $('#email').val();
        let pwd = $('#pwd').val();

        $.post({
            method: "POST",
            url: "php/log_in.php",
            data: {
                email: email,
                pwd: pwd
            },
            success: function (valasz) {
                console.log(valasz);
                $('#login').css('display', 'none');
                $('#logout').css('display', 'inline');
            },
            error: function (status) {
                console.log(status);
            }
        });
    }); // Login vége
    
}); // jQuery.ready() vége
