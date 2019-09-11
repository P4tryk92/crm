// walidacja rodzaju majątku
document.getElementById("wealth_type").addEventListener("change", validate_string);

// walidacja szacowanej wartości majątku
document.getElementById("wealth_estimatedValuation").addEventListener("change", validate_numberBigerNull);


//alert buttona
$('#wealth_save').on('click', function (e) {
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