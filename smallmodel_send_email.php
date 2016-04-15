<?php
 $Planningdestination = $_POST['Planningdestination'];
  $Name = $_POST['Name'];
  $City = $_POST['City'];
    $Mobile = $_POST['Mobile'];
  $Email = $_POST['Email'];
  $Adult = $_POST['Adult'];
  $Child = $_POST['Child'];
  $Infant = $_POST['Infant'];
  $Date_of_travel = $_POST['Date_of_travel'];
  $other_requirements = $_POST['other-requirements'];
    $email_from = $Email;
 
    $email_subject = "New Feedback_Form submission";
 
    $email_body = "You have received a new message from the user $Name.\n".
                  "Here is the Mobile Number:\n $Mobile".
    							"Here is the Planning Destination:\n $Planningdestination".
    							"Here is the City:\n $City".
    							"Here is the Email:\n $Email".
    							"Here is the Adult :\n $Adult".
    							"Here is the Child:\n $Child".
    							"Here is the other_requirements:\n $other_requirements".
    							"Here is the Infant:\n $Infant".
    							"Here is the Date_of_travel:\n $Date_of_travel".

 

 
  $to = "info@oozaaoo.com";
 
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