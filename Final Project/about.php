<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "About">
  <!-- Header -->
    <header class="header">
      <div class="csscontainer1">
            <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
            <h1 class="title"> About Us </h1>
            <img src="images/logo.png" alt="logo" id="logo">
        </div>
    </header>
    <?php include("includes/navigation.php"); ?>

    <!-- Beginning of page content -->
  <div class="aboutcontainer">
    <h1 class="contenttitle" id="theanime"> The Anime:</h1>
    <video  id="animetrailer" controls>
      <source src="media/anime_trailer.mp4" type="video/mp4">
      RoboMasters Anime Trailer
    </video>
    <h1 class="contenttitle" id="howplayed"> How it's Played:</h1>
    <video  id="rulesvideo" controls>
      <source src="media/rules.mp4" type="video/mp4">
      The Rules
    </video>
    <h1 class="contenttitle" id="whatwedo"> What We Do: </h1>
      <p id="dodescription"> "(Description of what team does to prepare for competitions,
        build robots,...etc.)" </p>
    <div id="slideshow1">
    <div id="image_container1">
      <!--images taken by RoboMasters HKUST-->
      <img id="current_img1" src="images/slideshow1.11.jpg">
    </div> <!-- end of image_container div-->

    <div id="button_container1">
      <button class="slide_button" id="left1" >Previous</button>
      <button class="slide_button" id="right1" >Next</button>
    </div> <!-- end of button_container div -->
  </div> <!--End Slideshow div -->

  <!--<h1 class="contenttitle" id="competitions"> Competitions: </h1>
    <p id="compdescription"> "(Description of competitions, requirements, locations,
      preliminaries,...etc.)" </p>
  <div id="slideshow">
  <div id="image_container">
    <! images taken by RoboMasters HKUST-->
    <!--<img id="current_img" src="images/tower1.png">
  </div> <! end of image_container div -->

  <!--<div id="button_container">
    <button class="slide_button" id="left" >Previous</button>
    <button class="slide_button" id="right" >Next</button>
  </div> <! end of button_container div -->
<!--</div> <!End Slideshow div -->
  </body>
  </div> <!-- End of aboutcontainer -->
</html>
