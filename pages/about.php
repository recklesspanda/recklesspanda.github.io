<?php include '../header.php'; ?>


<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">Stephen Ritchie</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="/index.php">Home</a></li>
        <li class="active"><a href="#about">About</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="/pages/contact.php">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>A little about me...</h1>
    <p>My name is Stephen Ritchie and I'm a computer science major at the University of Kentucky.  I've created this website to showcase the different projects I've worked on over the years, as well as keep a running blog about things I find interesting.</p>
    <p>I consider myself a developer and an enterpreneur.  I know I have a lot to learn from the people around me, so I'm always looking to connect with people who share some my values outlined below.</p>
    <ul>
      <li><p>Work hard.</p></li>
      <li><p>Give back to your community.</p></li>
      <li><p>Change the world.</p></li>
    </ul>
    <p>If you share any of these traits, let's connect.</p>
    <br>
    <p>I've also included a link to my resume below. I do my best to keep it updated, and on the top of the page you'll find the date of the latest revision.</p>
    <p>
      <a class="btn btn-lg btn-primary" href="/assets/StephenRitchie_Resume.pdf" role="button" target="_blank">Resume &raquo;</a>
    </p>
  </div>
</div> <!-- /container -->

<div class="container">
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Some of my mentors...</h1>
    <p>Besides my close family and friends, here are some people I've found who I look up to on a regular basis, and do my best to keep up with what they're up to. Feel free to check them out to see where I get a lot of my motivation from.</p>
    <p><a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Casey Neistat &raquo;</a></p>
    <p><a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Gerard Adams &raquo;</a></p>
    <p><a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Gary Vaynerchuck &raquo;</a></p>
  </div>
</div> <!-- /container -->

<?php include '../footer.php'; ?>
