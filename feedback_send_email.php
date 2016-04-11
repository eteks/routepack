<?php
$Countryvisited = $_POST['Countryvisited'];
  $Name = $_POST['Name'];
  $City = $_POST['City'];
    $Mobile = $_POST['Mobile'];
  $Email = $_POST['Email'];
  $Date_of_depature = $_POST['Date_of_depature'];
  $textarea_feedback = $_POST['textarea_feedback'];
    $email_from = 'anbudanashok13@gmail.com';
 
    $email_subject = "New Feedback_Form submission";
 
    $email_body = "You have received a new message from the user $Name.\n".
                            "Here is the Mobile:\n $Mobile".
							"Here is the Countryvisited:\n $Countryvisited".
							"Here is the City:\n $City".
							"Here is the Email:\n $Email".
							"Here is the Date_of_depature:\n $Date_of_depature".
							"Here is the textarea_feedback:\n $textarea_feedback".
  
 
  $to = "sweetkannan05@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $Email \r\n";
 
  $send=mail($to,$email_subject,$email_body,$headers);
   if($send){
		echo "<script>alert('Mail has been sent successfully.Our excutive will contact you soon.');</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Mail has been sent not successfully due to some problem.Please try again.');</script>";
	}
 ?>