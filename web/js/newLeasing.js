// walidacja przedmiotu leasingu
document.getElementById("leasing_leasingThing").addEventListener("change", validate_voivodeship);

// walidacja kwoty kredytu
document.getElementById("leasing_amount").addEventListener("change", validate_numberBigerNull);

// walidacja daty udzuelenia kredytu
document.getElementById("leasing_grantingDate").addEventListener("change", validate_date);

// walidacja daty udzuelenia kredytu
document.getElementById("leasing_repaymentDate").addEventListener("change", validate_datLonger);

// walidacja daty udzuelenia kredytu
document.getElementById("leasing_monthlyInstallment").addEventListener("change", validate_numberBigerNull);

// walidacja daty udzuelenia kredytu
document.getElementById("leasing_bankName").addEventListener("change", validate_string);



//alert buttona
$('#leasing_save').on('click', function (e) {
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