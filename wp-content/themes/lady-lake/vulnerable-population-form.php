<?php /* Template Name: Vulnerable Population
*/ ?>
<?php get_header(); ?>

<div id="content">
<style>
	.error {color: red;}
	.red {color: red; font-weight:bold;}
</style>

<form action="<?php the_permalink(); ?>" method="post" class="" >
<!--<form action="vulnerable-population-form.php" method="post" class="" >-->
<legend><h3>Vulnerable Population Registry Application</h3></legend>

<?php
	//check to see if form has been filled out
	$completed = false;
	//form validation
	if (isset($_POST['submitted'])) {
		
		if (!empty($_POST['vulname'])) {$vulname = $_POST['vulname'];} else {$vulname = NULL; echo '<span class="error">Please enter a name.</span><br />';}
		if (!empty($_POST['app_date'])) {$app_date = $_POST['app_date'];} else {$app_date = NULL; echo '<span class="error">Please enter today\'s date.</span><br />';}
		if (!empty($_POST['address'])) {$address = $_POST['address'];} else {$address = NULL; echo '<span class="error">Please enter a home address.</span><br />';}
		if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST['hphone'])) {$hphone = $_POST['hphone'];} else {$hphone = NULL; echo '<span class="error">Please enter a valid home phone number: ###-###-####</span><br />';}
		if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST['cphone'])) {$cphone = $_POST['cphone'];} else {$cphone = NULL; echo '<span class="error">Please enter a valid cell phone number: ###-###-####</span><br />';}
		if (!empty($_POST['dob'])) {$dob = $_POST['dob'];} else {$dob = NULL; echo '<span class="error">Please enter your date of birth.</span><br />';}
		if (!empty($_POST['pob'])) {$pob = $_POST['pob'];} else {$pob = NULL; echo '<span class="error">Please enter your place of birth.</span><br />';}
		if (!empty($_POST['sex'])) {$sex = $_POST['sex'];} else {$sex = NULL; echo '<span class="error">Please enter your gender.</span><br />';}
		if (!empty($_POST['race'])) {$race = $_POST['race'];} else {$race = NULL; echo '<span class="error">Please enter your race.</span><br />';}
		if (!empty($_POST['height'])) {$height = $_POST['height'];} else {$height = NULL; echo '<span class="error">Please enter your height.</span><br />';}
		if (!empty($_POST['weight'])) {$weight = $_POST['weight'];} else {$weight = NULL; echo '<span class="error">Please enter your weight.</span><br />';}
		if (!empty($_POST['eyecolor'])) {$eyecolor = $_POST['eyecolor'];} else {$eyecolor = NULL; echo '<span class="error">Please enter your eye color.</span><br />';}
		if (!empty($_POST['glasses'])) {$glasses = $_POST['glasses'];} else {$glasses = NULL; echo '<span class="error">Please enter if you wear glasses.</span><br />';}
		if (!empty($_POST['contacts'])) {$contacts = $_POST['contacts'];} else {$contacts = NULL; echo '<span class="error">Please enter if you wear contacts.</span><br />';}
		if (!empty($_POST['traits'])) {$traits = $_POST['traits'];} else {$traits = NULL; echo '<span class="error">Please enter any physical traits.</span><br />';}
		if (!empty($_POST['speech'])) {$speech = $_POST['speech'];} else {$speech = NULL; echo '<span class="error">Please enter if you have speech problems.</span><br />';}
		if (!empty($_POST['allergies'])) {$allergies = $_POST['allergies'];} else {$allergies = NULL; echo '<span class="error">Please enter if you have any allergies.</span><br />';}
		if (!empty($_POST['physical'])) {$physical = $_POST['physical'];} else {$physical = NULL; echo '<span class="error">Please enter any physical conditions/disabilities.</span><br />';}
		if (!empty($_POST['diagnosis'])) {$diagnosis = $_POST['diagnosis'];} else {$diagnosis = NULL; echo '<span class="error">Please enter your diagnosis.</span><br />';}
		if (!empty($_POST['medications'])) {$medications = $_POST['medications'];} else {$medications = NULL; echo '<span class="error">Please enter all medications.</span><br />';}
		if (!empty($_POST['onbehalf'])) {$onbehalf = $_POST['onbehalf'];} else {$onbehalf = NULL; echo '<span class="error">Please enter if you are filling out on behalf of someone.</span><br />';}
		if (!empty($_POST['q1'])) {$q1 = $_POST['q1'];} else {$q1 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q2'])) {$q2 = $_POST['q2'];} else {$q2 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q3'])) {$q3 = $_POST['q3'];} else {$q3 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q4'])) {$q4 = $_POST['q4'];} else {$q4 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q5'])) {$q5 = $_POST['q5'];} else {$q5 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q6'])) {$q6 = $_POST['q6'];} else {$q6 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q7'])) {$q7 = $_POST['q7'];} else {$q7 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q8'])) {$q8 = $_POST['q8'];} else {$q8 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q9'])) {$q9 = $_POST['q9'];} else {$q9 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q10'])) {$q10 = $_POST['q10'];} else {$q10 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q11'])) {$q11 = $_POST['q11'];} else {$q11 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q12'])) {$q12 = $_POST['q12'];} else {$q12 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q15'])) {$q15 = $_POST['q15'];} else {$q15 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q16'])) {$q16 = $_POST['q16'];} else {$q16 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q17'])) {$q17 = $_POST['q17'];} else {$q17 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['q19'])) {$q19 = $_POST['q19'];} else {$q19 = NULL; echo '<span class="error">Please check that all questions have been filled out.</span><br />';}
		if (!empty($_POST['dr1name'])) {$dr1name = $_POST['dr1name'];} else {$dr1name = NULL; echo '<span class="error">Please enter your doctors name.</span><br />';}
		if (!empty($_POST['pricare'])) {$pricare = $_POST['pricare'];} else {$pricare = NULL; echo '<span class="error">Please enter your primary care givers name.</span><br />';}
		
		if (!empty($_POST['certify'])) {$certify = $_POST['certify'];} else {$certify = NULL; echo '<span class="error">Please verify that you agree to the terms.</span><br />';}
		
		//if (preg_match ('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}&/', $_POST['email'])) {
