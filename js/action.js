jQuery(document).ready(function() {

	required = ["oza-modal-name", "oza-modal-mobile", "oza-modal-email"];
	Name = jQuery("#oza-modal-name");
	Mobile = jQuery("#oza-modal-mobile");
	Email = jQuery("#oza-modal-email");

 jQuery("#feedback_form").submit(function(){ 
											
		//Validate required fields
		// alert('test');
		for (i=0;i<required.length;i++) {
			var input = jQuery('#'+required[i]);
			if ((input.val() == "")) 
			
			{
				input.addClass("error");
				
				
			} else {
				input.removeClass("error");
				
			}
		}
		 });
});
// 		// Validate the e-mail.

// 		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
// 			email.addClass("error_input_field");
			
// 			//email.val(emailerror);
// 		}
		
		

	
		
// 		//if any inputs on the page have the class 'error_input_field' the form will not submit
// 		if (jQuery(":input").hasClass("error_input_field")) {
			
				
			
// 			return false;
// 		} else {
// 			errornotice.hide();
// 			return true;
// 		}
// 	});
	
	
	
// 	jQuery.fn.clearOnFocus = function(){
//     return this.focus(function(){
//         var v = jQuery(this).val();
		
//         jQuery(this).val(v === this.defaultValue ? '' : v );
// 		;
//     }).blur(function(){
//         var v = jQuery(this).val();
//         jQuery(this).val( v.match(/^\s+$|^$/) ? this.defaultValue : v );
//     });
 
// 	};

// 	jQuery('input.input_field').clearOnFocus();
// 	jQuery('textarea.form_text_area').clearOnFocus();
// 	jQuery('input.length').clearOnFocus();


	




	
