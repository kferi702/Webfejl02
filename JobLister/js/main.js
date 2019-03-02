$(document).ready(function () {

    $('loginForm').on('submit', function (e) {
        e.preventDefault();
    })

    $('#enter').click(function () {

        let email = $('#email').val();
        let pwd = $('#pwd').val();

        $.post({
            type: "POST",
            url: "php/log_in.php",
            data: {
                email: email,
                pwd: pwd
            },
            success: function (valasz) {
                console.log(valasz);
            },
            error: function (status) {
                console.log(status);
            }
        });
    });
});