//			$email = $_POST['email'];	
//		} else {
//			$email = NULL;
//			echo '<span class="error"> You need to enter a valid email!</p>';
//		}

		
		//form has been completed, send mail
		if ($vulname && $app_date && $address && $hphone && $cphone && $dob && $pob && $height && $weight && $eyecolor & $glasses && $contacts && $traits && $speech &&  $physical && $diagnosis && $medications && $onbehalf && $q1 && $q2 && $q3 && $q4 && $q5 && $q6 && $q7 && $q8 && $q9 && $q10 && $q11 && $q12 && $q15 && $q16 && $q17 && $q19 && $dr1name && $pricare && $certify) {
			$completed = true; //form has been compelted, set to true.
			//$to = "registry@ladylake.org";
			$to = "chr.ayres@gmail.com";
			$subject = "New Vulnerable Population Registration";
			$message = 
			"Name: " . $vulname . "\r\n".
			"Application Date: " . $app_date . "\r\n".
			"Address: " . $address . "\r\n".
			"Home Phone: " . $hphone . "\r\n".
			"Cell Phone: " . $cphone . "\r\n".
			"Date of Birth: " . $dob . "\r\n".
			"Place of Birth: " . $pob . "\r\n".
			"Sex: " . $sex . "\r\n".
			"Race: " . $race . "\r\n".
			"Height: " . $height . "\r\n".
			"Weight: " . $weight . "\r\n".
			"Hair Color: " . $_POST['hcolor'] . "\r\n".
			"Hair Length: " . $_POST['hlength'] . "\r\n".
			"Dentures: " . $_POST['dentures'] . "\r\n".
			"Eye Color: " . $eyecolor . "\r\n".
			"Glasses: " . $glasses . "\r\n".
			"Contacts: " . $contacts . "\r\n".
			"Individual Traits: " . $traits . "\r\n".
			"Native Language: " . $_POST['nlanguage'] . "\r\n".
			"Other Language: " . $_POST['olanguage'] . "\r\n".
			"Speech Problem: " . $speech . "\r\n".
			"Allergies: " . $_POST['allergies'] . "\r\n".
			"Physical Conditions / Disabilities: " . $physical . "\r\n".
			"Diagnosis: " . $diagnosis . "\r\n".
			"Medications: " . $medications . "\r\n".
			"Are you filling on belaf of someone else? Relationship? " . $onbehalf . "\r\n".
			"Are you an Insulin dependent Diabetic? " . $q1 . " - " . $_POST['q1add'] . "\r\n".
			"Heart Conditions? " . $q2 . " - " . $_POST['q2add'] . "\r\n".
			"Do you have a Pacemaker? " . $q3 . " - " . $_POST['q3add'] . "\r\n".
			"Do you wear a Medical Alert Tag? " . $q4 . " - " . $_POST['q4add'] . "\r\n".
			"Do you have a VIAL/ or file of Life? " . $q5 . " - " . $_POST['q5add'] . "\r\n".
			"Are you already registered for a special needs shelter? " . $q6 . " - " . $_POST['q6add'] . "\r\n".
			"Do you have a pet in your home? " . $q7 . " - " . $_POST['q7add'] . "\r\n".
			"Do you have periods of confusion? " . $q8 . " - " . $_POST['q8add'] . "\r\n".
			"Do you require assistance walking? " . $q9 . " - " . $_POST['q9add'] . "\r\n".
			"Do you wander frequently? " . $q10 . " - " . $_POST['q10add'] . "\r\n".
			"Mode of travel normally used?: " . $q11 . "\r\n".
			"Possible destinations when leaving home?: " . $q12 . "\r\n".
			"List Habits or Hobbies: " . $_POST['q13'] . "\r\n".
			"Usual Type of Clothing: " . $_POST['q14'] . "\r\n".
			"Daily Routine: " . $q15 . "\r\n".
			"Name person answers to: " . $q16 . "\r\n".
			"Phrase or words person responds to?: " . $q17 . "\r\n".
			"Previous Occupation: " . $_POST['q18'] . "\r\n".
			"Are you physically or verbally abusive: " . $q19 . "\r\n".
			"Doctor (First): " . $dr1name . " - " . $_POST['dr1phn'] . " - " . $_POST['dr1add'] . "\r\n".
			"Doctor (Second): " . $_POST['dr2name'] . " - " . $_POST['dr2phn'] . " - " . $_POST['dr2add'] . "\r\n".
			"Primary Care Giver: " . $pricare . " - " . $_POST['pricaredob'] . " - " . $_POST['pricareaddy'] . ", " . $_POST['pricarehphone'] . ", " . $_POST['pricarecphone'] . ", " . $_POST['pricarepob'] . ", " . $_POST['pricarebizaddy'] . "\r\n".
			"Secondary Care Giver: " . $_POST['seccare'] . " - " . $_POST['seccaredob'] . " - " . $_POST['seccareaddy'] . ", " . $_POST['seccarehphone'] . ", " . $_POST['seccarecphone'] . ", " . $_POST['seccarepob'] . ", " . $_POST['seccarebizaddy'] . "\r\n";
			
			$headers = "From: LadyLake.org \r\n".
			$headers .= "Cc: " .$_POST['email']. "\r\n";
			mail($to,$subject,$message,$headers);
			echo 'Message Sent! <br /> Your form has been submitted.  You will recieve a confirmation via US mail.';
		} else {
			echo '<p class="error">The form has not been filled out completely.</p>';
		}
		
		
	}//submitted
