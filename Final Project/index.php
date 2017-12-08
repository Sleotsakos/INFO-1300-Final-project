<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "Home">
    <script src="scripts/navBar1.js" type="text/javascript"></script>
    <header class="header">
      <div class="csscontainer1">
        <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
        <h1 class="title">HKUST RoboMasters</h1>
        <img src="images/logo.png" alt="logo" id="logo">
      </div>
    </header>
    <?php include("includes/navigation.php"); ?>
    <!-- Beginning of page content -->
    <div class="homecontainer">
      <video  id="homevideo" controls>
        <source src="media/promo_video.mp4" type="video/mp4">
      </video>
      <img src ="images/poster.jpg" alt = "poster image" id="poster">
    </div>
  </body>
</html>
