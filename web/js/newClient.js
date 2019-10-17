// walidacja imienia
document.getElementById("lead_firstName").addEventListener("change", validate_string);

// walidacja nazwiska
document.getElementById("lead_lastName").addEventListener("change", validate_string);

// walidacja peselu
document.getElementById("lead_pin").addEventListener("change", validate_pin);

//walidacja numeru telefonu
document.getElementById("lead_phoneNumber").addEventListener("change", validate_phoneNumber);

// walidacja adresu mailowego
document.getElementById("lead_email").addEventListener("change", validate_email);

// walidacja daty urodzenia 
document.getElementById("lead_birthDate").addEventListener("change", validate_date);

// walidacja daty ważnosci dowodu 
document.getElementById("lead_birthDate").addEventListener("change", validate_date);

// walidacja miejsca urodzenia
document.getElementById("lead_birthPlace").addEventListener("change", validate_string);

// walidacja seri i nrumeru dowodu osobistego
document.getElementById("lead_idCard").addEventListener("change", validate_idCard);

// walidacja daty ważnosci dowodu 
document.getElementById("lead_idCardExpirationDate").addEventListener("change", validate_date);

// walidacja imienia ojca
document.getElementById("lead_fatherFirstName").addEventListener("change", validate_string);

// walidacja imienia matki
document.getElementById("lead_motherFirstName").addEventListener("change", validate_string);

// walidacja nazwiska rodowego matki
document.getElementById("lead_motherFamilySurname").addEventListener("change", validate_string);

// walidacja adresu
document.getElementById("lead_addressStreetAndNumber").addEventListener("change", validate_adress);

// walidacja kodu pocztowego
document.getElementById("lead_addressPostCode").addEventListener("change", validate_postCode);

// walidacja miejscowości
document.getElementById("lead_addressCity").addEventListener("change", validate_string);

// walidacja województwa
document.getElementById("lead_voivodeship").addEventListener("change", validate_voivodeship);

// walidacja obywatelstwa
document.getElementById("lead_nationality").addEventListener("change", validate_string);

// walidacja korespondencyjnego adresu
document.getElementById("lead_correspondenceAddressStreetAndNumber").addEventListener("change", validate_adress);

// walidacja korespondencyjnego kodu pocztowego
document.getElementById("lead_correspondenceAddressPostCode").addEventListener("change", validate_postCode);

// walidacja korespondencyjnej miejscowości
document.getElementById("lead_correspondenceAddressCity").addEventListener("change", validate_string);

// walidacja korespondencyjnego województwa
document.getElementById("lead_correspondenceVoivodeship").addEventListener("change", validate_voivodeship);

// walidacja daty zamieszkania pod aktualnym adresem
document.getElementById("lead_dateFromLivesAtCurrentAddress").addEventListener("change", validate_date);

// walidacja branży w której pracuje
document.getElementById("lead_workIndustry").addEventListener("change", validate_string);

// walidacja nazwy firmy
document.getElementById("lead_companyName").addEventListener("change", validate_string);

// walidacja stażu pracy
document.getElementById("lead_workLengthExperience").addEventListener("change", validate_numberBigerNull);

// walidacja wysokości wynagrodzeń stałych
document.getElementById("lead_fixedSalaryNet").addEventListener("change", validate_numberCanBeNull);

// walidacja wysokości wynagrodzeń doraźnych
document.getElementById("lead_estimatedTimeSalaryNet").addEventListener("change", validate_numberCanBeNull);

// walidacja ilości osób w gospodarstwie
document.getElementById("lead_numberOfPeopleInTheHousehold").addEventListener("change", validate_numberBigerNull);

// walidacja przychodu całego gospodarstwa domowego
document.getElementById("lead_totalFamilyIncome").addEventListener("change", validate_numberCanBeNull);

// walidacja rodzaju umowy
document.getElementById("lead_typeOfWorkContract").addEventListener("change", validate_string);

// walidacja daty zawarcia umowy 
document.getElementById("lead_startWorkContractDate").addEventListener("change", validate_date);

// walidacja daty końca umowy
document.getElementById("lead_endWorkContractDate").addEventListener("change", validate_datLonger);

// walidacja daty początkowej zobowiązań alimentowych
document.getElementById("lead_alimonyDateFrom").addEventListener("change", validate_date);

// walidacja daty końca zobowiązania alimentowego
document.getElementById("lead_alimonyDateTo").addEventListener("change", validate_datLonger);

// walidacja kwoty zobowiązania alimentowego
document.getElementById("lead_alimonyAmount").addEventListener("change", validate_numberBigerNull);

//checkbox zobowiązania alimentowe
document.getElementById("lead_alimony").addEventListener("click", validate_alimony);

//checkbox adreess korespondencyjny
document.getElementById("adresscoresp_form").addEventListener("click", validate_aderssCoresp);


// ukrywanie zobowiązania alimentowe
function validate_alimony() {
    let addressBlock=document.getElementById("alimonyform")
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
// $('#lead_save').on('click', function (e) {
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