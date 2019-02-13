$(document).ready(function () {
    jatekosokatOlvas();
    $(document).on("change", "#jatekos", function () {

        let id = $(this).val();
        console.log(id);
        $.post("php/adatok.php",
        {
            id: id
        },
        function (valasz) {
            $('#jatekosAdatai').html(valasz);
        });
    });
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
