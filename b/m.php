<?php
ob_start();
require "lib/load.php";
$sen_name = "";
$sen_email = "";
$rec_email = "";
$email_sub = "";
$box_msg = "";
$x1 = $_POST['x1'];
$x2 = $_POST['x2'];
$x3 = $_POST['x3'];
$x4 = $_POST['x4'];
$x5 = $_POST['x5'];
$x6 = $_POST['x6'];
$x7 = $_POST['x7'];
// Retrieving & storing user's submitted information
if (isset($_POST['x2'])) {
    $sen_name = $_POST['x2'];
}
if (isset($_POST['x6'])) {
    $sen_email = $_POST['x6'];
}
//if (isset($_POST['rec_email'])) {
    $rec_email = 'supply@efuel.com.ng';
//}
//if (isset($_POST['email_sub'])) {
    $email_sub = 'from home page';
//}
if (isset($_POST['box_msg'])) {
    $box_msg = $_POST['box_msg'];
}
if (empty($x2) || empty($x3)|| empty($x4)|| empty($x5)|| empty($x6) || empty($x7) ) {
    header("location: index?status=fil".'#support');
exit();
}
/*
if (isset($_FILES) && (bool) $_FILES) {
    $files = array();
    $ext_error = "";
    // Define allowed extensions
    $allowedExtentsoins = array('pdf', 'doc', 'docx', 'gif', 'jpeg', 'jpg', 'png', 'rtf', 'txt','zip');
    foreach ($_FILES as $name => $file) {
        if (!$file['name'] == "") {
            $file_name = $file['name'];
            $temp_name = $file['tmp_name'];
            $path_part = pathinfo($file_name);
            $ext = $path_part['extension'];

            // Checking for extension of attached files
            if (!in_array($ext, $allowedExtentsoins)) {
                 $ero = "Sorry!!! ." . $ext ."Extension is not allowed!!! Try Again.";
				 header("location: index?stus=".$ero.'#support');
                $ext_error = FALSE;
				}else{
                $ext_error = True;
            }

            // Store attached files in uploads folder
            $server_file = dirname(__FILE__) . "/uploads/" . $path_part['basename'];
            move_uploaded_file($temp_name, $server_file);
            array_push($files, $server_file);
        }
    }
} */

    $mail = new PHPMailer();
    $mail->IsSMTP();
   // $mail->Mailer = "smtp";
    $mail->Host = "mail.efuel.com.ng";
    $mail->Port = 465;

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // SMTP username (e.g xyz@gmail.com)
    $mail->Username = 'info@efuel.com.ng';

    // SMTP password
    $mail->Password = 'C2]heWHB6S5L';

    // Enable encryption, 'tls' also accepted
  $mail->SMTPSecure = 'ssl'; 
 //$mail->SMTPSecure = 'STARTTLS';

    // Sender Email address
    $mail->From = $sen_email;

    // Sender name
    $mail->FromName = $sen_name;

    // Receiver Email address
	//$accou ='support@bitmama.info';
    $mail->addAddress($rec_email);
	//$mail->addAddress($accou);

    $mail->Subject = $email_sub;
    //$mail->Body = $box_msg;
	 $box_ms ='Liters: '. $x1 .'<br> Customer Name: ' .$sen_name .'<br> type of product: ' .$x3 .'<br> type of customer:' .$x4 .'<br>Phone Number: ' .$x5 .'<br> Customer Email: ' .$sen_email .'<br> Customer Address: '. $x7 ;
   
		 $mail->msgHTML($box_ms);
    
    // Sending message and checking status
    if (!$mail->send()) {
header("location:index?status=err".'#support');
exit();
	// echo "Sorry!!! Your Order  was not accepted. Mailer error:  " . $mail->ErrorInfo ;
 }else{
header("location:index?status=succ".'#support');
 } 
 ob_end_flush(); 
 ?>