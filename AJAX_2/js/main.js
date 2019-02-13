$(document).ready(function () {


});
function olvas() {
    $.get("php/jatekosok.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
