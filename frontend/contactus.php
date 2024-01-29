<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $emailSubject = "Thank You for Joining IT Discover Hub - Welcome to the Tech Community!";
    $emailMessage = "Dear Subscriber,<br>

Thank you for contacting us to IT Discover Hub! We're thrilled to welcome you to our tech community. 🚀<br>

At IT Discover Hub, we're passionate about bringing you the latest news, updates, and insights from the ever-evolving world of technology. Your curiosity and enthusiasm for tech make our community vibrant and dynamic.

Stay tuned for exciting content, informative articles, and engaging discussions. Whether you're a seasoned tech enthusiast or just getting started, there's something here for everyone.

If you have any specific topics you'd like us to cover or any feedback to share, feel free to reach out. We value your input and are here to make your experience with IT Discover Hub enjoyable and enriching.

Once again, thank you for being a part of our community. We look forward to sharing the journey of discovery and innovation with you!<br><br>

Best regards,<br>
The IT Discover Hub Team";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'itdiscoverhub@gmail.com';
        $mail->Password   = 'gajb qcyi hgtn scau';   // created via google app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('itdiscoverhub@gmail.com', 'IT Discover Hub');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailMessage;

        // Send email
        $mail->send();

        echo "<script>alert(Thank you for subscribing! You will receive an email with the latest news shortly.);</script>";
        header("location: contact-us.html");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: contact-us.html");
    }
} else {
    echo "Invalid Request";
}
