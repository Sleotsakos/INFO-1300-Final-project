<!DOCTYPE html>
<html>
  <?php include("includes/header.php"); ?>
  <body id = "About">
  <!-- Header -->
    <header class="header">
      <div class="csscontainer1">
            <img src="images/teamlogo.png" alt="teamlogo" id="teamlogo">
            <h1 class="title">About Us</h1>
            <img src="images/logo.png" alt="logo" id="logo">
        </div>
    </header>
    <?php include("includes/navigation.php"); ?>

    <!-- Beginning of page content -->
    <div class="aboutcontainer">
      <div class="howplayed">
        <h1 class="contenttitle" >About the Competition</h1>
        <p>Hope to learn about the game rules check out this video!</p>
      </div>
      <video  id="rulesvideo" controls>
        <source src="media/rules.mp4" type="video/mp4">
        The Rules
      </video>
      <div id="theanime">
        <h1 class="contenttitle" >Our Story: Animation Series</h1>
        <p>
          We have a animation series depicting out lives!<br/>
          Check it out to know more.<br/>
        </p>
      </div>

      <video  id="animetrailer" controls>
        <source src="media/anime_trailer.mp4" type="video/mp4">
          RoboMasters Anime Trailer
      </video>
      <!--link to videos from HKUST Robmaster Team -->
      <a href="http://bestanime.top/watch/robomasters-the-animated-series-episode-001.html?s=6&r="
      id ="animation_link" target="_blank">
        Go watch the full episodes of our animation
      </a>


      <h1 class="contenttitle" id="whatwedo">What We Do</h1>
        <p id="dodescription">
          Building up competition robots from scratch. <br/>
          We are an advanced robotics team in Hong Kong University of Science
          and Technolgy <br/>
          With all members from software, mechanic, to electrical engineer,<br/>
          we build up efficent and competitive robots and unbreakable friendship.
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
