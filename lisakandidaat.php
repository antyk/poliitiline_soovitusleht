<?php

//Validation ei tööta veel
$nameErr = $numErr = $partyErr = "";
$nimi = $number = $erakond ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nimi"])) {
        $nameErr = "Missing";
    }
    else {
        $nimi = $_POST["nimi"];
    }
 
    if (empty($_POST["number"])) {
        $addrErr = "Missing";
    }
    else {
        $number = $_POST["number"];
    }
 
    if (empty($_POST["erakond"]))  {
        $emailErr = "Missing";
    }
    else {
        $erakond = $_POST["erakond"];
    }
}

include ("header.php");
?>

<div id="inviteheader">
	<div id="status">
	</div>
	<h2 id="juhis"></h2>
</div>

<?php
if (isset($_POST["FBID"])=== true && empty($_POST["FBID"])=== false) {
	echo $_POST["FBID"];
}
?>

<div id="fb">
    <fb:login-button autologoutlink="true" scope="public_profile,email" data-size="medium"
    onlogin="checkLoginState();">
    </fb:login-button>
    <script src="js/facebook.js"></script>
</div>

<div id="invite">
	<form method="post" action="funktsioonid/invitedb.php" onsubmit="return validateForm()">
			
		<label>Nimi</label>
		<input name="nimi" placeholder="Kandidaadi nimi" required>
		<span class="error"><?php echo $nameErr;?></span>
				
		<label>Number</label>
		<input name="number"  placeholder="Kandidaadi number" required>
		<span class="error"><?php echo $numErr;?></span>
		
		<label>Erakond</label>
		<input name="erakond"  placeholder="Kandidaadi erakond" required>
		<span class="error"><?php echo $partyErr;?></span>
		
		<label>Kirjeldus</label>
		<textarea name="kirjeldus" placeholder="Lühike ülevaade kandidaadist"></textarea>
		
		<input type="hidden" name="FBID" value="" id="FBID"/>
		<input type="hidden" name="FBname" value="" id="FBname"/>
		
		<input id="submit" name="submit" type="submit" value="Submit">
	
	</form>
</div>

<?php include ("footer.php"); ?>


