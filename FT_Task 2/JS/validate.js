var username = document.getElementById("nameid");
var pass = document.getElementById("passid");
var username_err = document.getElementById("name_error");
var password_err = document.getElementById("pass_error");
var email = document.getElementById("emailid");
var email_err = document.getElementById("email_error");
function checkName(){
if(username.value.length>3 ){
    username_err.innerText = "";
    username.style.backgroundColor="lightgreen";
}
else{
    username_err.innerText = "names length must be more than 3 characters";
    username.style.backgroundColor="";
}
}

function checkPassword(){
if(pass.value.length>6 ){
    password_err.innerText = "";
    pass.style.backgroundColor = "lightgreen";
}
else{
    password_err.innerText = "password must be more than 6 characters";
    pass.style.backgroundColor="";
}
}

function checkEmail(){
    var emailregex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
if(emailregex.test(email.value)){
    email_err.innerText = "";
    email.style.backgroundColor = "lightgreen";

}
else{
    email_err.innerText = "names length must be more than 3 characters";
    email.style.backgroundColor = "";
}
}