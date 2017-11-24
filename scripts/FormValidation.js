function validatForm(){

var name = document.forms["form"]["name"].value;
var email = document.forms["form"]["email"].value;
var message = document.forms["form"]["message"].value;

if(name != ""){
    return true;
} else{
    return alert("Uhh your name?");
}
if(email != ""){
    return true;
} else{
    return alert("seriously?..EMAIL!");
}
if(message != ""){
    return true;
} else{
    return alert("What do you want me to answer?");
}


}