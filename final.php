<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$score1=score_1($_SESSION["user_id"]);
$score2=score_2($_SESSION["user_id"]);
$score3=score_3($_SESSION["user_id"]);
$score4=score_4($_SESSION["user_id"]);
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
<h4> Your results for every seperate Module are as follows :</h4>

<div class="row">
<div class="col-10 col-sm-5 m-2 card"><div class="card-body text-dark"><h5 class="card-title">Psychometric Test<h5></div><div class="card-body"><?php echo $score1;?></div></div>
<div class="col-10 col-sm-5 m-2 card"><div class="card-body text-dark"><h5 class="card-title">Calendar Analysis<h5></div><div class="card-body"><?php echo $score2;?></div></div>
<div class="col-10 col-sm-5 m-2 card"><div class="card-body text-dark"><h5 class="card-title">Fitness Activity Analysis<h5></div><div class="card-body"><?php echo $score3;?></div></div>
<div class="col-10 col-sm-5 m-2 card"><div class="card-body text-dark"><h5 class="card-title">Handwriting Analysis<h5></div><div class="card-body"><?php echo $score4;?></div></div>

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