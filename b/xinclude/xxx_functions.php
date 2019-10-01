<?php
//require 'phpmailer/PHPMailerAutoload.php';
	// This file is the place to store all basic functions

	function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
       
	function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
function sendit($to_id,$message,$subject){
	 
		 $mai= mysql_query("SELECT * FROM m_mail ") or die(mysql_error());
		 
		 $mr = mysql_fetch_array($mai);
		 

          
                    $email =  $mr['m_email'];                    
                   // $password = 'admin';
                   

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = $mr['m_host'];

             
                  
            $mail->Port = $mr['m_port'];

                    $mail->SMTPSecure = $mr['m_secure'];

                    $mail->SMTPAuth = true;

                    $mail->Username = $mr['m_username'];

                    $mail->Password = $mr['m_d'];

                  // $mail->setFrom('from@example.com', 'First Last');

                 $mail->setFrom($email, $mr['m_header']);

                 //   $mail->addReplyTo('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                   if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!");</script>';
                    }
	 }
	 
	
?>