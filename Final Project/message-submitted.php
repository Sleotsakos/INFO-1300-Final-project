<?php
session_start();
$name = $_SESSION["name"];
$subject = $_SESSION["subject"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id= "members">
    <header class="header">
      <div class="csscontainer1">
        <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
        <h1 class="title">Contact Us</h1>
        <img src="images/logo.png" alt="logo" id="logo">
      </div>
    </header>
    <?php include("includes/navigation.php"); ?>
    <article id="submission">
    <h1 id="messagesub">Message Submitted</h1>
      <p id="msline1">Thank you, <?php echo($name); ?>.</p>
      <p id="msline2">Your message, "<?php echo($subject); ?>," has been received and we will
        respond to <?php echo($email); ?> as soon as possible!</p>
    </article>
  </body>
</html>
