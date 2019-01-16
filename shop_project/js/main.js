$(document).ready(function () {

    console.log('jQuery működik !!!');

    $('#reg').click(function () {

        //Felhasználónév validáció        
        $('#username').blur(function () {
            
            var input_username = $(this);
            var value_input_username = $(input_username).val();
            
            input_username.attr('minlength', '6');
            
            var regexp_username = /[^A-Za-z0-9]+/g;
            
            if (regexp_username.test(value_input_username)) {
                alert("Nem megfelelő a felhasználónév formátuma!");
            }
            
        });
        
        //Jelszó valid        
        $('#pwd').blur(function () {
            
            var input_password = $(this);
            var value_input_password = $(input_password).val();
            
            var regexp_password = /[^A-Za-z0-9]+/g;
            if (regexp_password.test(value_input_password)) {
                alert("Nem megfelelő a jelszó formátuma!");
            }
            
        });

        // Jelszó megerősítés valid
        $('#pwdc').blur(function () {
            
            var pwd = $('#pwd');
            var input_password = $(this);

            if (input_password != pwd) {
                alert('A két jelszó nem egyezik!');
            }
        });

        //Irányítószám valid
        $('#zip').one('click', function () {
            for (i = 1000; i <= 9999; i++) {
                $('#zip').append($('<option>', {value: i, text: i}));
            }
        });

        $('#zip_code').blur(function () {
            var selected_zip_code = $('#zip_code :selected').val();
            if (selected_year < 9999 || selected_year > 1000) {
                alert("Nincs kiválasztva irányítószám!");
            }
        });

        $('#zip_code').click(function () {
            var zip_code_array = [];
            $("input:checkbox[name=interested]:checked").each(function () {
                zip_code_array.push($(this).val());
            });

            if (!$.isEmptyObject(zip_code_array)) {
                if (zip_code_array.length < 2) {
                    alert('false');
                }
            }
        });

        //E-mail valid	
        $('#email').blur(function () {
            var input_email = $(this).val();
            var regexp_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            if (!regexp_email.test(input_email)) {
                alert("Nem megfelelő az e-mail formátuma!");
            }
        });
    });
});
