// walidacja imienia
document.getElementById("user_new_firstname").addEventListener("change", validate_string);

// walidacja nazwiska
document.getElementById("user_new_lastname").addEventListener("change", validate_string);

// walidacja peselu
document.getElementById("user_new_pin").addEventListener("change", validate_pin);


//alert buttona
$('#user_new_save').on('click', function (e) {
    var error = 0;
    var errorInvalid = 0;
    $('.form-group input').each(function (index) {
        if (!$(this).val()) {
            error++;
        }
        else if ($(this).hasClass('is-invalid')) {
            errorInvalid++;
        }
    });
    if (error) {
        e.preventDefault();
        alert('Uzupełnij wszystkie pola');
    }
    else if (errorInvalid) {
        e.preventDefault();
        alert('Uzupełnij prawidłowo wszystkie pola');
    }
});