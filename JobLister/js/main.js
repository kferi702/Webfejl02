$(document).ready(function () {

    $("#logout").css("display", "none");
    $("#upload").css("display", "none");

    /*
     * Form alapértelmezett működésének megakadályozása
     */
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
    }) // Form letiltás vége

    /*
     * Login esemény megvalósítása ajax-szal
     */
    $('[name=enter]').click(function () {

        let email = $('#email').val();
        let pwd = $('#pwd').val();

        $.post({
            method: "POST",
            url: "php/log_in.php",
            data:
                    {
                        email: email,
                        pwd: pwd
                    },
            success: function (valasz) {
                console.log(valasz);
                $('#login').css('display', 'none');
                $('#logout').css('display', 'inline');
                $('#upload').css('display', 'inline');
            },
            error: function (status) {
                console.log(status);
            }
        });
    }); // Login vége

    $('[name=feltolt]').click(function () {
        let katid = $('[name=katid]').val();
        let munkaado = $('[name=munkaado]').val();
        let munkakor = $('[name=]').val();
        let hely = $('[name=katid]').val();
        let leiras = $('[name=katid]').val();
        let fizetes = $('[name=katid]').val();

        $.ajax({
            method: "POST",
            url: "php/fel_tolt.php",
            data:
                    {
                        katid: katid,
                        munkaado: munkaado,
                        munkakor: munkakor,
                        hely: hely,
                        leiras: leiras,
                        fizetes: fizetes
                    },
            success: function (valasz) {
                console.log(valasz);
            },
            error: function (xhr) {
                console.log(xhr.status);
            }

        });
    }); // állás feltöltés vége

}); // jQuery.ready() vége
