$(document).ready(function () {
    olvas();
    $(document).on("click", ".torol", function () {
        let id = $(this).attr('ID');
        console.log(id);
    });
});

function olvas() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#container').html(valasz);
    });
}
