// walidacja kwoty kredytu
document.getElementById("credit_amount").addEventListener("change", validate_numberBigerNull);

// walidacja data udzielenia kredytu
document.getElementById("credit_grantingDate").addEventListener("change", validate_date);

// walidacja daty spłaty kredytu
document.getElementById("credit_repaymentDate").addEventListener("change", validate_datLonger);

// walidacja raty miesięcznej
document.getElementById("credit_monthlyInstallment").addEventListener("change", validate_numberBigerNull);

// walidacja nazwy banku
document.getElementById("credit_bankName").addEventListener("change", validate_string);

// walidacja wysokości marży kredytu
document.getElementById("credit_profitMargin").addEventListener("change", validate_numberCanBeNull);


//alert buttona
$('#credit_save').on('click', function (e) {
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