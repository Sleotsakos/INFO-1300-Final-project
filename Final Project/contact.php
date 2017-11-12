<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "Home">
    <h1> Contact Us </h1>
    <?php include("includes/navigation.php"); ?>
    <div class = "container">
      <form action="" target="_blank" method="post">
        <label>Name:</label>
        <input type="text" name = "name" placeholder="Name..." required>

        <label>Email:</label>
        <input type="email" name="email"required placeholder="your email">

        <label>Company Name:</label>
        <input type="text" name = "company" placeholder="your organization (if applicable)">

        <label>Phone: </label>
        <input type="text" name = "phone" required
        placeholder="for example +1-123-456-7890">

        <label>Contact Main Purpose</label>
        <input list="subject_lst" name = "subj">
          <datalist id="subject_lst">
            <option>Sponsor and Advertisement</option>
            <option>Join as event holder</option>
            <option>Detail Info about Rules</option>
            <option>Other</option>
          </datalist>

        <label>Message You Want to Leave</label>
        <textarea name = "msg" placeholder="Tell Us About...">
        </textarea>

        <input type="submit" value="Submit">
      </form>
  </div>

  </body>
</html>
