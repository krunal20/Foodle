function logincheck() {
  if (loginForm.namefield.value == ""){
    alert("Enter Username!");
    return false;
  }
  if (loginForm.mailfield.value == ""){
    alert("Enter Email!");
    return false;
  }
}

function pstrength(password) {
  var password_strength = document.getElementById("password_strength");
 
  if (password.length == 0) {
    password_strength.innerHTML = "";
    return;
  }
 
 var regex = new Array();
 regex.push("[A-Z]");
 regex.push("[a-z]");
 regex.push("[0-9]");
 regex.push("[$@$!%*#?&]");
 var passed = 0;
 
 for (var i = 0; i < regex.length; i++) {
   if (new RegExp(regex[i]).test(password)) {
     passed++;
   }
 }
 
   if (passed > 2 && password.length > 8) {
     passed++;
   }
 
   var color = "";
   var strength = "";
   switch (passed) {
     case 0:
     case 1:
       strength = "Weak";
       color = "red";
       break;
     case 2:
       strength = "Good";
       color = "darkorange";
       break;
     case 3:
     case 4:
       strength = "Strong";
       color = "green";
       break;
     case 5:
       strength = "Very Strong";
       color = "darkgreen";
       break;
   }
   password_strength.innerHTML = strength;
   password_strength.style.color = color;
}

function signupcheck(){
  if (signupForm.namefield.value == ""){
    alert("Enter Username!");
    return false;
  }
  if (signupForm.mailfield.value == ""){
    alert("Enter Email!");
    return false;
  }
  var strength = password_strength.innerHTML;
  if (strength == "Strong" || strength == "Very Strong"){
    return true;
  }
  else{
    alert("You need a strong password! Try using special characters, lowercase letters, uppercase letters, numbers and increasing length of password.");
    return false;
  }
}

function feedbackCheck(){
  if (feedback.namefield.value == ""){
      alert("Enter Name!");
      return false;
  }
  else if (feedback.mailfield.value == ""){
      alert("Enter Email!");
      return false;
  }
  else if (feedback.msgfield.value == ""){
      alert("Enter Message!");
      return false;
  }
  else{
      alert("Message Sent!");
      return true;
  }
}