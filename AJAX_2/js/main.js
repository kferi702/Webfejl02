$(document).ready(function () {
    jatekosokatOlvas();
    adatokatOlvas();
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
