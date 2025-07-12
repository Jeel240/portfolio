<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize inputs
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  // Email settings
  $to = "zeelp2406@gmail.com"; 
  $subject = "New message from portfolio contact form";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  // Send mail
  if (mail($to, $subject, $body, $headers)) {
    header("Location: thank-you.html");
    exit();
  } else {
    echo "<script>alert('Message sending failed. Please try again.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact | Jeel Patel</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h1>Jeel Patel</h1>
      <p class="tagline">Web Developer & Designer</p>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="assets/files/MyResume.pdf" target="_blank">Resume</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <section class="contact-section">
        <h2 class="section-title">📬 Get in Touch</h2>
        <p>If you'd like to collaborate, hire me, or just say hello — feel free to drop a message!</p>

        <div class="contact-container">
          <!-- Contact Form -->
          <form action="send-mail.php" method="post" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
          </form>

          <!-- Contact Info -->
          <div class="contact-info">
            <h3>📍 Location</h3>
            <p>Gujarat, India</p>

            <h3>📧 Email</h3>
            <p><a href="mailto:zeelp2406@gmail.com">zeelp2406@gmail.com</a></p>

            <h3>🌐 Social</h3>
            <p>
              <a href="https://www.linkedin.com/in/jeel-patel-9b409025a/">LinkedIn</a> |
              <a href="https://github.com/Jeel240">GitHub</a> |
              <a href="#">Portfolio</a>
            </p>
          </div>
        </div>
      </section>
    </main>
  </div>

</body>
</html>
