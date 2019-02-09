$(document).ready(function () {
    getPlayers();

    $(document).on("click", "lista", function () {

        let nev = $('#player').text();

        if ((nev.length > 0) && !empty(nev)) {
            $.ajax({
                url: "php/select.php",
                method: "post",
                dataType: "TEXT",
                data: {
                    "player": nev
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
});
function getPlayers() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $('#players').html(valasz);
    });
}
