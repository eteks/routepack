jQuery(document).ready(function(){
	$('#small_model_form').validate({
		rules:{
			Planningdestination: {
				required:true,									
			},
			Name: {
					required: true,
					minlength: 2,
		  	},
		  	Email: {
					required: true,
					email: true
			},
			City: {
					required: true,
					
			},
			Mobile: {
					required:true,
					minlength:10,
					maxlength:11,
			},
			Adult: {
					required:true,
					minlength:1,
			},
		    Child: {
		    		required:true,
		    		minlength:1,
	    	},
	    	Infant: {
	    			required:true,
		    		minlength:1,
    		},

    		Date_of_travel: {
    				required:true,
    		},
		},

		messages: {

			Planningdestination: {
				required: "Please select a  destination",
			},			
			Name: {
				required: "Please enter your name",
				minlength: "Name must have atleast 2 characters"
			},
			Email: {
				required: "Please enter a valid email address",
			},
			City: {
				required: "Please enter your city",
				// minlength: "Your city must consist of at least 2 characters"
			},
			Mobile: {
				required: "Please enter mobile number",
				minlength: "Please enter valid mobile number",
				maxlength: "Please enter valid mobile number",
			},
			Adult: {
				required: "Please enter  no of adults",
				minlength: "Please enter at least 1 adult",
			},
			Child: {
				required: "Please enter  no of Child",
				minlength: "Please enter at least 1 Child",
			},
			Infant: {
				required: "Please enter  no of Infant",
				minlength: "Please enter at least 1 Infant",
			},
			Date_of_travel: {
				required: "Please enter the date of travelling",
			},
				
		}
	});

	$('#feedback_form').validate({
		rules: {
			Countryvisited: {
				required: true,
			},

			Name: {
					required: true,
					minlength: 2,
		  	},
		  	City: {
		  		required: true,
		  	},
		  	Email: {
					required: true,
					email: true
			},
			Mobile: {
					required:true,
					minlength:10,
					maxlength:11,
			},
			Date_of_depature: {
					required:true,
    		},			
		},
		



		messages: {
			Countryvisited: {
				required: "Please select a country you are visited"
			},
			Name: {
				required: "Please enter yourname",
				minlength: "Your name must consist of at least 2 characters"
			},
			City: {
				required: "please select a city",
			},
			Email: {
				required: "Please enter a valid email address",
			},
			Mobile: {
				required: "Please enter mobile number",
				minlength: "Please enter valid mobile number",
				maxlength: "Please enter valid mobile number",
			},
			Date_of_depature: {
				required: "Please enter the date of depature",
			},




		}

	});

	$('#contact_form').validate({ 
		rules: {
			Name: {
				required: true,
				minlength: 2,
			},			
		  	Email: {
					required: true,
					email: true
			},
			Msg: {
					required:true,
					minlength:10,					
			},
					
		},
		messages: {			
			Name: {
				required: "Please enter yourname",
				minlength: "Your name must consist of at least 2 characters",
			},			
			Email: {
				required: "Please enter a valid email address",
			},
			Msg: {
				required: "Please enter Message",
				minlength: "Your Message must consist of at least 10 characters",				
			},		
		}
	});
	


	// validate contact_us form
	$('#contact_form').submit(function(event) {
		event.preventDefault();
		// document.body.style.overflow = 'hidden';
		var content = $(this).serializeArray();
		// alert(content);
		var formname = $(this).attr('id');
		var mail_format_contact = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		// alert(formname);
		var contact_email=$('.contact_email').val();
		var contact_name=$('.contact_name').val().length;
		var contact_msg=$('.contact_msg').val().length;
		var res = true;
		$('input[type="text"],input[type="tel"],textarea',this).each(function() {
			if($(this).val().trim() == "") {
			res = false; 
			}
			if(!contact_email.match(mail_format_contact)) {
				$('#oza-modal-contact-error').addClass('error-val-important');

				$('.error-val').css('display','inline-block');

	    		res=false;
	    	}
	    	else {
	    		$('.error-val').css('display','none');
	    	}

	    	if(contact_name <= 1) {
				res = false;
			}
			if(contact_msg <= 9) {
				res = false;
			}


		});
		content.push({"name":"formname","value":formname});
		if(res){
			$.ajax({
				url: 'mail.php',
				type: 'POST',
				data: content,
				success: function(data) {
					if(data.trim()=='success') {
					alert("Your request has been submitted successfully.");
					window.location.href="index.php";
					}
					else {
					alert("Your request is not submitted due to some technical problem.Please send it later");
					window.location.href="index.php";
					}					
				},
			});
			return false;
		}
	});



	// validate enquire_model form
	$('#small_model_form').submit(function(event) {
		event.preventDefault();
		// document.body.style.overflow = 'hidden';
		var content = $(this).serializeArray();
		// alert(content);
		var formname = $(this).attr('id');
		var phone_re = /^[0-9]+$/;
		var enquire_name=$('.enquire_name').val();
		var enquire_mobile=$('.enquire_mobile').val();
		var mob_len=enquire_mobile.length;
		var mail_format = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var enquire_email=$('.enquire_email').val();
		// alert(formname);
		var res = true;
		$('input[type="text"],input[type="tel"]',this).each(function() {
			if($(this).val().trim() == "") {
			res = false; 
			}
			if(enquire_name <= 2) {
				res = false;
			}
			if (!enquire_mobile.match(phone_re)) {
				res = false;
			}
			if(mob_len < 10 || mob_len > 11) {
				res = false;
			}
			if(!enquire_email.match(mail_format)) {
				$('#oza-modal-email-error').addClass('error-val-important');

				$('.error-val').css('display','inline-block');
	    		res=false;
	    	}
	    	else {
	    		$('.error-val').css('display','none');
	    	}
		});
		content.push({"name":"formname","value":formname});
		if(res){
			$.ajax({
				url: 'mail.php',
				type: 'POST',
				data: content,
				success: function(data) {
					if(data.trim()=='success') {
					alert("Your request has been submitted successfully.");
					window.location.href="index.php";
					}
					else {
					alert("Your request is not submitted due to some technical problem.Please send it later");
					window.location.href="index.php";
					}					
				},
			});
			return false;
		}
	});
    


    // validate feedback form
	$('#feedback_form').submit(function(event) {
		event.preventDefault();
		// document.body.style.overflow = 'hidden';
		var content = $(this).serializeArray();
		// alert(content);
		var formname = $(this).attr('id');
		var feed_moblile=$('.feed_mobile').val();
		var phone_re = /^[0-9]+$/;
        var mob_len=feed_moblile.length;
		var mail_format = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        // alert(mob_len);
		// alert(feed_moblile);
		// alert("test");
		var feed_email=$('.feed_email').val();
		var feed_name=$('.feed_name').val();
		// alert(feed_email);
		// alert(formname);
		var res = true;
		$('input[type="text"],input[type="tel"]',this).each(function() {
			if($(this).val().trim() == "") {
			res = false; 
			}
			if (!feed_moblile.match(phone_re)) {
				res = false;
			}
			if(mob_len < 10 || mob_len > 11) {
				res = false;
			}
			if(!feed_email.match(mail_format)) {
				// alert("invalid");
				$('#oza-modal-email-error').addClass('error-val-important');

				$('.error-val').css('display','inline-block');
	    		res=false;
	    	}
	    	else {
	    		$('.error-val').css('display','none');
	    	}
	    	if(feed_name <= 2) {
				res = false;
			}
		});
		


		content.push({"name":"formname","value":formname});
		if(res){
			$.ajax({
				url: 'mail.php',
				type: 'POST',
				data: content,
				success: function(data) {
					if(data.trim()=='success') {
					alert("Your request has been submitted successfully.");
					window.location.href="index.php";
					}
					else {
					alert("Your request is not submitted due to some technical problem.Please send it later");
					window.location.href="index.php";
					}					
				},
			});
			return false;
		}

	});

});//END DOCUEMENT