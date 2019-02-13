$(document).ready(function () {
    jatekosokatOlvas();
    $(document).on("change", "#jatekos", function () {

        let mez = $(this).val();
        $.post("php/adatok.php",
                {
                    mez: mez
                },
                function (valasz) {
                    $('#jatekosokAdatai').html(valasz);
                });
    });
});
function jatekosokatOlvas() {
    $.get("php/jatekos.php", function (valasz, status) {
        $("#jatekosok").html(valasz);
    });
}
