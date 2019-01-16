$(document).ready(function () {
console.log('Hello');
    //Felhasználónév valid
    $('#fullname').keyup(function () {
        var input_username = $(this);
        var value_input_username = $(input_username).val();
        input_username.attr('minlength', '8');
        var regexp_username = /[^A-Za-z0-9]+/g;
        if (regexp_username.test(value_input_username)) {
            alert("Nem megfelelő a felhasználónév formátuma!");
        }
    });

    //Jelszó valid	
    $('#password').keyup(function () {
        var input_password = $(this);
        var value_input_password = $(input_password).val();
        input_password.attr('minlength', '8');
        var regexp_password = /[^A-Za-z0-9]+/g;
        if (regexp_password.test(value_input_password)) {
            alert("Nem megfelelő a jelszó formátuma!");
        }
    });

    //Irányítószám valid
    $('#zip_code').one('click', function () {
        for (i = 1000; i <= 9999; i++) {
            $('#zip_code').append($('<option>', {value: i, text: i}));
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

    //Nem validálás

    /*$('#gender').attr('checked', 'checked'){
     
     
     });*/


    //textarea
    var max_length_textarea = $('#textarea').attr('maxlength');
    $('#number_of_characters').html(max_length_textarea + " / 500");
    $('#textarea').keydown(function () {
        var textarea_length = $('#textarea').val().length;
        $('#number_of_characters').html(max_length_textarea - textarea_length + ' / 500');
    });


    //Aktuális form megjelenése adott válasz alapján (regisztrált user vagy nem?)
    $('#reg_click_me_if_not_user').click(function () {
        var form_registration = $('.form_registration');
        var is_user_or_not = $('#is_registered_user');
        form_registration.slideToggle();
        is_user_or_not.hide();
    });

    $('#reg_click_me_if_user').click(function () {
        location.href = "under_construction.html";
    });

    //Születési dátum valid	
    $('#birthday_year').one("click", function () {
        for (var i = 1950; i <= 2000; i++) {
            $('#birthday_year').append($('<option>', {value: i, text: i}));
        }
    });

    $('#birthday_year').blur(function () {
        var selected_year = $('#birthday_year :selected').val();
        if (selected_year < 1950 || selected_year > 2000) {
            alert("Nincs kiválasztva születési év!");
        }
    });

    $('#birthday_month').one("click", function () {
        var months_array = ["Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December"];
        for (var i = 0; i < months_array.length; i++) {
            $('#birthday_month').append($('<option>', {value: months_array[i], text: months_array[i]}));
        }
    });

    //Input mező háttérszínek megváltoztatása aktív focus event esetén
    $('.colorized_input').focus(function () {
        $(this).css('background-color', 'lightblue');
    });

    $('.colorized_input').blur(function () {
        $(this).css('background-color', '');
    });

    $('li a p').mouseenter(function () {
        var menu_bar_list_item = $(this);
        menu_bar_list_item.css('font-size', '16px');
        menu_bar_list_item.css('font-weight', 'bold');
    });

    $('li a p').mouseleave(function () {
        var menu_bar_list_item = $(this);
        menu_bar_list_item.css('font-family', '');
        menu_bar_list_item.css('font-size', '');
        menu_bar_list_item.css('font-weight', '');
    });
});
