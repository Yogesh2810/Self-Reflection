<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
?>
<html>
<head><?php bootstrap();?>
<style>

</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Self Reflection</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
  </div>
</nav>

<div class="container">
<br>
<a class="btn btn-danger ml-3" href="ptest.php">Begin Test</a>
<br><br>
<h2 class="text-primary"><strong>Instructions for the Psychometric test:</strong></h2><br>
<ul><li>Total number of self-assessment questions is 50.</li><br>
<li>Mark the answers by encircling the right number. No answer can be left blank.</li><br>
<li>There are no right or wrong answers. There is no negative marking.</li><br>
<li>Each question consists of Five options You have to rate yourself on a scale of 5 points depending on which point expresses you more accurately.</li><br>
<li>Select whichever number best reflects about you. <b>Be Honest</b></li></ul><br><br>

<h2 class="text-primary"><strong>The interpretation of the numbers is as follows:</strong></h2><br>
<ol><li> I Strongly resemble the description.</li><br>
<li>I Closely resemble the description.</li><br>
<li>Neutral.</li><br>
<li>I Somewhat resemble the description.</li><br>
<li>I Strongly disagree with the description.</li></ol><br>
<br>
<a class="btn btn-danger ml-3" href="ptest.php">Begin Test</a>
<br><br>
</div>
<footer class="bg-dark text-white text-center">
<p>Designed and Developed By</p>
<ul>
<li>Shubhada Vilas Bhand</li>
<li>Tejal Santosh Jain</li>
<li>Shraddha Sandip Khalate</li>
<li>Yogesh Satish Ranode
</li>
</ul>
</footer>
</body>
</html>