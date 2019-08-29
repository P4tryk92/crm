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

// walidacja Daty urodzenia 
document.getElementById("lead_birthDate").addEventListener("change", validate_date);

// walidacja miejsca urodzenia
document.getElementById("lead_birthPlace").addEventListener("change", validate_string);

// walidacja Seri i nrumeru dowodu osobistego
document.getElementById("lead_idCard").addEventListener("change", validate_idCard);

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

// ukrywanie checkboxa odnośnie alimentów
document.getElementById("lead_alimony").addEventListener("click", validate_alimony);

//checkbos adreess
document.getElementById("adresscoresp_form").addEventListener("click", validate_aderssCoresp);



// string
function validate_string() {
    // console.log(this.value.length)
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

//pesel
function validate_pin() {
    // console.log(this.value.length)
    if (this.value.length != 11 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

//telefon
function validate_phoneNumber() {
    if (this.value.length != 9 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

//email
function validate_email() {
    if (!this.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

//data
function validate_date() {
    if (!this.value.match(/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/i)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// seria i nr dowód osobisty
function validate_idCard() {
    if (!this.value.match(/^[A-Z]{3}\s *\d{6}$/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

//adres ulica + numer
function validate_adress() {
    if (!this.value.match(/^([A-Za-z0-9_\-\.])+\ ([A-Za-z0-9_\-\.])/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// kod pocztowy
function validate_postCode() {
    //if (!this.value.match(/^\d{2}-*\d{3}$/))
    if (!this.value.match(/^\d\d-\d\d\d$/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

//województwo
function validate_voivodeship() {
    if (this.value.length < 4 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// liczba większy od 0
function validate_numberBigerNull() {
    if (this.value.length < 1 || this.value <= 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// liczba z możliwością 0
function validate_numberCanBeNull() {
    if (this.value.length < 1 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// ukrywanie checkboxa
function validate_alimony() {
    if (this.checked == true) {
        document.getElementById("alimonyform").style.display = ""
    }
    else {
        document.getElementById("alimonyform").style.display = "none"
    }
}

// ukrywanie checkboxa korespondencyjnego
function validate_aderssCoresp() {
    if (this.checked == true) {
        document.getElementById("aderssCoresp").style.display = ""
    }
    else {
        document.getElementById("aderssCoresp").style.display = "none"
    }
}



//alert buttona
$('#lead_save').on('click', function (e) {
    var error = 0;
    $('.form-group input').each(function (index) {
        if (!$(this).val()) {
            error++;
        }
    });
    if (error) {
        e.preventDefault();
        alert('Uzupełnij wszystkie pola');
    }
});