<?php
	// $admin_email = "info@oozaaoo.com";
   $to = "info@etekchnoservices.com";
	$admin_email = "sweetkannan05@gmail.com";
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
	
	$send = mail($admin_email,$title, $comment, "From:" .  $to );	
	
	if($send){
				echo "success";
	}
	else{
		echo "failure";
		
	}

?>