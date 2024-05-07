<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for SMTP
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'luckysingh49946@gmail.com';            // SMTP username
        $mail->Password = 'onyb teht yjlw jpbh';                // SMTP password
        $mail->SMTPSecure = PHPMailer::PHPMailer::ENCRYPTION_SMTPS;       // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        // Sender and recipient details
        $mail->setFrom('luckysingh49946@gmail.com', 'Mailer');        // Sender's email address and name
        $mail->addAddress('lk502295@gmail.com', 'Joe User'); // Recipient's email address and name (optional)

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact form submission';            // Email subject
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message"; // Email body (HTML)

        // Send email
        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request.';
}
?>


//
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for SMTP
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'luckysingh49946@gmail.com';            // SMTP username
        $mail->Password = 'onyb teht yjlw jpbh';                // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        // Sender and recipient details
        $mail->setFrom('luckysingh49946@gmail.com', 'Mailer');        // Sender's email address and name
        $mail->addAddress('lk502295@gmail.com', 'Joe User'); // Recipient's email address and name (optional)

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact form submission';            // Email subject
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message"; // Email body (HTML)

        // Send email
        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request.';
}
?>