function verif()
{
    var cin = document.forms["registerform"]["cin"].value;
    var nom = document.forms["registerform"]["nom"].value;
    var prenom = document.forms["registerform"]["prenom"].value;
    var email = document.forms["registerform"]["email"].value;
    var classe = document.forms["registerform"]["classe"].value;
    var adresse = document.forms["registerform"]["adresse"].value;
    var datenaissance = document.forms["registerform"]["datenaissance"].value;
    var password = document.forms["registerform"]["password"].value;

    var errorcin = document.getElementById('cin');
    var errorn = document.getElementById('nom');
    var errorp = document.getElementById('prenom');
    var erroremail = document.getElementById('email');
    var errorclasse = document.getElementById('classe');
    var erroradresse = document.getElementById('adresse');
    var errorDatenaissance = document.getElementById('datenaissance');
    var errorpassword = document.getElementById('password');

    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();

    if (cin == "")
    {
        errorcin.innerHTML = "Veuillez entrer votre carte d identite !";
    }
    else if (isNaN(cin) || (cin.value.length!=8))
    {
        errorcin.innerHTML = "votre cin doit numerique et de 8 chiffres";

    }
    else 
    {
        errorcin.innerHTML = "";

    }

    if (nom == "") 
    {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) 
    {
        errornom.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errornom.innerHTML = "";

    }

    if (prenom == "") 
    {
        errorprenom.innerHTML = "Veuillez entrer votre prenom!";

    }
    else if (!(prenom.match(letters) && prenom.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorprenom.innerHTML = "Veuillez entrer un prenom valid!";
    }
    else
    {
        errorP.innerHTML = "";

    }

    if (email == "") 
    {
        erroremail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!email.match('@esprit.tn')) 
    {
        erroremail.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        erroremail.innerHTML = "";

    }

    if (password == "")
     {
        errorpassword.innerHTML = "Veuillez entrer votre mot de passe!";

    }
    else if (!(password.match(/[0-9]/g) &&
        password.match(/[A-Z]/g) &&
        password.match(/[a-z]/g) &&
        password.length >= 8)) {
        errorpassword.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";

    }
    else 
    {
        errorpassword.innerHTML = "";

    }

    if (datenaissance == "")
    {
        errordatenaissance.innerHTML = "Veuillez choisir une date!";

    }
    else if (new Date(datenaissance).toLocaleString() > dateNow.toLocaleString())
    {
        errordatenaissance.innerHTML = "La date doit être inférieur à la date actuelle";
    }
    else 
    {
        errordatenaissance.innerHTML = "";

    }

   function validateForm(e) {
        e.preventDefault();
        verif();
    }
    

}