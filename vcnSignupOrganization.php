<?php

class vcnForm {

	function vcnHandleForm() {
 			$this->displayContactForm();
    }
   
	//This function displays the Contact form.
    public function displayContactForm() {
    	?>
    	<div id ="contactFormSection">
	<h2>Organization Information</h2>

<form action="http://www.vcn.bc.ca/cgi-bin/user-data/reg-org.cgi" id="contactForm"  method="post" enctype="multipart/form-data" >
<fieldset>
<label >Organization Name*
<input type="text" maxlength="25" name="names" size="25"></label>

<label >Address Line 1*:
<input type="text" maxlength="25" name="address1" size="25"></label>

<label >Address Line 2*:
<input type="text" maxlength="25" name="address2" size="25"></label>

<label >City*:
<input type="text" maxlength="25" name="city"  size="25"></label>

<label  >Province*:
<input type="text" maxlength="25" name="province" size="25" value="British Columbia"> </label>

<label >Postal Code*:
<input type="text" maxlength="25" name="postalcode"  size="25"> </label>
<label>Country*:
<input type="text" maxlength="25" name="country" size="25" value="Canada"> </label>
<label>Organization Phone*:
<input type="text" maxlength="25" name="phone1" size="25"> </label>
<label>Fax:
<input type="text" maxlength="25" name="fax" size="25"> </label>
<label>Contact Name*:
<input type="text" maxlength="25" name="birth_contact" size="25"> </label>
<label>Contact Phone*:
<input type="text" maxlength="25" name="phone2" size="25"> </label>
<h2>Organization Description</h2>
<p>Give a one paragraph description of your organization which will be used to create a default webpage.</p>
<textarea cols="25" name="description" rows="6"></textarea>
</fieldset>
<h2>Account Information Section</h2>
Enter a login id between 3 and 8 characters long. The first character must be a letter but the rest may be either letters or numbers. No UPPER CASE letters or punctuation is allowed. Remember, your login id is also the first part of your e-mail address so make sure you choose wisely. (ie.login@vcn.bc.ca).
<fieldset>
<label>login*:
<input type="text" maxlength="8" name="login" size="8" ></label>

Choose a password between 6 and 8 characters long. It must have at least one letter and one number. Remember passwords are CASE SENSITIVE, so if you enter your password in UPPER CASE letters you must also enter UPPER CASE letters at login time.
<br>
<label>password*:
<input type="password" maxlength="8" name="password" size="8" ></label>
<h2>Password Problem Section</h2>
It is a good idea, for security reasons, to change your password regularly. But, if you ever forget your password, the following information will allow us to verify your identity over the phone and reset your password to the one you chose above. Your keyword should be something that you will not forget such as your mother's maiden name or your birthdate.
<br>
<label>Keyword (mothers maiden name)*:
<input type="text" maxlength="15" name="keyword" size="15" ></label>

By submitting your registration information, you indicate that you have read and understood the VCN <a href="/user-agreement/">User Agreement</a> and accept its terms for use of VCN. You also agree to receive occasional messages about your account and VCN.

<input type="submit" value="Submit" />
<input type="reset" value="Clear Form" />
</fieldset>
The above information is for our records only. It will not be given out for any reason. Please read our <a href="/policy/">VCN Privacy Policy</a>

All the fields marked with * are mandatory

			    <?php wp_nonce_field( 'submit_contact_form' , 'nonce_field_for_submit_contact_form'); ?>
	 
			</form>
		</div>
		<?php
    }
   
}

?>
