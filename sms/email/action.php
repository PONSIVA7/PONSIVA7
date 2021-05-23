<?php

if(isset($_POST['email']) && $_POST['email']!=""){

	require_once ('PHPMailer/PHPMailerAutoload.php');

        $emails  = $_POST['email'];

        $subject = "Send Bulk Email in PHP using PHPMailer with Ajax JQuery";

	$message = "<br>Powered By Webs Codex <br><br>Web: <a href='https://www.webscodex.com/' target='_blank'>Webs Codex</a>";

        $mail = new PHPMailer(true);

	$mail->SMTPDebug = 3;                                 // Enable verbose debug output
	$mail->CharSet="UTF-8";                               // Put right encoding here  
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'aliases';                  // SMTP username
	$mail->Password = '2SV';                // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->isHTML(true); 								  // Set email format to HTML
	
	$mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    foreach($emails as $email){
        
        $mail->setFrom($email, 'student');
        $mail->addAddress($email, 'ponsiva');              // Add a recipient
        $mail->addReplyTo($email, 'student');

    	$mail->Subject = $subject;
    	$mail->Body    = $message;

        if($mail->send()){
            $esMessage = true;
        }else{
    	    $esMessage = false;
        }
    }
    
    if($esMessage){
        echo'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Email sent successfully
            </div>';
        exit;
    }else{
        echo'<div class="alert alert-danger alert-dismissible"> 
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Email not sent to Please try again or type correct email!
            </div>';
        exit;           
    }

}


?>