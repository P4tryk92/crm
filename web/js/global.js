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

//data krótsza
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

//data możliwa odległa
function validate_datLonger() {
    if (!this.value.match(/^(19|20|21)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/i)) {
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

// liczba od minus do plus
function validate_numberCanBeLowerNull() {
    if (this.value.length < 1) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}

// nip
function validate_nip() {
    if (this.value.length != 10 || this.value < 0) {
       this.className = "form-control is-invalid";
       document.getElementById(this.id + "_error").style.display = "block"
   }
   else {
       this.className = "form-control is-valid";
       document.getElementById(this.id + "_error").style.display = "none"
   }
}

// regon
function validate_regon() {
    if (this.value.length == 9 ||this.value.length == 14 || this.value < 0) {
        this.className = "form-control is-valid";
       document.getElementById(this.id + "_error").style.display = "none"
   }
   else {
       this.className = "form-control is-invalid";
   document.getElementById(this.id + "_error").style.display = "block"
   }
}

// adres strony internetowej
function validate_site() {
    if (!this.value.match(/^([w]{3})+\.([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)) {
        this.className = "form-control is-invalid";
        document.getElementById(this.id + "_error").style.display = "block"
    }
    else {
        this.className = "form-control is-valid";
        document.getElementById(this.id + "_error").style.display = "none"
    }
}
