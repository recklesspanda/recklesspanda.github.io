<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home-Stephen Ritchie Designs</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="js/scrollTo.js"></script>
  <script src="js/floatingNav.js"></script>
  <script src="js/skrollr.js"></script>
</head>
<body background="media/code.png">
<script>
function emailConfirmation() {
  alert("Thank you!");
}
</script>


  


  <div class="wrapper">

    <!-- HEADER -->
    <?php require 'header.html'; ?>


    <!-- CONTENT -->
    <div class="content">



      <div id="about">
        <br>
        <br>
        <br>
        <br>
        <h2>About</h2>
        <hr>
        <p>My name is Stephen Ritchie, and I'm a computer science major at the University of Kentucky.</p>
      </div>

      <div id="projects">
        <br>
        <br>
        <br>
        <h2 style="display:inline;">Projects</h2><h2 style="color:red; display:inline;"> -currently under construction!-</h2>
        <hr>
        <p>I currently maintain both a public and private portfolio showcasing some of my different skill and passions. You can find these projects below. Feel free to click on any of them to see more.</p>
        <h4>Business Portfolio</h4>
        <ul>
          <li><a href="#">Email Stock Report</a></li>
          <li><a href="#">Business 2</a></li>
          <li><a href="#">Business 3</a></li>
          <li><a href="#">Business 4</a></li>
        </ul>
        <h4>Private Portfolio</h4>
        <ul>
          <li><a href="#">Lexington Catholic High School Consultant Work</a></li>
          <li><a href="fashion/index.php">fashion</a></li>
          <li><a href="#">Private 3</a></li>
          <li><a href="#">Private 4</a></li>
        </ul>
      </div>

      <div id="blog">
        <br>
        <br>
        <br>
        <h2>Blog</h2>
        <hr>
        <p>Below is an archive of the daily thoughts of a millenial. The spectrum of topics varies greatly, and I try to post at least one new blog per week.</p>
        <?php require 'blog.php'; ?>
      </div>

      <div id="resume">
        <br>
        <br>
        <br>
        <h2>Resume</h2>
        <hr>
        <a href="media/StephenRitchie_Resume.pdf" target="_blank">Resume</a>
      </div>

      <div id="contact">
        <br>
        <br>
        <br>
        <h2>Contact</h2>
        <hr>
        <p>For business inquiries, please use the below email form to get in contact with me. Otherwise, you can use one of my other methods of contact below. You can also click any of the social media icons on the bottom of the screen to link off to my social media pages.</p>
        
        <form id="contact_form" action="send_email.php" method="post">
          <label for="name">Your name:</label><br>
          <input id="name" class="input" name="name" type="text" value="" style="width:100%;"><br>

          <label for="email">Your email:</label><br>
          <input id="email" class="input" name="name" type="text" value="" style="width:100%;"><br>

          <label for="message">Your message:</label><br>
          <textarea id="message" class="input" name="message" style="width:100%; height:200px;"></textarea><br>

          <button type="submit" onclick="emailConfirmation()">Submit</button>
        </form>
        <p>school - <a href="mailto:stephen.ritchie@uky.com" target="_top">stephen.ritchie@uky.edu</a></p>
        <p>personal - <a href="mailto:stephenfritchie@gmail.com" target="_top">stephenfritchie@gmail.com</a></p>
        <p>phone - <a href="tel:18595765482">859.576.5482</a></p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- FOOTER -->
    <?php require 'footer.html'; ?>

    

  </div>
</body>
</html>



