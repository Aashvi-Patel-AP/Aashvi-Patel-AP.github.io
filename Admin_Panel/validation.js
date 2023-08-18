
function validateUser()
{   
    var regName =/^[A-Za-z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno=/^\d{10}$/;

    var FirstName= document.getElementById("firstname").value;
    var LastName = document.getElementById("lastname").value;
    var Email = document.getElementById("email").value;
    var Phone = document.getElementById("phoneNo").value;
    var Password = document.getElementById("password").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var ConfirmPassword = document.getElementById("confirm_password").value;
    if(!regName.test(FirstName)){
        alert('Please enter your first name which does not include numbers and special character');
        document.getElementById('firstname').focus();
        return false;
    }
    if(!regName.test(LastName)){
        alert('Please enter your last name which does not include numbers and special character');
        document.getElementById('lastname').focus();
        return false;
    }
    if(!mailformat.test(Email)){
        alert('Please enter correct mail id');
        document.getElementById('email').focus();
        return false;
    }
    if(!phoneno.test(Phone) || Phone.length != 10){
        alert('Please enter correct Contact Number');
        document.getElementById('phoneNo').focus();
        return false;
    }
    if(Password != ConfirmPassword){
        alert('Password and ConfirmPassword must be same');
        document.getElementById('password').focus();
        return false;
    }
}