<?php
$name = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
?>

<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "members">
  <!-- Header -->
    <header class="header">
      <div class="csscontainer1">
            <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
            <h1 class="title"> Contact Us </h1>
            <img src="images/logo.png" alt="logo" id="logo">
        </div>
    </header>
    <?php include("includes/navigation.php"); ?>
    <!-- Beginning of page content -->
<body>
  <article id="submission">
    <h1>Message Submitted</h1>

    <p id="msline1">Thank you,  <?php echo($name); ?>. </p>
    <p id="msline2">Your message, "<?php echo($subject); ?>" has been received and we will
      respond to <?php echo($email); ?> as soon as possible! </p>
  </article>
</body>
