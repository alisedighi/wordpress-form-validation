jQuery(document).ready(function($) {


	jQuery.validator.addMethod('validPass',function ( value ,element){
		                  return (this.optional(element)||/^(?=.*[0-9])(?=.*[A-z])([A-z0-9\(\)\ \'\#\.\,\-\/\\]){6,8}$/.test(value) );
	},"Please enter a password whit at least one letter and one digit. You can use these characters in your password as well \(\)\'\#\.    \,\-\/ \\ and space");


	jQuery.validator.addMethod('validZip',function(value,element){
				return (this.optional(element) || /^[ABCEGHJKLMNPRSTVXYabcedhjklmnprstvxy]{1}\d{1}[A-z]{1} *\d{1}[A-z]{1}\d{1}$/.test(value));
	},"<span class='notif'>enter a valid zip code.</span></br> ");

	jQuery.validator.addMethod('validContact',function(value,element){
			return (this.optional(element)||/^[A-z0-9\s\(\)\'\#\.\,\-\/\\]+\s([A-z0-9\(\)\'\#\.\,\-\/\\]+)$/.test(value));},"<span class='notif'>enter a valid name.</span></br> ");

	jQuery.validator.addMethod('phone',function(value,element){
		                        return (this.optional(element)||/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(value));},"<span class='notif'>enter a valid phone number.</span></br> ");


	jQuery.validator.addMethod('validPass',function ( value ,element){
                  return (this.optional(element)||/^(?=.*[0-9])(?=.*[A-z])([A-z0-9\(\)\ \'\#\.\,\-\/\\]){6,8}$/.test(value) );
},"<span class='notif'> enter a password whit at least one letter and one digit. You can use these characters in your password as well \(\)\'\#\.    \,\-\/ \\ and space</span>");



	  $( "#contactForm" ).validate({
	  rules: {
	names: {
		required: true
	},
	address1: {
		required: true
	},
	address2: {
		required: true
	},
	city: {
		required: true
	},
	province: {
		required: true
	},
	postalcode: {
		required: true,
		validZip: true
	},
	country: {
		required: true
	},
	phone1:{
		required: true,
		phone: true
	},
	birth_contact: {
		required: true,
		validContact: true
	},
	phone2: {
		required: true,
		phone: true
	},
	password: {
		required: true,
		validPass: true
	},
	keyword: {
		required: true
	},
	birth_date: {
		required: true
	}
	

	  },
	  messages:{
		names:{
			required: "<span class='notif'>this field is required.</span></br> "
		},

		address1: {
	                required: "<span class='notif'>this filed is required.</span></br> "
		},
		address2: {
                        required: "<span class='notif'>this filed is required.</span></br> "
                },

		city: {
		        required: "<span class='notif'>this filed is required.</span></br> "
		},
		province: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		postalcode: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		country: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		phone1: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		birth_contact: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		phone2: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		password: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		keyword: {
			required: "<span class='notif'>this filed is required.</span></br> "
		},
		birth_date: {
			required: "<span class='notif'>this filed is required.</span></br> "
		}
		
		}
	});
})
