<?php /* Template Name: Employment Application
*/ ?>
<?php get_header(); ?>

<div id="content">
<style>
	.error {color: red;}
	.red {color: red; font-weight:bold;}
</style>
<script>
	$(document).ready(function(){
    $('#moreer1').change(function(){
        if(this.checked)
            $('.hiddener1').fadeIn('slow');
        else
            $('.hiddener1').fadeOut('slow');

    });
});
</script>

<form action="<?php the_permalink(); ?>" method="post" class="" >
<legend><h3>Employment Application</h3></legend>

<?php
	//check to see if form has been filled out
	$completed = false;
	//form validation
	if (isset($_POST['submitted'])) {
		
		if (!empty($_POST['lastname'])) {$lastname = $_POST['lastname'];} else {$lastname = NULL; echo '<span class="error">Please enter your last name.</span><br />';}
		if (!empty($_POST['firstname'])) {$firstname = $_POST['firstname'];} else {$firstname = NULL; echo '<span class="error">Please enter your first name.</span><br />';}
		if (!empty($_POST['middleinitial'])) {$middleinitial = $_POST['middleinitial'];} else {$middleinitial = NULL; echo '<span class="error">Please enter your middle initial.</span><br />';}
		if (!empty($_POST['telephone'])) {$telephone = $_POST['telephone'];} else {$telephone = NULL; echo '<span class="error">Please enter your telephone.</span><br />';}
		if (!empty($_POST['curaddress'])) {$curaddress = $_POST['curaddress'];} else {$curaddress = NULL; echo '<span class="error">Please enter your current address.</span><br />';}
		if (!empty($_POST['p1'])) {$p1 = $_POST['p1'];} else {$p1 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p2'])) {$p2 = $_POST['p2'];} else {$p2 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p3'])) {$p3 = $_POST['p3'];} else {$p3 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p5'])) {$p5 = $_POST['p5'];} else {$p5 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p6'])) {$p6 = $_POST['p6'];} else {$p6 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p7'])) {$p7 = $_POST['p7'];} else {$p7 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p8'])) {$p8 = $_POST['p8'];} else {$p8 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p9'])) {$p9 = $_POST['p9'];} else {$p9 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p10'])) {$p10 = $_POST['p10'];} else {$p10 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p11'])) {$p11 = $_POST['p11'];} else {$p11 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p14'])) {$p14 = $_POST['p14'];} else {$p14 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p16'])) {$p16 = $_POST['p16'];} else {$p16 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['p18'])) {$p18 = $_POST['p18'];} else {$p18 = NULL; echo '<span class="error">Please answer all the questions.</span><br />';}
		if (!empty($_POST['er1name'])) {$er1name = $_POST['er1name'];} else {$er1name = NULL; echo '<span class="error">Please provide the name of your previous employer.</span><br />';}
		if (!empty($_POST['er1sdate'])) {$er1sdate = $_POST['er1sdate'];} else {$er1sdate = NULL; echo '<span class="error">Please provide your start date.</span><br />';}
		if (!empty($_POST['er1edate'])) {$er1edate = $_POST['er1edate'];} else {$er1edate = NULL; echo '<span class="error">Please provide your end date.</span><br />';}
		if (!empty($_POST['er1sname'])) {$er1sname = $_POST['er1sname'];} else {$er1sname = NULL; echo '<span class="error">Please provide your previous employers street name.</span><br />';}
		if (!empty($_POST['er1ssal'])) {$er1ssal = $_POST['er1ssal'];} else {$er1ssal = NULL; echo '<span class="error">Please provide your starting salary.</span><br />';}
		if (!empty($_POST['er1esal'])) {$er1esal = $_POST['er1esal'];} else {$er1esal = NULL; echo '<span class="error">Please provide your ending salary.</span><br />';}
		if (!empty($_POST['er1cityst'])) {$er1cityst = $_POST['er1cityst'];} else {$er1cityst = NULL; echo '<span class="error">Please provide the city and state of previous employer.</span><br />';}
		if (!empty($_POST['er1sup'])) {$er1sup = $_POST['er1sup'];} else {$er1sup = NULL; echo '<span class="error">Please provide the city and state of previous employer.</span><br />';}
		if (!empty($_POST['er1title'])) {$er1title = $_POST['er1title'];} else {$er1title = NULL; echo '<span class="error">Please provide your job title at your previous employer.</span><br />';}
		if (!empty($_POST['er1tel'])) {$er1tel = $_POST['er1tel'];} else {$er1tel = NULL; echo '<span class="error">Please provide the telephone number of your previous employer.</span><br />';}
		if (!empty($_POST['er1desc'])) {$er1desc = $_POST['er1desc'];} else {$er1desc = NULL; echo '<span class="error">Please provide a description of your job at your previous employer.</span><br />';}
		if (!empty($_POST['er1leave'])) {$er1leave = $_POST['er1leave'];} else {$er1leave = NULL; echo '<span class="error">Please provide a reason why you left your previous employer.</span><br />';}
		/*visual break*/
		if (!empty($_POST['er2name'])) {$er2name = $_POST['er2name'];} else {$er2name = NULL; echo '<span class="error">Please provide the name of your previous employer.</span><br />';}
		if (!empty($_POST['er2sdate'])) {$er2sdate = $_POST['er2sdate'];} else {$er2sdate = NULL; echo '<span class="error">Please provide your start date.</span><br />';}
		if (!empty($_POST['er2edate'])) {$er2edate = $_POST['er2edate'];} else {$er2edate = NULL; echo '<span class="error">Please provide your end date.</span><br />';}
		if (!empty($_POST['er2sname'])) {$er2sname = $_POST['er2sname'];} else {$er2sname = NULL; echo '<span class="error">Please provide your previous employers street name.</span><br />';}
		if (!empty($_POST['er2ssal'])) {$er2ssal = $_POST['er2ssal'];} else {$er2ssal = NULL; echo '<span class="error">Please provide your starting salary.</span><br />';}
		if (!empty($_POST['er2esal'])) {$er2esal = $_POST['er2esal'];} else {$er2esal = NULL; echo '<span class="error">Please provide your ending salary.</span><br />';}
		if (!empty($_POST['er2cityst'])) {$er2cityst = $_POST['er2cityst'];} else {$er2cityst = NULL; echo '<span class="error">Please provide the city and state of previous employer.</span><br />';}
		if (!empty($_POST['er2sup'])) {$er2sup = $_POST['er2sup'];} else {$er2sup = NULL; echo '<span class="error">Please provide the city and state of previous employer.</span><br />';}
		if (!empty($_POST['er2title'])) {$er2title = $_POST['er2title'];} else {$er2title = NULL; echo '<span class="error">Please provide your job title at your previous employer.</span><br />';}
		if (!empty($_POST['er2tel'])) {$er2tel = $_POST['er2tel'];} else {$er2tel = NULL; echo '<span class="error">Please provide the telephone number of your previous employer.</span><br />';}
		if (!empty($_POST['er2desc'])) {$er2desc = $_POST['er2desc'];} else {$er2desc = NULL; echo '<span class="error">Please provide a description of your job at your previous employer.</span><br />';}
		if (!empty($_POST['er2leave'])) {$er2leave = $_POST['er2leave'];} else {$er2leave = NULL; echo '<span class="error">Please provide a reason why you left your previous employer.</span><br />';}
		if (!empty($_POST['erinfo'])) {$erinfo = $_POST['erinfo'];} else {$erinfo = NULL; echo '<span class="error">Please indicate if you have ever been let go from a job.</span><br />';}
		if (!empty($_POST['hsda'])) {$hsda = $_POST['hsda'];} else {$hsda = NULL; echo '<span class="error">Please indicate if you have ever been let go from a job.</span><br />';}
		
		if ($appname && $certify) {
			$completed = true; //form has been compelted, set to true.
			//$to = "registry@ladylake.org";
			$to = "chr.ayres@gmail.com";
			$subject = "Employment Application";
			$message = 
			"Name: " . $appname . "\r\n".
			
			
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
    	<td colspan="4"><p>The Town of Lady Lake is an Equal Opportunity Employer and does not discriminate on the basis of race, religion, color, national origin, age, gender, disability, marital status or any other characteristic protected by law.</p>
        <p>DRUG FREE WORKPLACE POLICY: The Town of Lady Lake is a Drug-Free Workplace in accordance with Fla. Stat. 440.101 and 440.102. Applications and employees may be required to submit to drug testing at any time for (1) pre-employment; (2) reasonable suspicion; (3)post-accident; (4) return to duty and (5) follow up on routine fitness for duty. Additionally, drug and alcohol testing of employees holding CDL is conducted per Federal Law and Regulation 49 CFR Part 382. 1103/107.</p></td>
    </tr>
    <tr>
    	<td colspan="4"><!-- Insert Widget --></td>
    </tr>
    <tr><td colspan="4"><h3>Personal Information</h3></td></tr>
	<tr>
    	<td><?php if(isset($_POST['submitted']) && empty($_POST['lastname'])){echo'<span class="red">*</span>';}?>Last Name:<br /><input type="text" name="lastname" size="13" maxlength="40" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" placeholder="Last Name" /></td>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['firstname'])){echo'<span class="red">*</span>';}?>First Name:<br /><input type="text" name="firstname" size="13" maxlength="40" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" placeholder="First Name" /></td>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['middleinitial'])){echo'<span class="red">*</span>';}?>Middle Initial:<br /><input type="text" name="middleinitial" size="13" maxlength="4" value="<?php if(isset($_POST['middleinitial'])) echo $_POST['middleinitial']; ?>" placeholder="Middle Initial" /></td>
        <td><?php if(isset($_POST['submitted']) && empty($_POST['appdate'])){echo'<span class="red">*</span>';}?>Application Date:<br /><input type="text" name="appdate" size="13" maxlength="4" value="<?php if(isset($_POST['appdate'])) echo $_POST['appdate']; ?>" placeholder="DD/MM/YYYY" /></td>
    </tr>
    <tr>
    	<td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['telephone'])){echo'<span class="red">*</span>';}?>Telephone:<br /><input type="text" name="telephone" size="36" maxlength="40" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>" placeholder="Telephone ###-###-####" /></td>
        <td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['alttelephone'])){echo'<span class="red">*</span>';}?>Alternate Telephone:<br /><input type="text" name="alttelephone" size="36" maxlength="40" value="<?php if(isset($_POST['alttelephone'])) echo $_POST['alttelephone']; ?>" placeholder="Telephone  ###-###-####" /></td>
    </tr>
    <tr>
    	<td colspan="4"><?php if(isset($_POST['submitted']) && empty($_POST['curaddress'])){echo'<span class="red">*</span>';}?>Current Address:<br /><input type="text" name="curaddress" size="80" maxlength="140" value="<?php if(isset($_POST['curaddress'])) echo $_POST['curaddress']; ?>" placeholder="Enter your Street, City, State and Zip" /></td>
    </tr>
