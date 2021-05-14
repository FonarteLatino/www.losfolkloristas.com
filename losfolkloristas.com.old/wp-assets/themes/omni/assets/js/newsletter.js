jQuery(document).ready(function() {
	
	//if submit button is clicked
	jQuery('.newsletter').on("click", '#newsletter-signup', function () {		
		
		//Get the data from all the fields
		var email = jQuery('.newsletter input[name=email]');
		var returnError = false;
		
		//Simple validation to make sure user entered something
		//Add your own error checking here with JS, but also do some error checking with PHP.
		//If error found, add hightlight class to the text field
		if (email.val()=='') {
			email.addClass('error');
			returnError = true;
		} else email.removeClass('error');
		
		//E-mail address validation
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(reg.test(email.val()) == false) {
			email.addClass('error');
			returnError = true;
		} else email.removeClass('error'); 
		
		// Highlight all error fields, then quit.
		if(returnError == true){
			return false;	
		}
		
		//organize the data
		var data = 'email=' + email.val();
		
		//disabled all the text fields
		jQuery('.newsletter .text').attr('disabled','true');
		
		//show the loading sign
		jQuery('.newsletter .loading').show();
		
		//start the ajax
		jQuery.ajax({
			//this is the php file that processes the data and sends email
			url: templateDir + "/assets/php/contact-form/newsletter.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html==1) {					
					//hide the form
					jQuery('.newsletter').fadeOut('slow');					
					
					//show the success message
					jQuery('.newsletter-success').fadeIn('slow');
					
				//if process.php returned 0/false (send mail failed)
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	
});	