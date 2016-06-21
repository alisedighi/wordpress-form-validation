<?php

class vcnForm {

	function vcnHandleForm() {
 			$this->displayContactForm();
    }
   
	//This function displays the Contact form.
    public function displayContactForm() {
    	?>
    	<div id ="contactFormSection">
	<h2>Individuals Information</h2>
  

Please fill out the information below as accurately as possible. Account requests without a full legal name (on government-issued ID) and address will not be processed.

<form action="//www.vcn.bc.ca/cgi-bin/user-data/reg-user-email.cgi" method="post" id="contactForm"><b>Legal First and Last Name*</b>:
<input maxlength="40" name="names" size="25" type="text"  />

<b>Phone Number (Day)*</b>:
<input maxlength="25" name="phone1" size="25" type="text" />
<h2>Account Information Section</h2>
Enter a login id between 3 and 8 characters long. The first character must be a letter but the rest may be either letters or numbers. No UPPER CASE letters or punctuation is allowed. Remember, your login id is the first part of your e-mail address so make sure you choose wisely. (ie. login@vcn.bc.ca).
<b>login*</b>:
<input maxlength="8" name="login" size="8" type="text"  />

Choose a password between 6 and 8 characters long. It must have at least one letter and one number. Remember passwords are CASE SENSITIVE, so if you enter your password in UPPER CASE letters you must also enter UPPER CASE letters at login time.

<b>password*</b>:
<input maxlength="8" name="password" size="8" type="password" />
<h2>Password Problem Section</h2>
It is a good idea, for security reasons, to change your password regularly. But, if you ever forget your password, the following information will allow us to verify your identity over the phone and reset your password to the one you choose above. Your keyword should be something that you will not forget such as your mothers maiden name or birthdate.

<b>Birthdate (mm/dd/yyyy)*</b>:
<input maxlength="10" name="birth_contact" size="10" type="text"  />

<b>Current email address, mothers maiden name, or another keyword*</b>:
<input maxlength="30" name="keyword" size="30" type="text"  />

[expand title="Dial-up Internet fields"]
These fields are optional for email service.
<br>
<b>Address Line 1</b>:
<input maxlength="40" name="address1" size="25" type="text"  />

<b>Address Line 2</b>:
<input maxlength="40" name="address2" size="25" type="text" />

<b>City</b>:
<input maxlength="25" name="city" size="25" type="text" value="Vancouver" />

<b>Province</b>:
<input maxlength="25" name="province" size="25" type="text" value="British Columbia" />

<b>Postal Code</b>:
<input maxlength="25" name="postalcode" size="5" type="text"  />

<b>Country</b>:
<input maxlength="25" name="country" size="25" type="text" value="Canada" />

[/expand]

By submitting your registration information, you indicate that you have read and understood the VCN <a href="/user-agreement/">User Agreement</a> and accept its terms for use of VCN. You also agree to receive occasional messages about your account and VCN.

<b>How to Activate Dial-up and Email </b>

For security reasons, VCN requires identification from individuals and non-profit groups requesting privileges to send email or requesting dial-up access. VCN accepts the following types of identification:
<ul>
	<li>BC ID card</li>
	<li>Drivers License</li>
	<li>Citizenship or Passport</li>
	<li>Cheque in your name</li>
	<li>Care Card <b>or</b> Utility Bill, <b>plus</b> other picture ID</li>
</ul>
You'll need to do one of the following:
<ul>
	<li>Come down to our offices with <b>your</b> ID.</li>
	<li>Mail in a cheque with <b>your</b> name on it and include your user name (You can VOID the cheque if you do not wish to make a donation.)</li>
	<li>Send a friend down to our offices with <b>your</b> ID and your user name.</li>
</ul>
<p align="right"><input type="submit" value="Submit" />
<input type="reset" value="Clear Form" id="reset" /></p>
The above information is for our records only. It will not be given out for any reason. Please read our <a href="/policy/">VCN Privacy Policy</a>

All the fields marked with * are considered mandatory.

</form>


			    <?php wp_nonce_field( 'submit_contact_form' , 'nonce_field_for_submit_contact_form'); ?>
	 
			</form>
		</div>
		<?php
    }
   
}

?>