</table>
<table style="width: 533px;">
    <tr>
    	<td style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p1'])){echo'<span class="red">*</span>';}?>Have you filed an application here before?</td>
        <td style="width: 11%;"><input type="radio" name="p1" value="Yes"<?php if ($_POST["p1"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p1" value="No"<?php if ($_POST["p1"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    
    
    	<td style="width: 12%;"><input type="text" name="p1ifyes" size="10" maxlength="140" value="<?php if(isset($_POST['p1ifyes'])) echo $_POST['p1ifyes']; ?>" placeholder="If yes, when?" /></td>
    </tr>
    <tr>
    	<td style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p2'])){echo'<span class="red">*</span>';}?>Have you been previously employed here?</td>
        <td style="width: 11%;"><input type="radio" name="p2" value="Yes"<?php if ($_POST["p2"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p2" value="No"<?php if ($_POST["p2"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    
    
    	<td style="width: 12%;"><input type="text" name="p2ifyes" size="10" maxlength="140" value="<?php if(isset($_POST['p2ifyes'])) echo $_POST['p2ifyes']; ?>" placeholder="If yes, when?" /></td>
    </tr>
    <tr>
    	<td style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p3'])){echo'<span class="red">*</span>';}?>Are you currently employed?</td>
        <td style="width: 11%;"><input type="radio" name="p3" value="Yes"<?php if ($_POST["p3"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td colspan="2" style="width: 11%;"><input type="radio" name="p3" value="No"<?php if ($_POST["p3"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td style="width: 64%;">If yes, may we contact your employer?</td>
        <td style="width: 11%;"><input type="radio" name="p4" value="Yes"<?php if ($_POST["p4"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td colspan="2" style="width: 11%;"><input type="radio" name="p4" value="No"<?php if ($_POST["p4"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
</table>
<table style="width: 533px;">
     <tr>
    	<td colspan="2" style="width: 50%;"><?php if(isset($_POST['submitted']) && empty($_POST['p5'])){echo'<span class="red">*</span>';}?>What is your availability?</td>
        <td style="width: 25%;"><input type="checkbox" name="p5" value="Full-Time"<?php if ($_POST["p5"] == 'Full-Time') { echo 'checked=" checked"' ;} ?> />Full-Time<br /><input type="checkbox" name="p5" value="Shift Work"<?php if ($_POST["p5"] == 'Shift Work') { echo 'checked=" checked"' ;} ?> />Shift Work</td>
        <td style="width: 25%;"><input type="checkbox" name="p5" value="Part-Time"<?php if ($_POST["p5"] == 'Part-Time') { echo 'checked=" checked"' ;} ?> />Part-Time<br /><input type="checkbox" name="p5" value="Temporary"<?php if ($_POST["p5"] == 'Temporary') { echo 'checked=" checked"' ;} ?> />Temporary</td>
	</tr>	
</table>
<table style="width: 533px;">	
	<tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p6'])){echo'<span class="red">*</span>';}?>When are you available for employment?</td>
        <td colspan="2" style="width: 36%;"><input type="text" name="p6" size="30" maxlength="10" value="<?php if(isset($_POST['p6'])) echo $_POST['p6']; ?>" placeholder="MM/DD/YYYY" /></td>
    </tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p7'])){echo'<span class="red">*</span>';}?>Are you availale to travel if the job requires?</td>
        <td style="width: 11%;"><input type="radio" name="p7" value="Yes"<?php if ($_POST["p7"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p7" value="No"<?php if ($_POST["p7"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p8'])){echo'<span class="red">*</span>';}?>Do you have a valid Florid Drivers License?</td>
        <td style="width: 11%;"><input type="radio" name="p8" value="Yes"<?php if ($_POST["p8"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p8" value="No"<?php if ($_POST["p8"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td colspan="2" style="width: 50%;"><?php if(isset($_POST['submitted']) && empty($_POST['p9'])){echo'<span class="red">*</span>';}?>Driver's license Class type: </td>
        <td colspan="2" style="width: 50%;"><input type="checkbox" name="p9" value="A"<?php if ($_POST["p9"] == 'A') { echo 'checked=" checked"' ;} ?> />A&nbsp;<input type="checkbox" name="p9" value="B"<?php if ($_POST["p9"] == 'B') { echo 'checked=" checked"' ;} ?> />B&nbsp;<input type="checkbox" name="p9" value="C"<?php if ($_POST["p9"] == 'C') { echo 'checked=" checked"' ;} ?> />C&nbsp;<input type="checkbox" name="p9" value="E"<?php if ($_POST["p9"] == 'E') { echo 'checked=" checked"' ;} ?> />E</td>
    </tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p10'])){echo'<span class="red">*</span>';}?>State of Issuance (Driver's License)</td>
        <td colspan="2" style="width: 36%;"><input type="text" name="p10" size="30" maxlength="10" value="<?php if(isset($_POST['p10'])) echo $_POST['p10']; ?>" placeholder="" /></td>
    </tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p11'])){echo'<span class="red">*</span>';}?>Has your driver's license ever been revoked or suspended?</td>
        <td style="width: 11%;"><input type="radio" name="p11" value="Yes"<?php if ($_POST["p11"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p11" value="No"<?php if ($_POST["p11"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td colspan="2" style="width:50%;">If yes, indicate the State, Date and any details.</td>
        <td colspan="2" style="width:50%;"><textarea rows="3" cols="40" name="p12" value="<?php if(isset($_POST['p12'])) echo $_POST['p12']; ?>" /></textarea></td>
    </tr>
    <tr>
    	<td colspan="2" style="width: 64%;">If yes, was your licensed restored?</td>
        <td style="width: 11%;"><input type="radio" name="p13" value="Yes"<?php if ($_POST["p13"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p13" value="No"<?php if ($_POST["p13"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p14'])){echo'<span class="red">*</span>';}?>Are you eligible for employment in the USA?<br />Proof of citizenship or immigration status may be requireed upon employment.</td>
        <td style="width: 11%;"><input type="radio" name="p14" value="Yes"<?php if ($_POST["p14"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p14" value="No"<?php if ($_POST["p14"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
	</tr>
    <tr>
    	<td style="width: 100%;" colspan="4"><input type="checkbox" name="p15a" value="relatives"<?php if ($_POST["p15a"] == 'realtives') { echo 'checked=" checked"' ;} ?> />Check this box if you have any relatives working for the Town of Lady Lake.
        <div style="width: 100%;" class="hidden15">
        Name: <input type="text" name="p15b" size="30" maxlength="40" value="<?php if(isset($_POST['p15b'])) echo $_POST['p15b']; ?>" placeholder="" />&nbsp;&nbsp; Relationship: <input type="text" name="p15c" size="30" maxlength="40" value="<?php if(isset($_POST['p15c'])) echo $_POST['p15c']; ?>" placeholder="" /><br />
        Name: <input type="text" name="p15d" size="30" maxlength="40" value="<?php if(isset($_POST['p15d'])) echo $_POST['p15d']; ?>" placeholder="" />&nbsp;&nbsp; Relationship: <input type="text" name="p15e" size="30" maxlength="40" value="<?php if(isset($_POST['p15e'])) echo $_POST['p15e']; ?>" placeholder="" />
        </div></td>
    </tr>
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p16'])){echo'<span class="red">*</span>';}?>Have you ever been arrested, charged with, convicted of, pled no contest or nolo contendere tom or had adjudication withheld on any felony or any crime involving or alleging dishonesty, a false statement, or moral turpitude?</td>
        <td style="width: 11%;"><input type="radio" name="p16" value="Yes"<?php if ($_POST["p16"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p16" value="No"<?php if ($_POST["p16"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td colspan="4">If yes, please list: Date, Location, Arresting/Charging Agency, Charge and Disposition of Case.<br />
        <textarea rows="4" cols="80" name="p17" value="<?php if(isset($_POST['p17'])) echo $_POST['p17']; ?>" /></textarea></td>
    </tr>
    
    <tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['p18'])){echo'<span class="red">*</span>';}?>Town employees may be required to report to work during disasters such as hurricanes, etc. Do you have an issue meeting this requirement?</td>
        <td style="width: 11%;"><input type="radio" name="p18" value="Yes"<?php if ($_POST["p18"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="p18" value="No"<?php if ($_POST["p18"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td style="width: 100%;" colspan="4"> If yes, please provide details.<br />
        <textarea cols="80" rows="3" name="p19" value="<?php if(isset($_POST['p19'])) echo $_POST['p19']; ?>" /></textarea></td>
    </tr>
</table>
<h3>Employment Record</h3>
<table style="width: 533px;">
	<tr><td style="width:533px;" colspan="3">List all present and past employment including full and part time, temporary and volunteer beginning with most recent. Do not omit any previous employers. <span style="text-decoration:underline;">Please include any periods of unemployment.</span> This section must be completed whether or not you have attached a resume. Complete address and phone numbers of previous employers and references must be provided. <strong>Incomplete or unassigned applications will not be processed</strong>.</td>
    </tr>
	<tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er1name" size="40" maxlength="50" value="<?php if(isset($_POST['er1name'])) echo $_POST['er1name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er1sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er1sdate'])) echo $_POST['er1sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er1edate" size="20" maxlength="20" value="<?php if(isset($_POST['er1edate'])) echo $_POST['er1edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er1sname" size="40" maxlength="20" value="<?php if(isset($_POST['er1sname'])) echo $_POST['er1sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er1ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er1ssal'])) echo $_POST['er1ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er1esal" size="20" maxlength="12" value="<?php if(isset($_POST['er1esal'])) echo $_POST['er1esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er1cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er1cityst'])) echo $_POST['er1cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er1sup" size="50" maxlength="30" value="<?php if(isset($_POST['er1sup'])) echo $_POST['er1sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er1title" size="40" maxlength="50" value="<?php if(isset($_POST['er1title'])) echo $_POST['er1title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er1tel" size="50" maxlength="30" value="<?php if(isset($_POST['er1tel'])) echo $_POST['er1tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er1desc" size="90" maxlength="50" value="<?php if(isset($_POST['er1desc'])) echo $_POST['er1desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er1leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er1leave" size="90" maxlength="50" value="<?php if(isset($_POST['er1leave'])) echo $_POST['er1leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>
    <!--VISUAL BREAK-->
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er2name" size="40" maxlength="50" value="<?php if(isset($_POST['er2name'])) echo $_POST['er2name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er2sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er2sdate'])) echo $_POST['er2sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er2edate" size="20" maxlength="20" value="<?php if(isset($_POST['er2edate'])) echo $_POST['er2edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er2sname" size="40" maxlength="20" value="<?php if(isset($_POST['er2sname'])) echo $_POST['er2sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er2ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er2ssal'])) echo $_POST['er2ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er2esal" size="20" maxlength="12" value="<?php if(isset($_POST['er2esal'])) echo $_POST['er2esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er2cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er2cityst'])) echo $_POST['er2cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er2sup" size="50" maxlength="30" value="<?php if(isset($_POST['er2sup'])) echo $_POST['er2sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er2title" size="40" maxlength="50" value="<?php if(isset($_POST['er2title'])) echo $_POST['er2title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er2tel" size="50" maxlength="30" value="<?php if(isset($_POST['er2tel'])) echo $_POST['er2tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er2desc" size="90" maxlength="50" value="<?php if(isset($_POST['er2desc'])) echo $_POST['er2desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er2leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er2leave" size="90" maxlength="50" value="<?php if(isset($_POST['er2leave'])) echo $_POST['er2leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>
    <!--VISUAL BREAK-->
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er3name" size="40" maxlength="50" value="<?php if(isset($_POST['er3name'])) echo $_POST['er3name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er3sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er3sdate'])) echo $_POST['er3sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er3edate" size="20" maxlength="20" value="<?php if(isset($_POST['er3edate'])) echo $_POST['er3edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er3sname" size="40" maxlength="20" value="<?php if(isset($_POST['er3sname'])) echo $_POST['er3sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er3ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er3ssal'])) echo $_POST['er3ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er3esal" size="20" maxlength="12" value="<?php if(isset($_POST['er3esal'])) echo $_POST['er3esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er3cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er3cityst'])) echo $_POST['er3cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er3sup" size="50" maxlength="30" value="<?php if(isset($_POST['er3sup'])) echo $_POST['er3sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er3title" size="40" maxlength="50" value="<?php if(isset($_POST['er3title'])) echo $_POST['er3title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er3tel" size="50" maxlength="30" value="<?php if(isset($_POST['er3tel'])) echo $_POST['er3tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er3desc" size="90" maxlength="50" value="<?php if(isset($_POST['er3desc'])) echo $_POST['er3desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er3leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er3leave" size="90" maxlength="50" value="<?php if(isset($_POST['er3leave'])) echo $_POST['er3leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>
    <!--VISUAL BREAK-->
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er4name" size="40" maxlength="50" value="<?php if(isset($_POST['er4name'])) echo $_POST['er4name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er4sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er4sdate'])) echo $_POST['er4sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er4edate" size="20" maxlength="20" value="<?php if(isset($_POST['er4edate'])) echo $_POST['er4edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er4sname" size="40" maxlength="20" value="<?php if(isset($_POST['er4sname'])) echo $_POST['er4sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er4ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er4ssal'])) echo $_POST['er4ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er4esal" size="20" maxlength="12" value="<?php if(isset($_POST['er4esal'])) echo $_POST['er4esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er4cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er4cityst'])) echo $_POST['er4cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er4sup" size="50" maxlength="30" value="<?php if(isset($_POST['er4sup'])) echo $_POST['er4sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er4title" size="40" maxlength="50" value="<?php if(isset($_POST['er4title'])) echo $_POST['er4title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er4tel" size="50" maxlength="30" value="<?php if(isset($_POST['er4tel'])) echo $_POST['er4tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er4desc" size="90" maxlength="50" value="<?php if(isset($_POST['er4desc'])) echo $_POST['er4desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er4leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er4leave" size="90" maxlength="50" value="<?php if(isset($_POST['er4leave'])) echo $_POST['er4leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>
</table>
    <!--VISUAL BREAK-->
    <p><input type="checkbox" id="moreer1" name="moreer1" value="morerecord"<?php if ($_POST["moreer1"] == 'morerecord') { echo 'checked=" checked"' ;} ?> />Check this box if you need more space for Employment Record.</p>
<div class="hiddener1">
    <table style="width:533px;">        
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er5name" size="40" maxlength="50" value="<?php if(isset($_POST['er5name'])) echo $_POST['er5name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er5sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er5sdate'])) echo $_POST['er5sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er5edate" size="20" maxlength="20" value="<?php if(isset($_POST['er5edate'])) echo $_POST['er5edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er5sname" size="40" maxlength="20" value="<?php if(isset($_POST['er5sname'])) echo $_POST['er5sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er5ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er5ssal'])) echo $_POST['er5ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er5esal" size="20" maxlength="12" value="<?php if(isset($_POST['er5esal'])) echo $_POST['er5esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er5cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er5cityst'])) echo $_POST['er5cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er5sup" size="50" maxlength="30" value="<?php if(isset($_POST['er5sup'])) echo $_POST['er5sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er5title" size="40" maxlength="50" value="<?php if(isset($_POST['er5title'])) echo $_POST['er5title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er5tel" size="50" maxlength="30" value="<?php if(isset($_POST['er5tel'])) echo $_POST['er5tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er5desc" size="90" maxlength="50" value="<?php if(isset($_POST['er5desc'])) echo $_POST['er5desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er5leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er5leave" size="90" maxlength="50" value="<?php if(isset($_POST['er5leave'])) echo $_POST['er5leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>
    <!--VISUAL BREAK-->
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6name'])){echo'<span class="red">*</span>';}?>Name of Employer:<br /><input type="text" name="er6name" size="40" maxlength="50" value="<?php if(isset($_POST['er6name'])) echo $_POST['er6name']; ?>" placeholder="Employer's Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6sdate'])){echo'<span class="red">*</span>';}?>From:<br /><input type="text" name="er6sdate" size="20" maxlength="20" value="<?php if(isset($_POST['er6sdate'])) echo $_POST['er6sdate']; ?>" placeholder="Starting Date" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6edate'])){echo'<span class="red">*</span>';}?>To:<br /><input type="text" name="er6edate" size="20" maxlength="20" value="<?php if(isset($_POST['er6edate'])) echo $_POST['er6edate']; ?>" placeholder="Ending Date" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6sname'])){echo'<span class="red">*</span>';}?>Street Name:<br /><input type="text" name="er6sname" size="40" maxlength="20" value="<?php if(isset($_POST['er6sname'])) echo $_POST['er6sname']; ?>" placeholder="Employer's Street Name" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6ssal'])){echo'<span class="red">*</span>';}?>Starting Salary:<br /><input type="text" name="er6ssal" size="20" maxlength="12" value="<?php if(isset($_POST['er6ssal'])) echo $_POST['er6ssal']; ?>" placeholder="Starting Salary" /></td>
        <td style="width: 30%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6esal'])){echo'<span class="red">*</span>';}?>Ending Salary:<br /><input type="text" name="er6esal" size="20" maxlength="12" value="<?php if(isset($_POST['er6esal'])) echo $_POST['er6esal']; ?>" placeholder="Ending Salary" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6cityst'])){echo'<span class="red">*</span>';}?>City, State:<br /><input type="text" name="er6cityst" size="40" maxlength="50" value="<?php if(isset($_POST['er6cityst'])) echo $_POST['er6cityst']; ?>" placeholder="Employer's City &amp; State" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6sup'])){echo'<span class="red">*</span>';}?>Supervisors Name:<br /><input type="text" name="er6sup" size="50" maxlength="30" value="<?php if(isset($_POST['er6sup'])) echo $_POST['er6sup']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td style="width: 40%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6title'])){echo'<span class="red">*</span>';}?>Job Title:<br /><input type="text" name="er6title" size="40" maxlength="50" value="<?php if(isset($_POST['er6title'])) echo $_POST['er6title']; ?>" placeholder="Job Title" /></td>
        <td colspan="2" style="width: 60%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6tel'])){echo'<span class="red">*</span>';}?>Telephone #:<br /><input type="text" name="er6tel" size="50" maxlength="30" value="<?php if(isset($_POST['er6tel'])) echo $_POST['er6tel']; ?>" placeholder="Supervisors Name" /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6desc'])){echo'<span class="red">*</span>';}?>Describe the work you did:<br /><input type="text" name="er6desc" size="90" maxlength="50" value="<?php if(isset($_POST['er6desc'])) echo $_POST['er6desc']; ?>" placeholder="Please enter the details of the work you did at this job." /></td>
    </tr>
    <tr>
    	<td colspan="4" style="width:100%;"><?php if(isset($_POST['submitted']) && empty($_POST['er6leave'])){echo'<span class="red">*</span>';}?>Reason for leaving:<br /><input type="text" name="er6leave" size="90" maxlength="50" value="<?php if(isset($_POST['er6leave'])) echo $_POST['er6leave']; ?>" placeholder="Please explain your reason for leaving." /></td>
    </tr>    
</table>
</div>
<strong> Additional Information:</strong>
<table style="width: 533px;">
	<tr>
    	<td colspan="2" style="width: 64%;"><?php if(isset($_POST['submitted']) && empty($_POST['erinfo'])){echo'<span class="red">*</span>';}?>Have you ever been discharged or asked to resign from any job?</td>
        <td style="width: 11%;"><input type="radio" name="erinfo" value="Yes"<?php if ($_POST["erinfo"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes</td>
        <td style="width: 11%;"><input type="radio" name="erinfo" value="No"<?php if ($_POST["erinfo"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td style="width: 100%;" colspan="4"> If yes, please provide details.<br />
        <textarea cols="80" rows="3" name="erinfodet" value="<?php if(isset($_POST['erinfodet'])) echo $_POST['erinfodet']; ?>" /></textarea></td>
    </tr>
</table>
<h3>Education</h3>
<table style="width: 533px;">
	<tr>
    	<td style="width:20%;">&nbsp;</td>
        <td style="width:20%;"><strong>Dates Attended</strong></td>
        <td style="width:20%;"><strong>School Name &amp; Address</strong></td>
        <td style="width:20%;"><strong>Diploma or Degree Earned? (Yes/No)</strong></td>
        <td style="width:20%;"><strong>If yes, indicate type</strong></td>
    </tr>
    <tr>
    	<td><strong>High School</strong></td>
        <td><input type="text" name="hsda" size="15" maxlength="50" value="<?php if(isset($_POST['hsda'])) echo $_POST['hsda']; ?>" /></td>
        <td><input type="text" name="hssn" size="15" maxlength="99" value="<?php if(isset($_POST['hssn'])) echo $_POST['hssn']; ?>" /></td>
        <td><input type="text" name="hsdd" size="15" maxlength="50" value="<?php if(isset($_POST['hsdd'])) echo $_POST['hsdd']; ?>" /></td>
        <td><input type="text" name="hsiy" size="15" maxlength="50" value="<?php if(isset($_POST['hsiy'])) echo $_POST['hsiy']; ?>" /></td>
    </tr>
    <tr>
    	<td><strong>Trade or Technical School</strong></td>
        <td><input type="text" name="tsda" size="15" maxlength="50" value="<?php if(isset($_POST['tsda'])) echo $_POST['tsda']; ?>" /></td>
        <td><input type="text" name="tssn" size="15" maxlength="99" value="<?php if(isset($_POST['tssn'])) echo $_POST['tssn']; ?>" /></td>
        <td><input type="text" name="tsdd" size="15" maxlength="50" value="<?php if(isset($_POST['tsdd'])) echo $_POST['tsdd']; ?>" /></td>
        <td><input type="text" name="tsiy" size="15" maxlength="50" value="<?php if(isset($_POST['tsiy'])) echo $_POST['tsiy']; ?>" /></td>
    </tr>
    <tr>
    	<td><strong>Undergraduate School/College</strong></td>
        <td><input type="text" name="usda" size="15" maxlength="50" value="<?php if(isset($_POST['usda'])) echo $_POST['usda']; ?>" /></td>
        <td><input type="text" name="ussn" size="15" maxlength="99" value="<?php if(isset($_POST['ussn'])) echo $_POST['ussn']; ?>" /></td>
        <td><input type="text" name="usdd" size="15" maxlength="50" value="<?php if(isset($_POST['usdd'])) echo $_POST['usdd']; ?>" /></td>
        <td><input type="text" name="usiy" size="15" maxlength="50" value="<?php if(isset($_POST['usiy'])) echo $_POST['usiy']; ?>" /></td>
    </tr>
    <tr>
    	<td><strong>Graduate School</strong></td>
        <td><input type="text" name="gsda" size="15" maxlength="50" value="<?php if(isset($_POST['gsda'])) echo $_POST['gsda']; ?>" /></td>
        <td><input type="text" name="gssn" size="15" maxlength="99" value="<?php if(isset($_POST['gssn'])) echo $_POST['gssn']; ?>" /></td>
        <td><input type="text" name="gsdd" size="15" maxlength="50" value="<?php if(isset($_POST['gsdd'])) echo $_POST['gsdd']; ?>" /></td>
        <td><input type="text" name="gsiy" size="15" maxlength="50" value="<?php if(isset($_POST['gsiy'])) echo $_POST['gsiy']; ?>" /></td>
    </tr>
    <tr>
    	<td colspan="5"><br /><strong>Professional Registration</strong> (Please exclude those which indicate race, color, religion, sex or national origin.)</td>
    </tr>
    <tr>
    	<td><strong>Registration #</strong></td>
        <td><strong>Type of Registration</strong></td>
        <td><strong>State</strong></td>
        <td><strong>Date Issued</strong></td>
        <td><strong>Expiration</strong></td>
    </tr>
    <tr>
    	<td><input type="text" name="pr-rg1" size="15" maxlength="50" value="<?php if(isset($_POST['pr-rg1'])) echo $_POST['pr-rg1']; ?>" /></td>
        <td><input type="text" name="pr-tr1" size="15" maxlength="50" value="<?php if(isset($_POST['pr-tr1'])) echo $_POST['pr-tr1']; ?>" /></td>
        <td><input type="text" name="pr-st1" size="15" maxlength="50" value="<?php if(isset($_POST['pr-st1'])) echo $_POST['pr-st1']; ?>" /></td>
        <td><input type="text" name="pr-di1" size="15" maxlength="50" value="<?php if(isset($_POST['pr-di1'])) echo $_POST['pr-di1']; ?>" /></td>
        <td><input type="text" name="pr-ex1" size="15" maxlength="50" value="<?php if(isset($_POST['pr-ex1'])) echo $_POST['pr-ex1']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="pr-rg2" size="15" maxlength="50" value="<?php if(isset($_POST['pr-rg2'])) echo $_POST['pr-rg2']; ?>" /></td>
        <td><input type="text" name="pr-tr2" size="15" maxlength="50" value="<?php if(isset($_POST['pr-tr1'])) echo $_POST['pr-tr2']; ?>" /></td>
        <td><input type="text" name="pr-st2" size="15" maxlength="50" value="<?php if(isset($_POST['pr-st2'])) echo $_POST['pr-st2']; ?>" /></td>
        <td><input type="text" name="pr-di2" size="15" maxlength="50" value="<?php if(isset($_POST['pr-di2'])) echo $_POST['pr-di2']; ?>" /></td>
        <td><input type="text" name="pr-ex2" size="15" maxlength="50" value="<?php if(isset($_POST['pr-ex2'])) echo $_POST['pr-ex2']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="pr-rg3" size="15" maxlength="50" value="<?php if(isset($_POST['pr-rg3'])) echo $_POST['pr-rg3']; ?>" /></td>
        <td><input type="text" name="pr-tr3" size="15" maxlength="50" value="<?php if(isset($_POST['pr-tr3'])) echo $_POST['pr-tr3']; ?>" /></td>
        <td><input type="text" name="pr-st3" size="15" maxlength="50" value="<?php if(isset($_POST['pr-st3'])) echo $_POST['pr-st3']; ?>" /></td>
        <td><input type="text" name="pr-di3" size="15" maxlength="50" value="<?php if(isset($_POST['pr-di3'])) echo $_POST['pr-di3']; ?>" /></td>
        <td><input type="text" name="pr-ex3" size="15" maxlength="50" value="<?php if(isset($_POST['pr-ex3'])) echo $_POST['pr-ex3']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="pr-rg4" size="15" maxlength="50" value="<?php if(isset($_POST['pr-rg4'])) echo $_POST['pr-rg4']; ?>" /></td>
        <td><input type="text" name="pr-tr4" size="15" maxlength="50" value="<?php if(isset($_POST['pr-tr4'])) echo $_POST['pr-tr4']; ?>" /></td>
        <td><input type="text" name="pr-st4" size="15" maxlength="50" value="<?php if(isset($_POST['pr-st4'])) echo $_POST['pr-st4']; ?>" /></td>
        <td><input type="text" name="pr-di4" size="15" maxlength="50" value="<?php if(isset($_POST['pr-di4'])) echo $_POST['pr-di4']; ?>" /></td>
        <td><input type="text" name="pr-ex4" size="15" maxlength="50" value="<?php if(isset($_POST['pr-ex4'])) echo $_POST['pr-ex4']; ?>" /></td>
    </tr>
</table>
<table style="width: 533px; border: 1px solid #000; border-collapse:collapse;">
	<tr>
    	<td colspan="3"><br />Specialized Training and/or Experience</td>
    </tr>
    <tr>
    	<td style="width:33%;"><strong>Business</strong></td>
        <td style="width:33%;"><strong>Certifications</strong></td>
        <td style="width:33%;"><strong>Other Special Qualifications</strong></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b1" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b1'])) echo $_POST['ste-b1']; ?>" /></td>
        <td><input type="text" name="ste-c1" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c1'])) echo $_POST['ste-c1']; ?>" /></td>
        <td><input type="text" name="ste-q1" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q1'])) echo $_POST['ste-q1']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b2" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b2'])) echo $_POST['ste-b2']; ?>" /></td>
        <td><input type="text" name="ste-c2" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c2'])) echo $_POST['ste-c2']; ?>" /></td>
        <td><input type="text" name="ste-q2" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q2'])) echo $_POST['ste-q2']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b3" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b3'])) echo $_POST['ste-b3']; ?>" /></td>
        <td><input type="text" name="ste-c3" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c3'])) echo $_POST['ste-c3']; ?>" /></td>
        <td><input type="text" name="ste-q3" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q3'])) echo $_POST['ste-q3']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b4" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b4'])) echo $_POST['ste-b4']; ?>" /></td>
        <td><input type="text" name="ste-c4" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c4'])) echo $_POST['ste-c4']; ?>" /></td>
        <td><input type="text" name="ste-q4" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q4'])) echo $_POST['ste-q4']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b5" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b5'])) echo $_POST['ste-b5']; ?>" /></td>
        <td><input type="text" name="ste-c5" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c5'])) echo $_POST['ste-c5']; ?>" /></td>
        <td><input type="text" name="ste-q5" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q5'])) echo $_POST['ste-q5']; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="ste-b6" size="28" maxlength="80" value="<?php if(isset($_POST['ste-b6'])) echo $_POST['ste-b6']; ?>" /></td>
        <td><input type="text" name="ste-c6" size="28" maxlength="80" value="<?php if(isset($_POST['ste-c6'])) echo $_POST['ste-c6']; ?>" /></td>
        <td><input type="text" name="ste-q6" size="28" maxlength="80" value="<?php if(isset($_POST['ste-q6'])) echo $_POST['ste-q6']; ?>" /></td>
    </tr>
</table>
<h3>References</h3>
Please list at least 4 references who are not related to you and who have knowledge of your qualifications for this position. (Please provide complete addresses including Street, City, State and Zip.)
<table style="width:533px;">
	<tr>
    	<td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref1name'])){echo'<span class="red">*</span>';}?><strong>Name</strong>:<br /><input type="text" name="ref1name" size="21" maxlength="50" value="<?php if(isset($_POST['ref1name'])) echo $_POST['ref1name']; ?>" placeholder="" /></td>
        <td style="width:25%; border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref1phn'])){echo'<span class="red">*</span>';}?><strong>Phone</strong>:<br /><input type="text" name="ref1phn" size="21" maxlength="50" value="<?php if(isset($_POST['ref1phn'])) echo $_POST['ref1phn']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref2name'])){echo'<span class="red">*</span>';}?><strong>Name</strong>:<br /><input type="text" name="ref2name" size="21" maxlength="50" value="<?php if(isset($_POST['ref2name'])) echo $_POST['ref2name']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref2phn'])){echo'<span class="red">*</span>';}?><strong>Phone</strong>:<br /><input type="text" name="ref2phn" size="21" maxlength="50" value="<?php if(isset($_POST['ref2phn'])) echo $_POST['ref2phn']; ?>" placeholder="" /></td>
    </tr>
    <tr>
    	<td colspan="2" style="border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref1addy'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="ref1addy" size="42" maxlength="50" value="<?php if(isset($_POST['ref1addy'])) echo $_POST['ref1addy']; ?>" placeholder="Street, City, State, Zip" /></td>
        <td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['ref2addy'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="ref2addy" size="42" maxlength="50" value="<?php if(isset($_POST['ref2addy'])) echo $_POST['ref2addy']; ?>" placeholder="Street, City, State, Zip" /></td>
    </tr>
    <tr>
    	<td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref1emp'])){echo'<span class="red">*</span>';}?>Employer:<br /><input type="text" name="ref1emp" size="21" maxlength="50" value="<?php if(isset($_POST['ref1emp'])) echo $_POST['ref1emp']; ?>" placeholder="" /></td>
        <td style="width:25%; border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref1empphn'])){echo'<span class="red">*</span>';}?>Phone:<br /><input type="text" name="ref1empphn" size="21" maxlength="50" value="<?php if(isset($_POST['ref1empphn'])) echo $_POST['ref1empphn']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref2emp'])){echo'<span class="red">*</span>';}?>Employer:<br /><input type="text" name="ref2emp" size="21" maxlength="50" value="<?php if(isset($_POST['ref2emp'])) echo $_POST['ref2emp']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref2empphn'])){echo'<span class="red">*</span>';}?>Phone:<br /><input type="text" name="ref2empphn" size="21" maxlength="50" value="<?php if(isset($_POST['ref2empphn'])) echo $_POST['ref2empphn']; ?>" placeholder="" /></td>
    </tr>
    <tr><td colspan="4"><hr /></td></tr>
    <tr>
    	<td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref3name'])){echo'<span class="red">*</span>';}?><strong>Name</strong>:<br /><input type="text" name="ref3name" size="21" maxlength="50" value="<?php if(isset($_POST['ref3name'])) echo $_POST['ref3name']; ?>" placeholder="" /></td>
        <td style="width:25%; border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref3phn'])){echo'<span class="red">*</span>';}?><strong>Phone</strong>:<br /><input type="text" name="ref3phn" size="21" maxlength="50" value="<?php if(isset($_POST['ref3phn'])) echo $_POST['ref3phn']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref4name'])){echo'<span class="red">*</span>';}?><strong>Name</strong>:<br /><input type="text" name="ref4name" size="21" maxlength="50" value="<?php if(isset($_POST['ref4name'])) echo $_POST['ref4name']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref4phn'])){echo'<span class="red">*</span>';}?><strong>Phone</strong>:<br /><input type="text" name="ref4phn" size="21" maxlength="50" value="<?php if(isset($_POST['ref4phn'])) echo $_POST['ref4phn']; ?>" placeholder="" /></td>
    </tr>
    <tr>
    	<td colspan="2" style="border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref3addy'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="ref3addy" size="42" maxlength="50" value="<?php if(isset($_POST['ref3addy'])) echo $_POST['ref3addy']; ?>" placeholder="Street, City, State, Zip" /></td>
        <td colspan="2"><?php if(isset($_POST['submitted']) && empty($_POST['ref4addy'])){echo'<span class="red">*</span>';}?>Address:<br /><input type="text" name="ref4addy" size="42" maxlength="50" value="<?php if(isset($_POST['ref4addy'])) echo $_POST['ref4addy']; ?>" placeholder="Street, City, State, Zip" /></td>
    </tr>
    <tr>
    	<td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref3emp'])){echo'<span class="red">*</span>';}?>Employer:<br /><input type="text" name="ref3emp" size="21" maxlength="50" value="<?php if(isset($_POST['ref3emp'])) echo $_POST['ref3emp']; ?>" placeholder="" /></td>
        <td style="width:25%; border-right: 1px #000 solid;"><?php if(isset($_POST['submitted']) && empty($_POST['ref3empphn'])){echo'<span class="red">*</span>';}?>Phone:<br /><input type="text" name="ref3empphn" size="21" maxlength="50" value="<?php if(isset($_POST['ref3empphn'])) echo $_POST['ref3empphn']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref4emp'])){echo'<span class="red">*</span>';}?>Employer:<br /><input type="text" name="ref4emp" size="21" maxlength="50" value="<?php if(isset($_POST['ref4emp'])) echo $_POST['ref4emp']; ?>" placeholder="" /></td>
        <td style="width:25%;"><?php if(isset($_POST['submitted']) && empty($_POST['ref4empphn'])){echo'<span class="red">*</span>';}?>Phone:<br /><input type="text" name="ref4empphn" size="21" maxlength="50" value="<?php if(isset($_POST['ref4empphn'])) echo $_POST['ref4empphn']; ?>" placeholder="" /></td>
    </tr>
</table>
<h3>Veterans Preference</h3>
<p><input type="checkbox" name="veteranspref" value="vetpref"<?php if ($_POST["veteranspref"] == 'vetpref') { echo 'checked=" checked"' ;} ?> />Check this box if you wish to claim Veteran's Preference.</p>
<div class="hiddenvp">
<p>The Town of Lady Lake is subject to s.295.07,FS, which requires that employment preference be given to eligible veterans and spouses of veterans in positions of employment, except those that are exempted such as department heads or temporary positions, without benefits. If you wish to be identified as claiming Veteran's Preference, please check applicable statement and sign below.</p>
<p>I wish to claim Veteran's Preference as:</p>
<table style="width:533px;">
	<tr>
    	<td width="46">1. &nbsp; <input type="radio" name="vp" value="One"<?php if ($_POST["vp"] == 'One') { echo 'checked=" checked"' ;} ?> /></td>
        <td width="475">A veteran with a service-connected disability who is eligible for or receiving compensation, disability retirement or pension under public laws administered by the U.S. Department of Veterans' Affairs and the Department of Defense; OR</td>
	</tr>
    <tr>
    	<td>2. &nbsp; <input type="radio" name="vp" value="Two"<?php if ($_POST["vp"] == 'Two') { echo 'checked=" checked"' ;} ?> /></td>
        <td>The spouse of a veteran who cannot qualify for employment because of a total and permanent disability, or the spouse of a veteran missing in action, captured or forcibly detained by a foreign power; OR</td>
	</tr>
    <tr>
    	<td>3. &nbsp; <input type="radio" name="vp" value="Three"<?php if ($_POST["vp"] == 'Three') { echo 'checked=" checked"' ;} ?> /></td>
        <td>A veteran of any war who has served on active duty for one day or more during a wartime period, excluding active duty for training and  who was discharged under honorable conditions from the Armed Forces of the United States of America, OR</td>
	</tr>
    <tr>
    	<td>4. &nbsp; <input type="radio" name="vp" value="Four"<?php if ($_POST["vp"] == 'Four') { echo 'checked=" checked"' ;} ?> /></td>
        <td>The un-remarried widow or widower of a veteran who died of a service connected disability.</td>
	</tr>
</table>
<table style="width:533px; margin-top:10px;">
	<tr>
    	<td style="width:33%;">
        <select name="vpbranch">
        	<option value="Please Select Branch">-- Choose Branch --</option>
            <option value="Air Force" <?php if($_POST['branch'] == "Air Force") { echo "selected='selected'";} ?>>Air Force</option>
            <option value="Army" <?php if($_POST['branch'] == "Army") { echo "selected='selected'";} ?>>Army</option>
            <option value="Coast Guard" <?php if($_POST['branch'] == "Coast Guard") { echo "selected='selected'";} ?>>Coast Guard</option>
            <option value="Marines" <?php if($_POST['branch'] == "Marines") { echo "selected='selected'";} ?>>Marines</option>
            <option value="Navy" <?php if($_POST['branch'] == "Navy") { echo "selected='selected'";} ?>>Navy</option>
        </select>
        <br />Branch of Service:</td>
        <td style="width:33%;"><input type="date" name="vpdateentry" size="21" maxlength="50" value="<?php if(isset($_POST['vpdateentry'])) echo $_POST['vpdateentry']; ?>" placeholder="MM/DD/YYYY" /><br />Date of Entry</td>
        <td style="width:33%;"><input type="date" name="vpdatedis" size="21" maxlength="50" value="<?php if(isset($_POST['vpdatedis'])) echo $_POST['vpdatedis']; ?>" placeholder="MM/DD/YYYY" /><br />Date of Discharge</td>
    </tr>
</table>
<p><strong>Note: A DD214 or comparable document which serves as a certificate of release or discharge must be furnished at the time of application.</strong> In addition, applicants claiming categories 1,2, or 4 above must furnish supporting documentation in accordance with the provisions of Rule 55A-7.013, F.A.C. Wartime periods are defined in section 1.01, F.S. Veterans' preference shall expire after an eligible person has been employed by the state or an agency of a political subdivision of the state. Under Florida law, preference in appointment shall be given by the state to those persons in categories 1 and 2 and then those in categories 3 and 4. Veterans' Preference is only available to Florida residents.</p>
<p>If an applicant claiming Veterans' Preference for a vacant position is not selected, he/she may file a complaint with the Florida Department of Veteran's Affairs, P.O. Box 31003, St. Petersburg, FL 33731-8903. A complaint must be filed within 21 days of the applicant receiving notice of the hiring decision made by the employing agency or within 3 months of the date of the application is filed with the employer if no notice is given.</p>
</div><!--/veterans preference-->

<h3>Employment Application Supplement</h3>
<table style="width:533px;">
	<tr>
    	<td>1. If it became necessary in the course of your police duties to lawfully take a human life, would you have any reluctance to do so?</td>
    	<td style="width:18%;"><input type="radio" name="eas1" value="Yes"<?php if ($_POST["eas1"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas1" value="No"<?php if ($_POST["eas1"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>2. Are you now on any eligibility list?</td>
    	<td style="width:18%;"><input type="radio" name="eas2" value="Yes"<?php if ($_POST["eas2"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas2" value="No"<?php if ($_POST["eas2"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>3. Can you operate a motor vehicle?</td>
    	<td style="width:18%;"><input type="radio" name="eas3" value="Yes"<?php if ($_POST["eas3"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas3" value="No"<?php if ($_POST["eas3"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>4. Have you ever been involved in a motor vehicle accident?</td>
    	<td style="width:18%;"><input type="radio" name="eas4" value="Yes"<?php if ($_POST["eas4"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas4" value="No"<?php if ($_POST["eas4"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>5. Have you ever been refused a drivers license by any state?</td>
    	<td style="width:18%;"><input type="radio" name="eas5" value="Yes"<?php if ($_POST["eas5"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas5" value="No"<?php if ($_POST["eas5"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>6. Have you ever received a traffic citation (non-parking)?</td>
    	<td style="width:18%;"><input type="radio" name="eas6" value="Yes"<?php if ($_POST["eas6"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas6" value="No"<?php if ($_POST["eas6"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>7. Do you now have any unpaid summons outstanding against you for any violation?</td>
    	<td style="width:18%;"><input type="radio" name="eas7" value="Yes"<?php if ($_POST["eas7"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas7" value="No"<?php if ($_POST["eas7"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>8. Are you now or have you ever been a member of any subversive orangization in which advocated, advised or taught the doctrine that the government of the United States of America or of any political subdivision thereof should be overthrown by force, violence or any unlawful means?</td>
    	<td style="width:18%;"><input type="radio" name="eas8" value="Yes"<?php if ($_POST["eas8"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas8" value="No"<?php if ($_POST["eas8"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
    <tr>
    	<td>9. Have you ever applied to or been employed by any law enforcement agency?</td>
    	<td style="width:18%;"><input type="radio" name="eas9" value="Yes"<?php if ($_POST["eas9"] == 'Yes') { echo 'checked=" checked"' ;} ?> />Yes <input type="radio" name="eas9" value="No"<?php if ($_POST["eas9"] == 'No') { echo 'checked=" checked"' ;} ?> />No</td>
    </tr>
</table>
<h3>Personal Inquiry Waiver Certificate &amp; Affidavit</h3>
<div style="width:533px;">
<p>Please download and complete the following form and return it to the Town of Lady Lake Human Resources Department.</p>
<p>&nbsp;&mdash;<a href="#">Personal Inquiry Waiver Certificate &amp; Affidavit</a></p>
</div><!--Personal Inquiry Waiver -->

<h3>Authorization for Investigation</h3>
<p><input type="checkbox" name="authorize_investigation" value="authinvest"<?php if ($_POST["authorize_investigation"] == 'authinvest') { echo 'checked=" checked"' ;} ?> />
&nbsp;By checking this box, I authorize the investigation of all statements and information contained in my application and/or resume, to include any information of a confidential or privileged nature, which can be used to assist in determining my qualification and fitness for employment. Additionally, I authorize the Town of Lady Lake to contact any organization, agency or individual to obtain information related to, but not limited to, the following:</p>
<ul>
	<li>Employment</li>
    <li>Education</li>
    <li>Armed Forces</li>
    <li>Driving Record</li>
    <li>Motor Vehicle Reports (MVR)</li>
    <li>Community Standing</li>
    <li>Criminal History</li>
</ul>

<h3>Applicant's Certification of Understanding</h3>
<p>Please download and complete the following form and return it to the Town of Lady Lake Human Resources Department. It will require notorization before being accepted.</p> 
<p>&nbsp;&mdash;<a href="#">Applicant's Certification of Understanding</a></p>   

<h3>Release of Liability</h3>
<p>As part of its employment application process, I understand that the Town of Lady Lake may obtain or have prepared by a third party a consumer/investigative consumer report concerning my prior employment, military record, education, credit worthiness, credit standing, credit capacity, character, general reputation, personal characteristics, criminal background, involvment in civil actions, driving record or mode of living.</p>
<p>I understand that I have a right to make a written request whether an investigative consumer report was requested, and will be given full information as to the nature and scope of such investigation.</p>
<p>By marking the checkbox below, I authorize the Town of Lady Lake and its authorized, third party agents to obtain a consumer/investigative consumer report on me as part of the Town's pre-employment investigation process. If I am offered employment by the Town of Lady Lake I further authorize it to obtain additional consumer/investigative consumer reports for employment purposes at any time during my employment.</p>
<p>By marking the checkbox below, I acknowledge that I have been provided with a summary of my rights under the federal Fair Credit Reporting Act.</p>
<p>I HEARBY RELEASE from all liability any persons or entities supplying information pursuant to a request by the Town of Lady Lake, or its third-party agent, as authorized by this release.  This authorization and release shall remain in effect during the period of time that the Town of Lady Lake is considering me for employment or for the length of my employment, whichever is later.</p>
<p>I affirm that this application contains no misrepresentation or falsifications, ommissions or concealment of material fact and that information given by me is true and complete to the best of my knowledge and belief. I am aware that statements made by me on this application are subject to later investigation. I am further aware that should any investigation disclose any such misrepresentation, falsification, ommission or concealment of material fact, my application may be rejected and my name removed from the eligibilty lists. If already appointed, I may be dismissed. I authorize investigation of all statements contained in this application. In addition, as a consideration of my being considered for Town employment, I hereby consent to take and pre-employment physicals, screenings, background investigations and drug screenings.</p>
<p>If accepted for employment, I agree to abide by and comply with all rules, regulations, policies and practices of the Town of Lady Lake. I understand that my employment with the Town is at-will, that I have the right to terminate my employment at any time with or without cause, and that the Town has the same right. I understand that no representative of the employer has any authority to enter into any agreement with me contrary to the policies and practices of the Town of Lady Lake.</p>
<p><input type="checkbox" name="release_liability" value="liability"<?php if ($_POST["release_liability"] == 'liability') { echo 'checked=" checked"' ;} ?> />&nbsp; By checking this box, I agree to the above statements.

<table>    
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