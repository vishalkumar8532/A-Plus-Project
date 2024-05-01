
function validatePassword()
{
  var password=document.getElementById("password");
  var Confirm_Password =document.getElementById("confirm_password");
  
        if(password.value != Confirm_Password.value) 
        {
        Confirm_Password.setCustomValidity("Passwords Don't Match");
        } 
        else 
        {
        Confirm_Password.setCustomValidity('');
        }
}