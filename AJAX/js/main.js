$(document).ready(function () {
    olvas();
    $(document).on("click", ".torol", function () {
        let id = $(this).attr("id");
        $.post("php/delete.php",
                {
                    del: id
                },
                function (valasz) {
                    olvas();
                });
    });
});

function olvas() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#container').html(valasz);
    });
}
