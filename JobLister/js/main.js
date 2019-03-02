$(document).ready(function () {

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
    })

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
                $('#logout').css('display', 'none');
            },
            error: function (status) {
                console.log(status);
            }
        });
    });
});
