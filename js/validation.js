jQuery(document).ready(function(){
	$('#small_model_form').validate({
		rules:{
			Planningdestination: {
				required:true,									
			},
			Name: {
					required: true,
					minlength: 3,
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
					maxlength:10,
					// maxlength:11,
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
				minlength: "Your name must consist of at least 2 characters"
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
				// maxlength: "Please enter valid mobile number",
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
					minlength: 3,
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
				minlength: 3,
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
	
	// validate small model form
	$('#small_model_form, #feedback_form, #contact_form').submit(function(event) {
		event.preventDefault();
		// document.body.style.overflow = 'hidden';
		var content = $(this).serializeArray();
		// alert(content);
		var formname = $(this).attr('id');
		// alert(formname);
		var res = true;
		$('input[type="text"],textarea',this).each(function() {
			if($(this).val().trim() == "") {
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
					alert(data);
				},
			});
			return false;
		}
	});

});//END DOCUEMENT