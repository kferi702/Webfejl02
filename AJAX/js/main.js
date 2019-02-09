$(document).ready(function () {
    $.get("../php/select.php", function (valasz, status) {
        console.log(status);
        $('#container').html(valasz);

        console.log('jQuery működik!');
    });
});
