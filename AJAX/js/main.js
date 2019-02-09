$(document).ready(function () {
    olvas();
});

function olvas() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#container').html(valasz);
    });
}
