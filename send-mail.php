<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  $mail = new PHPMailer(true);

  try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'zeelp2406@gmail.com'; 
    $mail->Password = 'qxtp guyx lelx idma';   
    $mail->Port = 587;

    // Email setup
    $mail->setFrom($email, $name);
    $mail->addAddress('zeelp2406@gmail.com'); 

    $mail->Subject = 'New message from portfolio contact form';
    $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    header("Location: thank-you.html");
    exit();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
