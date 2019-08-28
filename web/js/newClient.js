// walidacja imienia
document.getElementById("lead_firstName").addEventListener("change", validate_firstName);

function validate_firstName() {
    // console.log(this.value.length)
    if (this.value.length < 3 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        // console.log(this.id+"_error")
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja nazwiska
document.getElementById("lead_lastName").addEventListener("change", validate_lastName);

function validate_lastName() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja peselu
document.getElementById("lead_pin").addEventListener("change", validate_pin);

function validate_pin() {
    // console.log(this.value.length)   if (!this.value.match(/^\d\d-\d\d\d$/))
    if (this.value.length != 11 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

//walidacja numeru telefonu
document.getElementById("lead_phoneNumber").addEventListener("change", validate_phoneNumber);

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

// walidacja adresu mailowego
document.getElementById("lead_email").addEventListener("change", validate_email);

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



// walidacja Daty urodzenia  /^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/i
document.getElementById("lead_birthDate").addEventListener("change", validate_birthDate);

function validate_birthDate() {
    if (!this.value.match(/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/i)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}


// walidacja miejsca urodzenia
document.getElementById("lead_birthPlace").addEventListener("change", validate_birthPlace);

function validate_birthPlace() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja Seri i nrumeru dowodu osobistego
document.getElementById("lead_idCard").addEventListener("change", validate_idCard);

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


// walidacja daty ważności dow. osobistego




// walidacja imienia ojca
document.getElementById("lead_fatherFirstName").addEventListener("change", validate_fatherFirstName);

function validate_fatherFirstName() {
    if (this.value.length < 3 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja imienia matki
document.getElementById("lead_motherFirstName").addEventListener("change", validate_motherFirstName);

function validate_motherFirstName() {
    if (this.value.length < 3 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja nazwiska rodowego matki
document.getElementById("lead_motherFamilySurname").addEventListener("change", validate_motherFamilySurname);

function validate_motherFamilySurname() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja adresu
document.getElementById("lead_addressStreetAndNumber").addEventListener("change", validate_addressStreetAndNumber);

function validate_addressStreetAndNumber() {
    if (!this.value.match(/^([A-Za-z0-9_\-\.])+\ ([A-Za-z0-9_\-\.])/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja kodu pocztowego
document.getElementById("lead_addressPostCode").addEventListener("change", validate_addressPostCode);

function validate_addressPostCode() {
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

// walidacja miejscowości
document.getElementById("lead_addressCity").addEventListener("change", validate_addressCity);

function validate_addressCity() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja województwa
document.getElementById("lead_voivodeship").addEventListener("change", validate_voivodeship);

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

// walidacja obywatelstwa
document.getElementById("lead_nationality").addEventListener("change", validate_nationality);

function validate_nationality() {
    if (this.value.length < 3 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja korespondencyjnego adresu
document.getElementById("lead_correspondenceAddressStreetAndNumber").addEventListener("change", validate_correspondenceAddressStreetAndNumber);

function validate_correspondenceAddressStreetAndNumber() {
    if (!this.value.match(/^([A-Za-z0-9_\-\.])+\ ([A-Za-z0-9_\-\.])/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja korespondencyjnego kodu pocztowego
document.getElementById("lead_correspondenceAddressPostCode").addEventListener("change", validate_correspondenceAddressPostCode);

function validate_correspondenceAddressPostCode() {
    if (!this.value.match(/^\d\d-\d\d\d$/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja korespondencyjnej miejscowości
document.getElementById("lead_correspondenceAddressCity").addEventListener("change", validate_correspondenceAddressCity);

function validate_correspondenceAddressCity() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja korespondencyjnego województwa
document.getElementById("lead_correspondenceVoivodeship").addEventListener("change", validate_correspondenceVoivodeship);

function validate_correspondenceVoivodeship() {
    if (this.value.length < 4 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja branży w której pracuje
document.getElementById("lead_workIndustry").addEventListener("change", validate_workIndustry);

function validate_workIndustry() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja nazwy firmy
document.getElementById("lead_companyName").addEventListener("change", validate_companyName);

function validate_companyName() {
    if (this.value.length < 2 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// walidacja stażu pracy
document.getElementById("lead_workLengthExperience").addEventListener("change", validate_workLengthExperience);

function validate_workLengthExperience() {
    if (this.value.length < 1 || this.value <= 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja wysokości wynagrodzeń stałych
document.getElementById("lead_fixedSalaryNet").addEventListener("change", validate_fixedSalaryNet);

function validate_fixedSalaryNet() {
    if (this.value.length < 1 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja wysokości wynagrodzeń doraźnych
document.getElementById("lead_estimatedTimeSalaryNet").addEventListener("change", validate_estimatedTimeSalaryNet);

function validate_estimatedTimeSalaryNet() {
    if (this.value.length < 1 || this.value < 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja ilości osób w gospodarstwie
document.getElementById("lead_numberOfPeopleInTheHousehold").addEventListener("change", validate_numberOfPeopleInTheHousehold);

function validate_numberOfPeopleInTheHousehold() {
    if (this.value.length < 1 || this.value <= 0) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// walidacja przychodu całego gospodarstwa domowego
document.getElementById("lead_fixedSalaryNet").addEventListener("change", validate_estimatedTimeSalaryNet);



// walidacja rodzaju umowy
document.getElementById("lead_typeOfWorkContract").addEventListener("change", validate_typeOfWorkContract);

function validate_typeOfWorkContract() {
    if (this.value.length < 3 || isNaN(this.value) == false) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block";
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none";
    }
}

// ukrywanie checkboxa odnośnie alimentów
document.getElementById("lead_alimony").addEventListener("click", validate_alimony);

function validate_alimony() {
    if (this.checked == true) {
        document.getElementById("alimonyform").style.display = ""
    }
    else {
        document.getElementById("alimonyform").style.display = "none"
    }
}













// $( "form" )
//   .change(function () {

//     let checkformsclass=document.getElementsByTagName('is-invalid')
//     for(let i=0;i<checkformsclass.length;i++){
//         if(checkformsclass[i])
//         {
//             document.getElementById("lead_save").disabled=true
//             console.log("unlocked")
//         }
//         else
//         {
//             document.getElementById("lead_save").disabled=false
//             console.log("locked")
//         }
//     }
//   })
//   .change();

// .document.querySelector('.is-invalid')addEventListener("change",abc)
// function abc(){
//     console.log('b')
// }

