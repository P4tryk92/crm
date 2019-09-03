// walidacja nazwy akcji
document.getElementById("shares_nameAndType").addEventListener("change", validate_string);

// walidacja ilości akcji
document.getElementById("shares_numberOfSharesHeld").addEventListener("change", validate_numberBigerNull);

// walidacja przychodu całego gospodarstwa domowego
document.getElementById("shares_value").addEventListener("change", validate_numberCanBeNull);

//alert buttona
$('#shares_save').on('click', function (e) {
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
