$(document).ready(function () {
    olvas();
    $(document).on("click", ".torol", function () {
        let id = $(this).attr("ID");
        $.post("php/del.php",
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
