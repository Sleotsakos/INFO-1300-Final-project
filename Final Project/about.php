<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "About">
  <script src="scripts/navBar2.js" type="text/javascript"></script>
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
    <div class="aboutcontainer">
      <div class="howplayed">
        <h1 id="AboutComp">About the Competition</h1>
        <p id="CompText">Check out this video to learn about the competition rules!</p>
      </div>
      <video  id="rulesvideo" controls>
        <source src="media/rules.mp4" type="video/mp4">
        The Rules
      </video>
      <div id="theanime">
        <h1 class="contenttitle">Our Story: Animation Series</h1>
        <p class="AboutText">
          We have an animation series depicting out lives! Check it out to learn more about the team.
        </p>
      </div>
      <video  id="animetrailer" controls>
        <source src="media/anime_trailer.mp4" type="video/mp4">
          RoboMasters Anime Trailer
      </video>
      <!--link to videos from HKUST Robmaster Team -->
      <a href="http://bestanime.top/watch/robomasters-the-animated-series-episode-001.html?s=6&r="
      id="animation_link" target="_blank">
        Watch the full episodes of our anime!
      </a>
      <h1 class="contenttitle" id="whatwedo">What We Do</h1>
        <p id="dodescription">
          We are an advanced robotics team in Hong Kong University of Science and Technolgy. We build competition robots from scratch. With members ranging from software to mechanical to electrical engineers,
          we build efficent and competitive robots and unbreakable friendships.
        </p>
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
    </div> <!-- End of aboutcontainer -->
  </body>
</html>
