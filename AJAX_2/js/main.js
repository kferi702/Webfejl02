$(document).ready(function () {
    jatekosokatOlvas();

    $(document).on("", "#jatekoAdatai", function () {
        adatokatOlvas();
    });
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}

function adatokatOlvas() {
    $.get("php/jegyzo.php", function (valasz, status) {
        $('#jatekosokAdatai').html(valasz)
    });
}
