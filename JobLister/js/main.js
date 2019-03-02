$(document).ready(function () {
    $('#enter').click(function () {

        $.post({
            type: "POST",
            url: "php/log_in.php",
            data: {

            },
            success: function (valasz) {

            },
            error: function (status) {
                alert(status);
            }
        });
    });
});
