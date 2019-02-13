$(document).ready(function () {
    jatekosokatOlvas();
});
function jatekosokatOlvas() {
    $.get("php/jatekosok.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
