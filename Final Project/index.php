<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "Home">
    <header class="header">
      <div class="csscontainer1">
        <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
        <h1 class="title"> Home </h1>
        <img src="images/logo.png" alt="logo" id="logo">
      </div>
    </header>
    <?php include("includes/navigation.php"); ?>
    <!-- Beginning of page content -->
    <div class="homecontainer">
      <h1 class="contenttitle">RoboMaster HKUST</h1>
      <video  id="homevideo" controls>
        <source src="media/promo_video.mp4" type="video/mp4">
      </video>
      <img src ="images/poster.jpg" alt = "poster image" id="poster">
    </div>
  </body>
</html>
