var password = document.getElementById("reg_pwd"), confirm_password = document.getElementById("reg_cpwd");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

/*var val = pl_me_mob.value
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    alert("Invalid number; must be ten digits")
    pl_me_mob.focus()
    return false
}*/
function validateForm()
  {
  var a = document.getElementById('mob_no1').value;
  var b = document.getElementById('mob_no2').value;
  if(a=="")
  {
  alert("please Enter the Contact Number");
  document.getElementById('mob_no1').focus();
  return false;
  }
  if(b=="")
  {
  alert("please Enter the Contact Number");
  document.getElementById('mob_no2').focus();
  return false;
  }
  if(isNaN(a))
  {
  alert("Enter the valid Mobile Number(Like : 9566137117)");
  document.getElementById('mob_no1').focus();
  return false;
  }
  if(isNaN(b))
  {
  alert("Enter the valid Mobile Number(Like : 9566137117)");
  document.getElementById('mob_no2').focus();
  return false;
  }
  if((a.length < 10) || (a.length > 10))
  {
  alert(" Your Mobile Number must be 1 to 10 Integers");
  document.getElementById('mob_no1').select();
  return false;
  }
  if((b.length < 10) || (b.length > 10))
  {
  alert(" Your Mobile Number must be 1 to 10 Integers");
  document.getElementById('mob_no2').select();
  return false;
  }
  return true;
  }