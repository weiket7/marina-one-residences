<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	$comments = $_POST['message'];

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	if(trim($_POST['mobile']) == '')  {
		$hasError = true;
	} else {
		$mobile = trim($_POST['mobile']);
	}

	if($_POST['unit'] == '')  {
		$hasError = true;
	} else {
		$unit = $_POST['unit'];
	}

	if(!isset($hasError)) {
		$emailTo = 'adoptadogsg7@gmail.com'; //Put your own email address here
		//$emailTo = 'williamhong.cbre@gmail.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nUnit: $unit\n\nMobile: $mobile\n\nComments:\n $comments";
		$headers = 'From: marinaone-launch.com <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, 'Marina One: '.$name.' , '.$unit, $body, $headers);
		$emailSent = true;
	}
}
?>


<?php include "top.php" ?>

<!-- AFTER HEADER -->
<div id="outerafterheader">
	<div class="container">
		<div class="twelve columns" id="afterheader">
			<section id="aftertheheader">
				<span class="pagedesc">Register Interest</span>                  
			 <div class="clear"></div>
			</section>
		</div>
	</div>
</div>
<!-- END AFTER HEADER -->

<!-- MAIN CONTENT -->
<div id="outermain">
	<div class="container">
	<section id="maincontent" class="twelve columns">
	
		<section id="content" class="nine columns positionleft alpha">
			<div class="padcontent">
			
				<div id="contactform">
						<?php if(isset($hasError)) {  ?>
							<p class="	error">Please fill in all fields.</p>
						<?php } ?>

						<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
							<p class="success">Thank you for registering your interest, we will be in touch with you soon!</p>
						<?php } ?>

					  <form id="contact" method="post" action="register.php">
						<fieldset>
							<input type="text" name="contactname" id="contactname" value="" class="text-input" /><label for="name" id="name_label">Your Name</label>
							<input type="text" name="email" id="email" value="" class="text-input" /><label for="email" id="email_label">Your E-mail</label>
							<input type="text" name="mobile" id="mobile" value="" class="text-input" /><label for="mobile" id="mobile_label">Your Mobile</label>
							<select class="required" name='unit' style='margin-bottom:10px'>
								<option>Type</option>
								<option value='Studio'>1 Bedroom</option>
								<option value='2 Bedroom'>2 Bedroom</option>
								<option value='2 Bedroom'>2 Bedroom + Study</option>
								<option value='3 Bedroom'>3 Bedroom</option>
								<option value='4 Bedroom'>4 Bedroom</option>
								<option value='Penthouse'>Penthouse</option>
							</select>
							<textarea cols="60" rows="10" name="message" id="message" class="text-input"></textarea>
							<br /><br class="clear" />
							<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message"/>
						</fieldset>
					  </form>
				</div><!-- end contactform -->
			</div>
		</section><!-- content -->
		
		<div class="clear"></div><!-- clear float --> 
	</section>
	</div>
</div>
<!-- END MAIN CONTENT -->

<?php include "footer.php" ?>