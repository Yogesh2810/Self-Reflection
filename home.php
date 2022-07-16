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

<div class="container mt-5 mb-5">
<h3 class="mt-2">Hello <?php echo $_SESSION["user_name"];?></h3>
<div class="row mt-5">
<div class="col-5 col-sm-3 bg-primary card text-white text-center p-3 m-2"><a class="text-white" href="module1.php"><p> Module 1 </p> <h3>Psychometric Test</h3></a></div>
<div class="col-5 col-sm-3 bg-primary card text-white text-center p-3 m-2"><a class="text-white" href="module2.php"><p> Module 2 </p> <h3>Calendar Analysis</h3></a></div>
<div class="col-5 col-sm-3 bg-primary card text-white text-center p-3 m-2"><a class="text-white" href="module3.php"><p> Module 3 </p> <h3>Fitness Activity Analysis</h3></a></div>
<div class="col-5 col-sm-3 bg-primary card text-white text-center p-3 m-2"><a class="text-white" href="module4.php"><p> Module 4 </p> <h3>Handwriting Analysis</h3></a></div>
<div class="col-5 col-sm-3 bg-danger card text-white text-center p-3 m-2"><a href="logout.php" class="text-white"><p> Account </p> <h3>Logout</h3></a></div>
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