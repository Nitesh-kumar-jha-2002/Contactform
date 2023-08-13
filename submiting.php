<?php
include ("config.php");
require "mail.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Validation
    if (empty($fullname) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        header("Location: success_page.php");
    } else {
        // Save to database
        $ip = $_SERVER["REMOTE_ADDR"];
        $timestamp = date("Y-m-d H:i:s");
        $sql = "INSERT INTO contact_form (fullname, phone, email, subject, message, ip, timestamp)
                VALUES ('$fullname', '$phone', '$email', '$subject', '$message', '$ip', '$timestamp')";

        if ($conn->query($sql) === TRUE) {
            // Send email notification

            if(send_mail("test@techsolvitservice.com", "Form Submission", "Form has been Submitted")){
               echo " ";
            }
            else{
                echo " ";
            }
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
include("index.php");
?>