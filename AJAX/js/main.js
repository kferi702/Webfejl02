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
    $(document).on("click", ".ment", function () {

        let vnev = $('#vnev').text();
        let knev = $('#knev').text();
        if ((vnev.length > 0) && (knev.length > 0)) {
            $.ajax({
                url: "php/insert.php",
                method: "post",
                dataType: "TEXT",
                data: {
                    "vnev": vnev,
                    "knev": knev
                },
                success: function (valasz) {
                    olvas();
                },
                error: function (xhr) {
                    alert(xhr.status);
                }
            });
        }
    });
    function olvas() {
        $.get("php/select.php", function (valasz, status) {
            console.log(status);
            $('#container').html(valasz);
        });
    }
});
