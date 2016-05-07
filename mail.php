<?php
	$admin_email = "info@oozaaoo.com";
	$title = "Request for".$_POST['formname'];
	$email = $_POST['Email'];
	$data = $_POST;
	unset($data['formname']);
	$comment = '';
	$comment .="You have received mail about".$_POST['formname'];
	echo "\n"; 
	foreach($data as  $key => $value){
		$comment .= $key.":".$value."\n" ;
	}
	$send = mail($admin_email,$title, $comment, "From:" . $email);	
	
	if($send){
		// echo "Your request has been submitted successfully.";
		// header("Location:index.php");

		echo "success";

		// echo '<script language="javascript">';
		// echo 'alert("Your request has been submitted successfully.");';
		// echo 'window.location.href="index.php";';
		// echo '</script>';
	}
	else{
		echo "failure";
		// echo "Your request is not submitted due to some technical problem.Please send it later";
	}

?>