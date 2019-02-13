$(document).ready(function () {
    jatekosokatOlvas();

    $(document).on("change", "#jatekos", function () {

        $.get("php/jegyzo.php", function (valasz, status) {
            $('#jatekosokAdatai').html(valasz)
        });
    });
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
