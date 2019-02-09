$(document).ready(function () {
    getPlayers();
});
function getPlayers() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#players').html(valasz);
    });
}
