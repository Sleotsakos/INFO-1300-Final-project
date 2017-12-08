<?php
$formValid= $nameValid && $emailValid && $subjectValid && $msgValid;
$submit = $_REQUEST ["submit"];
if(isset($submit)){
  $name = $_REQUEST ["name"];
  if(!empty($name)){
  $nameValid = true;
  } else {
  $nameValid = false;
  }
  if ($formValid) {
    header ("Location: message-submitted.php");
    return;
  }
} else {
  $nameValid = true;
}
if(isset($submit)){
  $email = $_REQUEST ["email"];
  if(!empty($email)){
  $emailValid = true;
  } else {
  $emailValid = false;
  }
  if ($formValid) {
    header ("Location: message-submitted.php");
    return;
  }
} else {
  $emailValid = true;
}
if(isset($submit)){
  $subject = $_REQUEST ["subject"];
  if(!empty($subject)){
  $subjectValid = true;
  } else {
  $subjectValid = false;
  }
  if ($formValid) {
    header ("Location: message-submitted.php");
    return;
  }
} else {
  $subjectValid = true;
}
if(isset($submit)){
  $msg = $_REQUEST ["msg"];
  if(!empty($msg)){
  $msgValid = true;
  } else {
  $msgValid = false;
  }
  if ($formValid) {
    header ("Location: message-submitted.php");
    return;
  }
} else {
  $msgValid = true;
}
?>
<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "contact">
    <script src="scripts/navBar6.js" type="text/javascript"></script>
  <!-- Header -->
    <header class="header">
      <div class="csscontainer1">
        <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
        <h1 class="title">HKUST RoboMasters</h1>
        <img src="images/logo.png" alt="logo" id="logo">
      </div>
    </header>
    <?php include("includes/navigation.php"); ?>
    <!-- Beginning of page content -->
    <div class = "contactInfoContainer">
      <h3>
        Contact Information:
      </h3>
      <p>
        Email: robomasterhkust@gmail.com <br/>
        Address: 7B, Shaw House, Clear Water Bay Road, Sai Kung, Kowloon, Hong Kong <br/>
         地址： 香港九龍西貢 清水灣道220號地段 邵氏大樓7B
      </p>
    </div>
    <div class = "contactContainer">
      <form action="contact.php" method="post" novalidate>
        <label>Name:</label>
        <input type="text" name = "name" placeholder="(required)" required>

        <label>Email:</label>
        <input type="email" name="email" placeholder="(required)" required>

        <label>Company Name:</label>
        <input type="text" name = "company" placeholder="your organization (if applicable)">

        <label>Phone: </label>
        <input type="text" name = "phone" placeholder="ex) +1-123-456-7890">

        <label>Message Subject:</label>
        <input list="subject_lst" name = "subject" placeholder="(required)" required>
          <datalist id="subject_lst">
            <option>Sponsor and Advertisement</option>
            <option>Join as event holder</option>
            <option>Rules Information</option>
            <option>Team Information</option>
            <option>Other...</option>
          </datalist>

        <label>Message:</label>
          <textarea name = "msg" placeholder = "Tell us about..." required>
          </textarea>

        <input type="submit" value="Submit">
      </form>
     </div>
  </body>
</html>