?>

<?php 
	if ($completed == false) {
?>

<table style="width: 533px;"><!--first part of form-->
	<tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['vulname'])){echo'<span class="red">*</span>';}?>Name:<br /><input type="text" name="vulname" size="80" maxlength="40" value="<?php if(isset($_POST['vulname'])) echo $_POST['vulname']; ?>" placeholder="First and Last" /></td>
        
    </tr>
        
    <tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['address'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="address" size="80" maxlength="140" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" placeholder="Street Name &amp; Number, City, State, Zip" /></td>
    </tr>
    
    <tr>
    	<td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['hphone'])){echo'<span class="red">*</span>';}?>Home Phone:<br /><input type="text" name="hphone" size="13" maxlength="15" value="<?php if(isset($_POST['hphone'])) echo $_POST['hphone']; ?>" placeholder="Ex. 352-555-5555" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['cphone'])){echo'<span class="red">*</span>';}?>Cell Phone:<br /><input type="text" name="cphone" size="13" maxlength="15" value="<?php if(isset($_POST['cphone'])) echo $_POST['cphone']; ?>" placeholder="Ex. 352-555-5555" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['app_date'])){echo'<span class="red">*</span>';}?>Application Date:<br /><input type="text" name="app_date" size="13" maxlength="15" value="<?php if(isset($_POST['app_date'])) echo $_POST['app_date']; ?>" placeholder="MM/DD/YYYY" /></td>
    </tr>
    
    <tr>
    	<td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['dob'])){echo'<span class="red">*</span>';}?>Date of Birth:<br /><input type="text" name="dob" size="13" maxlength="15" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>" placeholder="MM/DD/YYYY" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['pob'])){echo'<span class="red">*</span>';}?>Place of Birth:<br /><input type="text" name="pob" size="13" maxlength="15" value="<?php if(isset($_POST['pob'])) echo $_POST['pob']; ?>" placeholder="What city/state?" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['sex'])){echo'<span class="red">*</span>';}?>Sex:<br />
        <select name="sex">
        	<option value"Not Selected">Choose One</option>
            <option value="Male" <?php if($_POST['sex'] == "Male") { echo "selected='selected'";} ?>>Male</option>
            <option value="Female" <?php if($_POST['sex'] == "Female") { echo "selected='selected'";} ?>>Female</option>
        </select></td>
    </tr>
    
    <tr>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['race'])){echo'<span class="red">*</span>';}?>Race:<br />
        <select name="race">
        	<option value="Not Selected">Choose One</option>
            <option value="White" <?php if($_POST['race'] == "White") { echo "selected='selected'";} ?>>White</option>
            <option value"Hispanic" <?php if($_POST['race'] == "Hispanic") { echo "selected='selected'";} ?>>Hispanic/Latino</option>
            <option value="Black" <?php if($_POST['race'] == "Black") { echo "selected='selected'";} ?>>Black</option>
            <option value="Asian" <?php if($_POST['race'] == "Asian") { echo "selected='selected'";} ?>>Asian</option>
            <option value="Other" <?php if($_POST['race'] == "Other") { echo "selected='selected'";} ?>>Other</option>
        </select></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['height'])){echo'<span class="red">*</span>';}?>Height:<br /><input type="text" name="height" size="13" maxlength="15" value="<?php if(isset($_POST['height'])) echo $_POST['height']; ?>" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['weight'])){echo'<span class="red">*</span>';}?>Weight:<br /><input type="text" name="weight" size="13" maxlength="15" value="<?php if(isset($_POST['weight'])) echo $_POST['weight']; ?>" /></td>
    </tr>
    
    <tr>
        <td style="width: 33%;">Hair Color:<br /><input type="text" name="hcolor" size="13" maxlength="15" value="<?php if(isset($_POST['hcolor'])) echo $_POST['hcolor']; ?>" /></td>
        <td style="width: 33%;">Hair Length:<br /><input type="text" name="hlength" size="13" maxlength="15" value="<?php if(isset($_POST['hlength'])) echo $_POST['hlength']; ?>" /></td>
        <td style="width: 33%;">Dentures:<br /><input type="text" name="dentures" size="13" maxlength="15" value="<?php if(isset($_POST['dentures'])) echo $_POST['dentures']; ?>" /></td>
    </tr>
    
    <tr>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['eyecolor'])){echo'<span class="red">*</span>';}?>Eye Color:<br /><input type="text" name="eyecolor" size="13" maxlength="15" value="<?php if(isset($_POST['eyecolor'])) echo $_POST['eyecolor']; ?>" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['glasses'])){echo'<span class="red">*</span>';}?>Glasses:<br /><input type="text" name="glasses" size="13" maxlength="15" value="<?php if(isset($_POST['glasses'])) echo $_POST['glasses']; ?>" placeholder="If Yes, what color?" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['contacts'])){echo'<span class="red">*</span>';}?>Contacts:<br /><input type="text" name="contacts" size="13" maxlength="15" value="<?php if(isset($_POST['contacts'])) echo $_POST['contacts']; ?>" /></td>
    </tr>
    
    <tr>
        <td colspan="2" style="width: 66%;"><?php if(isset($_POST['submitted']) && empty($_POST['traits'])){echo'<span class="red">*</span>';}?>Individual Traits:<br /><input type="text" name="traits" size="45" maxlength="75" value="<?php if(isset($_POST['traits'])) echo $_POST['traits']; ?>" placeholder="Tattoo, mustache, scar, etc" /></td>
        <td style="width: 33%;">Native Language:<br /><input type="text" name="nlanguage" size="13" maxlength="15" value="<?php if(isset($_POST['nlanguage'])) echo $_POST['nlanguage']; ?>" /></td>
    </tr>
    
    <tr>
        <td style="width: 33%;">Other Languages:<br /><input type="text" name="olanguage" size="13" maxlength="15" value="<?php if(isset($_POST['olanguage'])) echo $_POST['olanguage']; ?>" /></td>
        <td style="width: 33%;"><?php if(isset($_POST['submitted']) && empty($_POST['speech'])){echo'<span class="red">*</span>';}?>Speech Problem:<br /><input type="text" name="speech" size="13" maxlength="15" value="<?php if(isset($_POST['speech'])) echo $_POST['speech']; ?>" /></td>
        <td style="width: 33%;">Allergies:<br /><input type="text" name="allergies" size="13" maxlength="15" value="<?php if(isset($_POST['allergies'])) echo $_POST['allergies']; ?>" /></td>
    </tr>
    
    <tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['physical'])){echo'<span class="red">*</span>';}?>Physical Conditions / Disabilities:<br /><input type="text" name="physical" size="80" maxlength="240" value="<?php if(isset($_POST['physical'])) echo $_POST['physical']; ?>" placeholder="Please list any physical conditions or disabilities you may have" /></td>
    </tr>
    
    <tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['diagnosis'])){echo'<span class="red">*</span>';}?>Diagnosis:<br /><input type="text" name="diagnosis" size="80" maxlength="240" value="<?php if(isset($_POST['diagnosis'])) echo $_POST['diagnosis']; ?>" placeholder="What is the diagnosis for these conditions?" /></td>
    </tr>
    
    <tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['medications'])){echo'<span class="red">*</span>';}?>Medications:<br /><input type="text" name="medications" size="80" maxlength="240" value="<?php if(isset($_POST['medications'])) echo $_POST['medications']; ?>" placeholder="Please list any medications you are currently taking" /></td>
    </tr>
    
    <tr>
    	<td colspan="3"><?php if(isset($_POST['submitted']) && empty($_POST['onbehalf'])){echo'<span class="red">*</span>';}?>Are you completing this registration on someone's behalf? (If yes, relationship to applicant):<br /><input type="text" name="onbehalf" size="80" maxlength="140" value="<?php if(isset($_POST['onbehalf'])) echo $_POST['onbehalf']; ?>" /></td>
    </tr>
