<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['husername'])){header("location:welcome.php");}
?>

 
<div class="div">
<fieldset>
<legend>Hospital registration form</legend>                 
  <form name= "form" method="post"> 
  <label for="hname">Name of hospital :</label>
  <input type="text" id="hname" name="hname" onkeyup="checkName()" onblur="checkName()">
  <span class="error" id="hnameErr"> <?php echo $hnameErr;?></span><hr>

  <label for="husername">Username for hospital :</label>
  <input type="text" id="husername" name="husername" onkeyup="checkusername()" onblur="checkusername()">
  <span class="error" id="husernameErr"> <?php echo $husernameErr;?></span><hr>

  <label for="hpassword">Password for hospital :</label>
  <input type="password" id="hpassword" name="hpassword" onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="hpasswordErr"> <?php echo $hpasswordErr;?></span><hr>

  <label for="hconfirm_password">Enter the password again:</label>
  <input type="password" id="hconfirm_password" name="hconfirm_password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()">
  <span class="error" id="hconfirm_passwordErr"> <?php echo $hconfirm_passwordErr;?></span><hr>


  <label for="hemail">Hospital for email:</label>
  <input type="text" id="hemail" name="hemail" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="hemailErr"> <?php echo $hemailErr;?></span><hr>

  <label for="hlocation">Location of the hospital :</label>
  <input type="text" id="hlocation" name="hlocation" onkeyup="checklocation()" onblur="checklocation()">
  <span class="error" id="hlocationErr"> <?php echo $hlocationErr;?></span><hr>

  <label for="hphone">Hospital phone number:</label>
  <input type="tel" id="hphone" name="hphone" pattern="[0-9]{3}[0-9]{8}" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()">
  <span class="error" id="hphoneErr"> <?php echo $hphoneErr;?></span><hr>

  
<fieldset>
  <legend>Established date for hospital</legend>
  <input type="date" id="hedate" name="hedate" onkeyup="checkhedate()" onblur="checkhedate()"> 
  <span class="error" id="hedateErr"> <?php echo $hedateErr;?></span>
</fieldset><hr>

<label for="hosid">Hospital registration ID :</label>
  <input type="number" id="hosid" name="hosid" onkeyup="checkregistrationid()" onblur="checkregistrationid()">
  <span class="error" id="hosidErr"> <?php echo $hosidErr;?></span><hr>

  <label for="hicuseatno">Hospital ICU seat number:</label>
  <input type="number" id="hicuseatno" name="hicuseatno" onkeyup="checkicuseat()" onblur="checkicuseat()">
  <span class="error" id="hicuseatnoErr"> <?php echo $hicuseatnoErr;?></span><hr>

  <label for="hoswno">Hospital ward number:</label>
  <input type="number" id="hoswno" name="hoswno" onkeyup="checkwardnumber()" onblur="checkwardnumber()">
  <span class="error" id="hoswnoErr"> <?php echo $hoswnoErr;?></span><hr>

  <label for="hosnoseat">Hospital seat number:</label>
  <input type="number" id="hosnoseat" name="hosnoseat" onkeyup="checkseatnumber()" onblur="checkseatnumber()">
  <span class="error" id="hosnoseatErr"> <?php echo $hosnoseatErr;?></span><hr>


  <label for="hcabinno">Hospital cabin number:</label>
  <input type="number" id="hcabinno" name="hcabinno" onkeyup="checkcabinnumber()" onblur="checkcabinnumber()">
  <span class="error" id="hcabinnoErr"> <?php echo $hcabinnoErr;?></span><hr>

  <fieldset>
  <b>Oxygen availability:</b>
  
  <select name="hoxav" id="hoxav" onkeyup="checkoxygenavailability()" onblur="checkoxygenavailability()">
  <option name="hoxav" <?php if (isset($hoxav) && $hoxav=="none") echo "checked";?> value="none"></option>
  <option name="hoxav"<?php if (isset($hoxav) && $hoxav=="Yes") echo "checked";?> value="Yes">Yes</option>
  <option name="hoxav"<?php if (isset($hoxav) && $hoxav=="No") echo "checked";?> value="No">No</option>
  </select>
  <span class="error" id="hoxavErr"> <?php echo $hoxavErr;?></span>
 </fieldset><hr>
 <input type="submit" name="submit" value="Signup" class="btn btn-info"><br><br>
 <input type="submit" name="reset" value="Reset" class="btn btn-info"><br><br><br><br><br>

</form>  
</fieldset>
</div> 
</body>
</html>
<script type="text/javascript">
	function Clear() {
    $('#hname').val("");
    $('#husername').val("");
    $('#hpassword').val("");
    $('#hconfirm_password').val("");
    $('#errmsg').html("");
    document.getElementById("lb-hemail").style["visibility"] = "hidden";
    document.getElementById("lb-hpassword").style["visibility"] = "hidden";
    document.getElementById("lb-hname").style["visibility"] = "hidden";
    document.getElementById("lb-hconfirm_pass").style["visibility"] = "hidden";
}
function RegistrationFieldValidation() {
    
    var hname = $('#hname').val();
    var husername = $('#husername').val();
    var hpassword = $('#hpassword').val();
    var hconfirm_password = $('#hconfirm_password').val();
    var hemail = $('#hemail').val();
    var hlocation = $('#hlocation').val();
    var hphone = $('#hphone').val();
    var hedate = $('#hedate').val();
    var hosid = $('hosid').val();
    var hicuseatno = $('#hicuseatno').val();
    var hoswno = $('#hoswno').val();
    var hosnosea = $('#hosnosea').val();
    var hcabinno = $('#hcabinno').val();
    var hoxav = $('#hoxav').val();
    document.getElementById("hemail").style["visibility"] = "hidden";
    document.getElementById("hpassword").style["visibility"] = "hidden";
    document.getElementById("hname").style["visibility"] = "hidden";
    document.getElementById("hconfirm_password").style["visibility"] = "hidden";
    var status = "";

    var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regPhone = /(^(013)|^(014)|^(015)|^(016)|^(017)|^(018)|^(019)){1}\d{8}/;
    hname
    if (hname.length >2) {
        document.getElementById("hname").style["visibility"] = "visible";
        status = "hname";
    }
    if (!(huserName.toString()).match(regEmail) && (!(huserName.toString()).match(regPhone) || huserName.length > 11)) {
        document.getElementById("hemail").style["visibility"] = "visible";
        status = "huseraname";
    }
    if (hpassword.length < 6) {
        document.getElementById("lb-hpassword").style["visibility"] = "visible";
        status = "hpassword";
    }
    if (hconfirm_Password != hpassword) {
        document.getElementById("hconfirm_password").style["visibility"] = "visible";
        status = "hconfirm_passwords";
    }
    if (status == "") {
        AddUser(Name, username, password);
    }

}

function AddUser(name, uname, pass) {
    var catname = "addsuer";
    $.ajax({
        type: 'POST',
        data: {
            //addUser: catname,
            name: name,
            username: username,
            password: password
        },
        success: function (data, status) {
            $('#errmsg').html(data);
        }
    });
    return false;
}
</script>