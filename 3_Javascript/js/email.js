
var email=document.getElementById('email');
    
email.onkeyup= function checkEmail() {
    var filter = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

    if (!filter.test(email.value)) {
        email.style.background="red";
    }else{
        email.style.background="green";
    }

}