</table><!--first part of form-->
<br />
<h3>Medical and Behavior Questions</h3>
<table style="width: 533px;"><!--Questions table-->
	<tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q1'])){echo'<span class="red">*</span>';}?>Are you an Insulin dependent Diabetic?</td>
        <td style="width: 10%;"><input type="radio" name="q1" value="Yes"<?php if ($_POST["q1"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q1" value="No"<?php if ($_POST["q1"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q1add" size="22" maxlength="140" value="<?php if(isset($_POST['q1add'])) echo $_POST['q1add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q2'])){echo'<span class="red">*</span>';}?>Heart Conditions? (be specific)</td>
        <td style="width: 10%;"><input type="radio" name="q2" value="Yes"<?php if ($_POST["q2"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q2" value="No"<?php if ($_POST["q2"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q2add" size="22" maxlength="140" value="<?php if(isset($_POST['q2add'])) echo $_POST['q2add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q3'])){echo'<span class="red">*</span>';}?>Do you have a Pacemaker?</td>
        <td style="width: 10%;"><input type="radio" name="q3" value="Yes"<?php if ($_POST["q3"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q3" value="No"<?php if ($_POST["q3"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q3add" size="22" maxlength="140" value="<?php if(isset($_POST['q3add'])) echo $_POST['q3add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q4'])){echo'<span class="red">*</span>';}?>Do you wear a Medical Alert Tag?</td>
        <td style="width: 10%;"><input type="radio" name="q4" value="Yes"<?php if ($_POST["q4"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q4" value="No"<?php if ($_POST["q4"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q4add" size="22" maxlength="140" value="<?php if(isset($_POST['q4add'])) echo $_POST['q4add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q5'])){echo'<span class="red">*</span>';}?>Do you have a VIAL/ or file of Life?</td>
        <td style="width: 10%;"><input type="radio" name="q5" value="Yes"<?php if ($_POST["q5"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q5" value="No"<?php if ($_POST["q5"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q5add" size="22" maxlength="140" value="<?php if(isset($_POST['q5add'])) echo $_POST['q5add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q6'])){echo'<span class="red">*</span>';}?>Are you already registered for a special needs shelter?</td>
        <td style="width: 10%;"><input type="radio" name="q6" value="Yes"<?php if ($_POST["q6"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q6" value="No"<?php if ($_POST["q6"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q6add" size="22" maxlength="140" value="<?php if(isset($_POST['q6add'])) echo $_POST['q6add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q7'])){echo'<span class="red">*</span>';}?>Do you have a pet in your home?</td>
        <td style="width: 10%;"><input type="radio" name="q7" value="Yes"<?php if ($_POST["q7"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q7" value="No"<?php if ($_POST["q7"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q7add" size="22" maxlength="140" value="<?php if(isset($_POST['q7add'])) echo $_POST['q7add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q8'])){echo'<span class="red">*</span>';}?>Do you have periods of confusion?</td>
        <td style="width: 10%;"><input type="radio" name="q8" value="Yes"<?php if ($_POST["q8"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q8" value="No"<?php if ($_POST["q8"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q8add" size="22" maxlength="140" value="<?php if(isset($_POST['q8add'])) echo $_POST['q8add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q9'])){echo'<span class="red">*</span>';}?>Do you require assistance walking? (cane, walker, etc.)</td>
        <td style="width: 10%;"><input type="radio" name="q9" value="Yes"<?php if ($_POST["q9"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q9" value="No"<?php if ($_POST["q9"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q9add" size="22" maxlength="140" value="<?php if(isset($_POST['q9add'])) echo $_POST['q9add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q10'])){echo'<span class="red">*</span>';}?>Do you wander frequently?</td>
        <td style="width: 10%;"><input type="radio" name="q10" value="Yes"<?php if ($_POST["q10"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 10%;"><input type="radio" name="q10" value="No"<?php if ($_POST["q10"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
        <td style="width: 34%;"><input type="text" name="q10add" size="22" maxlength="140" value="<?php if(isset($_POST['q10add'])) echo $_POST['q10add']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q11'])){echo'<span class="red">*</span>';}?>Mode of travel normally used?</td>
        <td colspan="3" style="width: 54%;"><input type="text" name="q11" size="40" maxlength="140" value="<?php if(isset($_POST['q11'])) echo $_POST['q11']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q12'])){echo'<span class="red">*</span>';}?>Possible destinations when leaving home?</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q12" size="40" maxlength="140" value="<?php if(isset($_POST['q12'])) echo $_POST['q12']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;">List Habits or Hobbies</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q13" size="40" maxlength="140" value="<?php if(isset($_POST['q13'])) echo $_POST['q13']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;">Usual Type of Clothing</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q14" size="40" maxlength="140" value="<?php if(isset($_POST['q14'])) echo $_POST['q14']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q15'])){echo'<span class="red">*</span>';}?>Daily Routine</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q15" size="40" maxlength="140" value="<?php if(isset($_POST['q15'])) echo $_POST['q15']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q16'])){echo'<span class="red">*</span>';}?>Name person answers to</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q16" size="40" maxlength="140" value="<?php if(isset($_POST['q16'])) echo $_POST['q16']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q17'])){echo'<span class="red">*</span>';}?>Phrase or words person responds to?</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q17" size="40" maxlength="140" value="<?php if(isset($_POST['q17'])) echo $_POST['q17']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;">Previous Occupation</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q18" size="40" maxlength="140" value="<?php if(isset($_POST['q18'])) echo $_POST['q18']; ?>" placeholder="Additional Comments" /></td>
    </tr>
    
    <tr>
    	<td style="width: 46%;"><?php if(isset($_POST['submitted']) && empty($_POST['q19'])){echo'<span class="red">*</span>';}?>Are you physically or verbally abusive?</td>
        <td colspan="3" style="width: 34%;"><input type="text" name="q19" size="40" maxlength="140" value="<?php if(isset($_POST['q19'])) echo $_POST['q19']; ?>" placeholder="Additional Comments" /></td>
    </tr>
</table><!--second table with all of the questions-->
<br />
<h3>Doctor and Care Giver Information</h3>
<table style="width: 533px;"><!--doctor and care giver table-->
	<tr>
    	<td style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['dr1name'])){echo'<span class="red">*</span>';}?>Doctor Name:<br /><input type="text" name="dr1name" size="42" maxlength="40" value="<?php if(isset($_POST['dr1name'])) echo $_POST['dr1name']; ?>" /></td>
        <td colspan="2" style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['dr1phn'])){echo'<span class="red">*</span>';}?>Phone: <br /><input type="text" name="dr1phn" size="30" maxlength="40" value="<?php if(isset($_POST['dr1phn'])) echo $_POST['dr1phn']; ?>" /></td>
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['dr1add'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="dr1add" size="80" maxlength="140" value="<?php if(isset($_POST['dr1add'])) echo $_POST['dr1add']; ?>" /></td>
    </tr>
    <tr><td><br /></td></tr>
    <tr>
    	<td style="width: 55%;">Doctor Name:<br /><input type="text" name="dr2name" size="42" maxlength="40" value="<?php if(isset($_POST['dr2name'])) echo $_POST['dr2name']; ?>" /></td>
        <td colspan="2" style="width: 45%;">Phone: <br /><input type="text" name="dr2phn" size="30" maxlength="20" value="<?php if(isset($_POST['dr2phn'])) echo $_POST['dr2phn']; ?>" /></td>
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;">Address:<br /><input type="text" name="dr2add" size="80" maxlength="140" value="<?php if(isset($_POST['dr2add'])) echo $_POST['dr2add']; ?>" /></td>
    </tr>
    <tr><td><br /><strong>Primary Care Giver</strong></td></tr>
	<tr>
    	<td style="width:55%;"><?php if(isset($_POST['submitted']) && empty($_POST['pricare'])){echo'<span class="red">*</span>';}?>Name:<br /><input type="text" name="pricare" size="42" maxlength="40" value="<?php if(isset($_POST['pricare'])) echo $_POST['pricare']; ?>" /></td>
        <td colspan="2">Date of Birth:<br /><input type="text" name="pricaredob" size="30" maxlength="40" value="<?php if(isset($_POST['pricaredob'])) echo $_POST['pricaredob']; ?>" /></td>
    </tr>
    <tr>
    	<td style="width:55%;"><?php if(isset($_POST['submitted']) && empty($_POST['pricareaddy'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="pricareaddy" size="42" maxlength="140" value="<?php if(isset($_POST['pricareaddy'])) echo $_POST['pricareaddy']; ?>" /></td>
        <td style="width:22.5%;"><?php if(isset($_POST['submitted']) && empty($_POST['pricarehphone'])){echo'<span class="red">*</span>';}?>Home Phone:<br /><input type="text" name="pricarehphone" size="10" maxlength="20" value="<?php if(isset($_POST['pricarehphone'])) echo $_POST['pricarehphone']; ?>" /></td>
        <td style="width:22.5%;">Cell Phone:<br /><input type="text" name="pricarecphone" size="10" maxlength="20" value="<?php if(isset($_POST['pricarecphone'])) echo $_POST['pricarecphone']; ?>" /></td>
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['pricarepob'])){echo'<span class="red">*</span>';}?>Place of Business:<br /><input type="text" name="pricarepob" size="80" maxlength="140" value="<?php if(isset($_POST['pricarepob'])) echo $_POST['pricarepob']; ?>" /></td>    
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['pricarebizaddy'])){echo'<span class="red">*</span>';}?>Business Address:<br /><input type="text" name="pricarebizaddy" size="80" maxlength="140" value="<?php if(isset($_POST['pricarebizaddy'])) echo $_POST['pricarebizaddy']; ?>" /></td>    
    </tr>
    
    <tr><td><br /><strong>Secondary Care Giver</strong></td></tr>
	<tr>
    	<td style="width:55%;">Name:<br /><input type="text" name="seccare" size="42" maxlength="40" value="<?php if(isset($_POST['seccare'])) echo $_POST['seccare']; ?>" /></td>
        <td colspan="2">Date of Birth:<br /><input type="text" name="seccaredob" size="30" maxlength="40" value="<?php if(isset($_POST['seccaredob'])) echo $_POST['seccaredob']; ?>" /></td>
    </tr>
    <tr>
    	<td style="width:55%;">Address:<br /><input type="text" name="seccareaddy" size="42" maxlength="140" value="<?php if(isset($_POST['seccareaddy'])) echo $_POST['seccareaddy']; ?>" /></td>
        <td style="width:22.5%;">Home Phone:<br /><input type="text" name="seccarehphone" size="10" maxlength="20" value="<?php if(isset($_POST['seccarehphone'])) echo $_POST['seccarehphone']; ?>" /></td>
        <td style="width:22.5%;">Cell Phone:<br /><input type="text" name="seccarecphone" size="10" maxlength="20" value="<?php if(isset($_POST['seccarecphone'])) echo $_POST['seccarecphone']; ?>" /></td>
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;">Place of Business:<br /><input type="text" name="seccarepob" size="80" maxlength="140" value="<?php if(isset($_POST['seccarepob'])) echo $_POST['seccarepob']; ?>" /></td>    
    </tr>
    <tr>
    	<td colspan="3" style="width:100%;">Business Address:<br /><input type="text" name="seccarebizaddy" size="80" maxlength="140" value="<?php if(isset($_POST['seccarebizaddy'])) echo $_POST['seccarebizaddy']; ?>" /></td>    
    </tr>
</table><!--end doctor and care giver table-->

<p>I hereby authorize the Lady Lake Police Department, it's officers, or other designated persons and employees to use this information in locating and returning the listed applicant to his/her residence should he/she become a lost/missing person or disoriented. I further authorize the Lady Lake Police Department to release the listed information in this or other related documents to other emergency agencies but then only on an "as needed" basis should it become necessary for them to assist in aiding the Vulnerable Registry person.</p>

<p>If registry for this individual becomes no longer necessary or if the listed information should change, I will notify the registering agency at the earliest possible moment. I understand that giving false information to a Law Enforcement Agency is a violation Florida State Statutes regarding the filing of false reports and I also understand that enrollment into this registry is a privilege not to be abused nor is it intended to deprive any individual from their right to privacy or freedom, but rather to assist the Vulnerable Population.</p>

<p>I acknowledge having read the above information. Furthermore, I fully understand and agree with its contents.</p>

<p>If you would like to receive a confirmation email that the form has been submitted, please enter your email below. We do not store your email address.<br />
Email:<br /><input type="text" name="email" size="80" maxlength="40" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Please provide your Email Address" /></p>

<p style="border: 1px solid #000; padding: 6px;"><?php if(isset($_POST['submitted']) && empty($_POST['certify'])){echo'<span class="red">*</span>';}?><input type="checkbox" name="certify" value="unchecked" /> By submitting this form I certify the information I provided is true and accurate to the best of my knowledge.</p>


   
    <tr>
    	<td><input type="hidden" name="submitted" value="TRUE" />
        	<input type="submit" name="submit" value="Submit Application" />
        </td>
    </tr>
</table>


</form>


<?php 
	} //end if completed=false
?>

	
        <p class="copyright">Copyright 2010 Lady Lake. All rights reserved.<br />
		Design and hosting by <a href="http://power1.com" target="_blank">PowerOne</a></p>
    </div> <!--/end content div-->
   <?php get_sidebar(); ?>
  </div></div>

<?php get_footer(); ?>
