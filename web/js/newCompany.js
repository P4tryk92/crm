// walidacja nazwy firmy
document.getElementById("company_companyName").addEventListener("change", validate_string);

// walidacja typu
document.getElementById("company_type").addEventListener("change", validate_string);

// walidacja branży
document.getElementById("company_industry").addEventListener("change", validate_string);

// walidacja nipu
document.getElementById("company_nip").addEventListener("change", validate_nip);

// walidacja regonu
document.getElementById("company_regon").addEventListener("change", validate_regon);

// walidacja numeru telefonu
document.getElementById("company_phoneNumber").addEventListener("change", validate_phoneNumber);

// walidacja emaila
document.getElementById("company_email").addEventListener("change", validate_email);

// walidacja faxu
document.getElementById("company_fax").addEventListener("change", validate_phoneNumber);

// walidacja daty założenia firmy
document.getElementById("company_companyStartDate").addEventListener("change", validate_date);

// walidacja strony internetowej
document.getElementById("company_site").addEventListener("change", validate_site);

// walidacja adresu zamieszkania
document.getElementById("company_addressStreetAndNumber").addEventListener("change", validate_adress);

// walidacja kodu pocztowego
document.getElementById("company_addressPostCode").addEventListener("change", validate_postCode);

// walidacja miejscowości
document.getElementById("company_addressCity").addEventListener("change", validate_string);

// walidacja województwa
document.getElementById("company_voivodeship").addEventListener("change", validate_voivodeship);

// walidacja obywatelstwo
document.getElementById("company_nationality").addEventListener("change", validate_string);

// walidacja ilości pracowników
document.getElementById("company_numberOfEmployees").addEventListener("change", validate_numberBigerNull);

// walidacja miesięczne koszty stałe
document.getElementById("company_monthlyCosts").addEventListener("change", validate_numberBigerNull);

// walidacja szacowane miesięczne koszta dodatkowe
document.getElementById("company_estimatedMonthlyCosts").addEventListener("change", validate_numberCanBeNull);

// walidacja średnie roczne przychody
document.getElementById("company_fixedAnnualIncome").addEventListener("change", validate_numberCanBeLowerNull);

// walidacja notowań giełdowych
document.getElementById("company_stockQuotes").addEventListener("change", validate_numberCanBeLowerNull);

// walidacja województwo
document.getElementById("company_planingInvestments").addEventListener("change", validate_voivodeship);

// walidacja adres korespondencyjny
document.getElementById("company_correspondenceAddressStreetAndNumber").addEventListener("change", validate_adress);

// walidacja kod pocztowy
document.getElementById("company_correspondenceAddressPostCode").addEventListener("change", validate_postCode);

// walidacja miejscowość
document.getElementById("company_correspondenceAddressCity").addEventListener("change", validate_string);

// walidacja województwo
document.getElementById("company_correspondenceVoivodeship").addEventListener("change", validate_voivodeship);


//checkboks adreess
document.getElementById("quotes_form").addEventListener("click", validate_stQuotes);

// ukrywanie checkboxa korespondencyjnego
function validate_stQuotes() {
    let stockQuotesBlock=document.getElementById("stock_quotes")
    let inputsinBlock=stockQuotesBlock.querySelectorAll("input")

    if (this.checked == true) {
        stockQuotesBlock.style.display = ""
        for(let i = 0; i<inputsinBlock.length;i++){
            inputsinBlock[i].required= true
        }
    }
    else {
        stockQuotesBlock.style.display = "none"
        for(let i = 0; i<inputsinBlock.length;i++){
            inputsinBlock[i].required= false
        }
    }
}


//checkbos adreess
document.getElementById("adresscoresp_form").addEventListener("click", validate_aderssCoresp);

// ukrywanie checkboxa korespondencyjnego
function validate_aderssCoresp() {
    let addressBlock=document.getElementById("aderssCoresp")
    let inputsinBlock=addressBlock.querySelectorAll("input")
    
    if (this.checked == true) {
        addressBlock.style.display = ""
        for(let i = 0; i<inputsinBlock.length;i++){
            inputsinBlock[i].required= true
        }
    }
    else {
        addressBlock.style.display = "none"
        for(let i = 0; i<inputsinBlock.length;i++){
            inputsinBlock[i].required= false
            }
    }
}


// //alert buttona
// $('#company_save').on('click', function (e) {
//     var error = 0;
//     var errorInvalid = 0;
//     $('.form-group input').each(function (index) {
//         if (!$(this).val()) {
//             error++;
//         }
//         else if ($(this).hasClass('is-invalid')) {
//             errorInvalid++;
//         }
//     });
//     if (error) {
//         e.preventDefault();
//         alert('Uzupełnij wszystkie pola');
//     }
//     else if (errorInvalid) {
//         e.preventDefault();
//         alert('Uzupełnij prawidłowo wszystkie pola');
//     }
// });