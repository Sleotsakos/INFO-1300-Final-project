<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "contact">
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
    <div class = "container">
      <form action="message-submitted.php" target="_blank" method="post">
        <label>Name:</label>
        <input type="text" name = "name" placeholder="(required)" required>

        <label>Email:</label>
        <input type="email" name="email"required placeholder="(required)" required>

        <label>Company Name:</label>
        <input type="text" name = "company" placeholder="your organization (if applicable)">

        <label>Phone: </label>
        <input type="text" name = "phone" placeholder="ex) +1-123-456-7890">

        <label>Message Subject:</label>
        <input list="subject_lst" name = "subject" placeholder="(required)"required>
          <datalist id="subject_lst">
            <option>Sponsor and Advertisement</option>
            <option>Join as event holder</option>
            <option>Rules Information</option>
            <option>Team Information</option>
            <option>Other...</option>
          </datalist>

        <label>Message:</label>
        <textarea name = "msg" placeholder="Tell Us About..." required>
        </textarea>

        <input type="submit" value="Submit">
      </form>
     </div> 

  </body>
</html>
