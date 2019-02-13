$(document).ready(function () {
    jatekosokatOlvas();
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
