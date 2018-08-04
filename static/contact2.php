<?php
error_reporting(E_ALL);

if($_POST)
{
	$recepient_email = "mohsin.thingmax@gmail.com"; //recepient
    $mail_from = "info@nithyasai.com"; //from email using site domain.
    $subject = "Reg:Message from ".$_POST['email']; //email subject line
    
    $sender_name = $_POST["fullname"]; //capture sender name
	
 
  
  
	
	$body = "*************************************\n";
	$body .= "Form details <br />";
	$body .="First Name ".$sender_name."<br />";		
	$body .= "Contact ".$_POST["mobile"]."<br />"; 
    $body .="Email ".$_POST['email']."<br />";
    $body .= "Enquiry ".$_POST["message"]; //capture message
    
	//header
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From:".$mail_from."\r\n"; 
	$headers .= "Reply-To: ".$sender_email."" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        
    $sentMail = mail($recepient_email, $subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{   unset($_POST);		
		echo "Thank you for your interest. Our team will contact you soon!!!";
	}
	else{
            
		echo "Oops... Something went wrong!!! Please try after some time.";  
	}
}
?>
