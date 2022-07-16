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
<div class="row mt-5 mb-5" >
<div class="col-1 col-sm-4"></div>

<div class="col-10 col-sm-4 card text-center">
<form action="upload4.php" method="post" enctype="multipart/form-data">
<br> <h5 class="card-title">How to take handwriting sample ?</h5>
<ol>
<li>Take a blank sheet of paper</li>
<li>Paper sheet should be completely blank, no lines should be on paper for a good result</li>
<li>Write the word '<strong>Apple</strong>' in your natural handwriting on the paper</li>
<li>Click a close up, and clear picture of written word, and upload it below</li>
<li><strong>Black and white images are best supported </strong></li>
</ol>
<br>
<h5 class="card-title">
Select Handwriting sample image To upload:</h5>
<br>
  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>
  <br>
  <input class="btn btn-block btn-danger" type="submit" value="Upload" name="submit">
</form>

</div>

<div class="col-1 col-sm-4"></div>
</div>
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