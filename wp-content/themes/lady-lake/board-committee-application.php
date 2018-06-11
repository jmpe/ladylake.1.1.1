<?php /* Template Name: Board / Committee Application
*/ ?>
<?php get_header(); ?>

<div id="content">
<style>
	.error {color: red;}
	.red {color: red; font-weight:bold;}
</style>

<form action="<?php the_permalink(); ?>" method="post" class="" >
<!--<form action="vulnerable-population-form.php" method="post" class="" >-->
<legend><h3>Board/Committees Application</h3></legend>

<?php
	//check to see if form has been filled out
	$completed = false;
	//form validation
	if (isset($_POST['submitted'])) {
		
		if (!empty($_POST['brdname'])) {$brdname = $_POST['brdname'];} else {$brdname = NULL; echo '<span class="error">Please enter a name.</span><br />';}
		if (!empty($_POST['appdate'])) {$appdate = $_POST['appdate'];} else {$appdate = NULL; echo '<span class="error">Please enter today\'s date.</span><br />';}
		if (!empty($_POST['address'])) {$address = $_POST['address'];} else {$address = NULL; echo '<span class="error">Please enter your address.</span><br />';}
		if (!empty($_POST['location'])) {$location = $_POST['location'];} else {$location = NULL; echo '<span class="error">Please enter your location of residence.</span><br />';}
		if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST['cphone'])) {$cphone = $_POST['cphone'];} else {$cphone = NULL; echo '<span class="error">Please enter a valid cell phone number: ###-###-####</span><br />';}
		if (!empty($_POST['email'])) {$email = $_POST['email'];} else {$email = NULL; echo '<span class="error">Please enter an email address.</span><br />';}
		if (!empty($_POST['boards'])) {$boards = $_POST['boards'];} else {$boards = NULL; echo '<span class="error">Please enter at least one board to apply to.</span><br />';}
		if (!empty($_POST['occupation'])) {$occupation = $_POST['occupation'];} else {$occupation = NULL; echo '<span class="error">Please enter your occupation.</span><br />';}
		if (!empty($_POST['experience'])) {$experience = $_POST['experience'];} else {$experience = NULL; echo '<span class="error">Please describe your training and experience.</span><br />';}
		if (!empty($_POST['professional'])) {$professional = $_POST['professional'];} else {$professional = NULL; echo '<span class="error">Please enter your professional/business affiliations.</span><br />';}
		if (!empty($_POST['past'])) {$past = $_POST['past'];} else {$past = NULL; echo '<span class="error">Please answer if you have served on a board/committee previously.</span><br />';}
		if (!empty($_POST['ref1'])) {$ref1 = $_POST['ref1'];} else {$ref1 = NULL; echo '<span class="error">Please provide the first reference.</span><br />';}
		if (!empty($_POST['ref2'])) {$ref2 = $_POST['ref2'];} else {$ref2 = NULL; echo '<span class="error">Please provide the second reference.</span><br />';}
		if (!empty($_POST['ref3'])) {$ref3 = $_POST['ref3'];} else {$ref3 = NULL; echo '<span class="error">Please provide the third reference.</span><br />';}
		if (!empty($_POST['certify'])) {$certify = $_POST['certify'];} else {$certify = NULL; echo '<span class="error">Please verify that you agree to the terms.</span><br />';}
		
		
		
		if ($brdname && $appdate && $address && $location && $cphone && $email && $boards && $occupation && $experience && $professional && $past && $ref1 && $ref2 && $ref3 && $certify) {
			$completed = true; //form has been compelted, set to true.
			//$to = "registry@ladylake.org";
			$to = "chr.ayres@gmail.com";
			$subject = "New Board/Committee Application";
			$message = 
			"Name: " . $brdname . "\r\n".
			"Application Date: " . $appdate . "\r\n".
			"Address: " . $address . "\r\n".
			"Location of residence: " . $location . "\r\n".
			"Business Location: " . $_POST['bizloc'] . "\r\n".
			"Home Phone: " . $_POST['hphone'] . "\r\n".
			"Work Phone: " . $_POST['wphone'] . "\r\n".
			"Cell Phone: " . $cphone . "\r\n".
			"Email: " . $email . "\r\n".
			"Boards to serve on: " . $boards . "\r\n".
			"Occupation: " . $occupation . "\r\n".
			"Training or experience related to board sought: " . $experience . "\r\n".
			"Member of professional/business organizations: " . $professional . "\r\n".
			"Served in past?: " . $past . "\r\n".
			"If yes, which one?: " . $_POST['ifyes'] . "\r\n".
			"Nationality: " . $_POST['nationality'] . "\r\n".
			"Convicted of felony?: " . $_POST['felony'] . "\r\n".
			"Reference 1: " . $ref1 . "\r\n".
			"Reference 2: " . $ref2 . "\r\n".
			"Reference 3: " . $ref3 . "\r\n".
			"Additional comments: " . $_POST['addcom'] . "\r\n".
			
				
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
    	<td colspan="2"><p>Please fill out the form as best as you can. If you have no answer, please write "Not Applicable".</p></td>
    </tr>
	<tr>
    	<td><?php if(isset($_POST['submitted']) && empty($_POST['brdname'])){echo'<span class="red">*</span>';}?>Name:<br /><input type="text" name="brdname" size="36" maxlength="40" value="<?php if(isset($_POST['brdname'])) echo $_POST['brdname']; ?>" placeholder="First and Last" /></td>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['appdate'])){echo'<span class="red">*</span>';}?>Date:<br /><input type="text" name="appdate" size="36" maxlength="40" value="<?php if(isset($_POST['appdate'])) echo $_POST['appdate']; ?>" placeholder="Today's Date: MM/DD/YYYY" /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['address'])){echo'<span class="red">*</span>';}?>Home Address:<br /><input type="text" name="address" size="80" maxlength="120" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" placeholder="Street and City" /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['location'])){echo'<span class="red">*</span>';}?>Location of Residence:<br /><input type="text" name="location" size="80" maxlength="120" value="<?php if(isset($_POST['location'])) echo $_POST['location']; ?>" placeholder="???" /></td>
    </tr>
    <tr>
    	<td colspan="2">Business Location (if applicable):<br /><input type="text" name="bizloc" size="80" maxlength="120" value="<?php if(isset($_POST['bizloc'])) echo $_POST['location']; ?>" placeholder="Only for Economic Development Advisory Committee" /></td>
    </tr>
    <tr>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['cphone'])){echo'<span class="red">*</span>';}?>Cell Phone:<br /><input type="text" name="cphone" size="36" maxlength="20" value="<?php if(isset($_POST['cphone'])) echo $_POST['cphone']; ?>" placeholder="Ex. 352-555-5555" /></td>
    	<td>Home Phone:<br /><input type="text" name="hphone" size="36" maxlength="20" value="<?php if(isset($_POST['hphone'])) echo $_POST['hphone']; ?>" placeholder="Ex. 352-555-5555" /></td>
    </tr>
    <tr>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['email'])){echo'<span class="red">*</span>';}?>Email:<br /><input type="text" name="email" size="36" maxlength="80" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="" /></td>
    	<td>Work Phone:<br /><input type="text" name="wphone" size="36" maxlength="40" value="<?php if(isset($_POST['wphone'])) echo $_POST['wphone']; ?>" placeholder="Ex. 352-555-5555" /></td>
    </tr>
    <tr>
    	<td colspan="2"><p><?php if(isset($_POST['submitted']) && empty($_POST['boards'])){echo'<span class="red">*</span>';}?>Check below the Committees or Boards you are willing to serve on:<br />
        	<input type="checkbox" name="boards" value="Economic Development Advisory Committee" />Economic Development Advisory Committee<br />
            <input type="checkbox" name="boards" value="Library Board" />Library Board<br />
            <input type="checkbox" name="boards" value="Planning and Zoning Board" />Planning and Zoning Board<br />
            <input type="checkbox" name="boards" value="Parks and Recreation Advisory Board" />Parks and Recreation Advisory Board<br />
            <input type="checkbox" name="boards" value="Police Pension Board" />Police Pension Board<br />
            <input type="checkbox" name="boards" value="Tree and Beautification Advisory Committee" />Tree and Beautification Advisory Committee</p>
        </td>	
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['occupation'])){echo'<span class="red">*</span>';}?>Occupation:<br /><input type="text" name="occupation" size="80" maxlength="120" value="<?php if(isset($_POST['occupation'])) echo $_POST['occupation']; ?>" placeholder="Where do you work / What do you do?" /><br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['experience'])){echo'<span class="red">*</span>';}?>Training or experience related to activities of boards and committees to which appointment is sought:<br /><textarea name="experience" cols="60" rows="6"><?php if(isset($_POST['experience'])) echo $_POST['experience']; ?></textarea><br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['professional'])){echo'<span class="red">*</span>';}?>Member of the following professional or business organizations:<br /><textarea name="professional" cols="60" rows="6"><?php if(isset($_POST['professional'])) echo $_POST['professional']; ?></textarea><br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['past'])){echo'<span class="red">*</span>';}?>Have you served on a Town board or committee in the past?<input type="radio" name="past" value="Yes"<?php if ($_POST["past"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes&nbsp;&nbsp;<input type="radio" name="past" value="No"<?php if ($_POST["past"] == 'No') { echo 'checked=" checked"' ;} ?> />No<br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2">If yes, name of committees/boards and dates:<br /><textarea name="ifyes" cols="60" rows="3"><?php if(isset($_POST['ifyes'])) echo $_POST['ifyes']; ?></textarea><br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2">Nationality (optional)<br /><input type="text" name="nationality" size="80" maxlength="30" value="<?php if(isset($_POST['nationality'])) echo $_POST['nationality']; ?>" placeholder="This information is for use in the Annual Florida Department of State Report only." /><!--<br />This information is for use in the Annual Florida Department of State Report only.--><br /><br /></td>
    </tr>
    <tr>
    	<td colspan="2">Have you ever been convicted of a felony? (optional) <input type="radio" name="felony" value="Yes"<?php if ($_POST["felony"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes&nbsp;&nbsp;<input type="radio" name="felony" value="No"<?php if ($_POST["felony"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td colspan="2">
        	<p>List three references that the Town may contact (excluding Town employees) - name, address and phone number:</p>
            <ol>
            	<li><?php if(isset($_POST['submitted']) && empty($_POST['ref1'])){echo'<span class="red">*</span>';}?><input type="text" name="ref1" size="60" maxlength="240" value="<?php if(isset($_POST['ref1'])) echo $_POST['ref1']; ?>" placeholder="Add Reference" /></li>
                <li><?php if(isset($_POST['submitted']) && empty($_POST['ref2'])){echo'<span class="red">*</span>';}?><input type="text" name="ref2" size="60" maxlength="240" value="<?php if(isset($_POST['ref2'])) echo $_POST['ref2']; ?>" placeholder="Add Reference" /></li>
                <li><?php if(isset($_POST['submitted']) && empty($_POST['ref3'])){echo'<span class="red">*</span>';}?><input type="text" name="ref3" size="60" maxlength="240" value="<?php if(isset($_POST['ref3'])) echo $_POST['ref3']; ?>" placeholder="Add Reference" /></li>
            </ol>
        </td>
    </tr>
    <tr>
    	<td colspan="2">Add any additional information or comments here:<br /><textarea name="addcom" cols="60" rows="4"><?php if(isset($_POST['addcom'])) echo $_POST['addcom']; ?></textarea></td>
    </tr>
    <tr>
    	<td colspan="2">
    	<p>I will attend meetings in accordance with the adopted policies of the Town. If at any time my business or professional interests conflict with interests of the board or committee, I will not participate in such deliberations of the board or committee.</p>
        <p>Please note: You may be required to fill out a financial disclosure form.</p>
        <p style="border: 1px solid #000; padding: 6px;"><?php if(isset($_POST['submitted']) && empty($_POST['certify'])){echo'<span class="red">*</span>';}?><input type="checkbox" name="certify" value="unchecked" /> By submitting this form I certify the information I provided is true and accurate to the best of my knowledge.</p>
        </td>
    </tr>
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

	<!--END OF CONTENT -->
        <p class="copyright">Copyright 2010 Lady Lake. All rights reserved.<br />
		Design and hosting by <a href="http://power1.com" target="_blank">PowerOne</a></p>
    </div> <!--/end content div-->
   <?php get_sidebar(); ?>
  </div></div>

<?php get_footer(); ?>