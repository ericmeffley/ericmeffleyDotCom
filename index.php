<?php
	include 'functions.php';

	$test = "";
	$error = "";
	$successMessage = "";

	if(isset($_POST['submit'])){
		mailForm();
	};
?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eric Meffley Developer.Designer.Thinker Lima, Ohio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=1.11" />
    
  </head>

  <body>
      <header class="site-header">
          <div class="site-header__logo">
              <div class="site-header__logo-text">ERIC MEFFLEY</div>
          </div>

            <div class="site-header__menu-icon" onclick="showMobileMenu()">
              <div class="site-header__menu-line-top"></div>
              <div class="site-header__menu-line-middle"></div>
              <div class="site-header__menu-line-bottom"></div>
            </div>
            <div class="site-header__mobile-menu" id="MobileMenu">
              <ul>
                <li><a href="https://github.com/ericmeffley" target="_blank">Github</a></li>
                <li><a href="http://www.linkedin.com/in/eric-meffley-8588361" target="_blank">Linkedin</a></li>
              </ul>
            </div>

            <div class="site-header__menu-content">
            <nav class="primary-nav">
              <ul>
                <!-- <li><a href="https://twitter.com/ericmeffley" target="_blank">Twitter</a></li> -->
                <li><a href="https://github.com/ericmeffley" target="_blank">Github</a></li>
                <li><a href="http://www.linkedin.com/in/eric-meffley-8588361" target="_blank">Linkedin</a></li>
              </ul>
            </nav>
          </div><!-- /__menu-content -->
      </header>

		<div><?php echo $test.$error.$successMessage ?></div>
		<!-- <div><?php echo'<div class="message message__green"><p>Thank you for your message we\'ll respond soon.</p></div>' ?></div> -->

    <div class="section section__orange">
      <div  class="wrapper">
       
          <!-- <p class="site-intro-heading">Software Design and Development</p> -->
          <div class="site-header__headline">SOFTWARE DEVELOPER</div>      
      </div>
    </div>

  <!-- SECTION CONTAINER ::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="section">
      <div class="wrapper">
        <div>
          <p class="section__header">Thought Catcher</p>
          <p>A ToDo(esque) personal project built with a MySQL and PHP backend. The app features a secure login system with password reset.</p>
        </div>
          <picture>
            <img src="images/thoughts-app.png" class="margin-top">
          </picture>
          <div>
            <a href="http://thoughts.ericmeffley.com" class="btn" target="_blank">Live Demo</a>              
          </div>
      </div>
    </div>

  <!-- SECTION CONTAINER ::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="section section__light-brown">
      <div class="wrapper">
         <div>
            <p class="section__header">Apply Online</p>
            <p>This is a web application built for a client to allow their applicants an easy to complete application process. The data is then written to a MySQL database and emailed to the specified company representative.</p>
            
          </div>
        <picture>
          <img src="images/apply-app-v1.png"/>
        </picture>
        <div>
          <a href="http://apply.ericmeffley.com" class="btn" target="_blank">Live Demo</a>
        </div>
      </div>
    </div>

  <!-- SECTION CONTAINER ::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="section">
      <div class="wrapper">
        <div>
        <p class="section__header">Weather</p>
        <p>Weather is a simplistic web application that uses a weather API to process a JSON file using a PHP backend then displaying the users request.</p>
        
        </div>
        <picture>
          <img src="images/weather-app.png"/ class="margin-top">
        </picture>
        <div>
          <a href="http://weather.ericmeffley.com" class="btn" target="_blank">Live Demo</a>
        </div>

      </div>
    </div>

  <!-- CONTACT SECTION ::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="section section__form">
      <div class="wrapper wrapper__form">
        <p class="section__header">Connect</p>
          <form method="post">
            <fieldset>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name">
              
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
            
                <label for="message">Message</label>
                <textarea name="message" rows="3" placeholder="Message"></textarea>
           
                <button type="submit" name="submit">Send</button>
            </fieldset>
          </form>
      </div>
    </div>

    <div class="site-footer__copyright">
      <p><small>&copy;2017</small> www.ericmeffley.com</p>
    </div>
    <script src="scripts/MobileMenu.js"></script>
  </body>

</html>

