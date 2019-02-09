$(document).ready(function () {
    olvas();
    $(document).on("click", ".torol", function () {

    });
});

function olvas() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#container').html(valasz);
    });
}
