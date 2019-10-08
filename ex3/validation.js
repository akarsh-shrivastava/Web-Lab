/*$(document).ready(function () {
   $("#signupform").submit(function (e) {
      e.preventDefault();  // Missing () for preventDefault method
      var userArray = [];
      var user = {
        name: $('#pname').val(),  // also, you can get the values here only
        email: $('#email').val()  // no need to use extra variables for it
      };
      console.log(user.email, user.name);
   });
});*/
function validateEmail(mail) 
{
  var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  if (re.test(mail)){
    return true;
  }
  else{
    return false;
  }
}

function validate() {
  if( document.myForm.Name.value == "" ) {
    alert( "Please provide your name!" );
    document.myForm.Name.focus() ;
    return false;
  }
  var email = document.myForm.EMail.value;
  console.log(email);
  if(email == "") {
    alert( "Please provide your Email!" );
    document.myForm.EMail.focus() ;
    return false;
  }
  if(!validateEmail(email)) {
    alert( "Please provide a valid Email!" );
    document.myForm.EMail.focus() ;
    return false;
  }
  if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
    document.myForm.Zip.value.length != 5 ) {
    
    alert( "Please provide a zip in the format #####." );
    document.myForm.Zip.focus() ;
    return false;
  }
  if( document.myForm.Country.value == "-1" ) {
    alert( "Please provide your country!" );
    return false;
  }
  return( true );
}