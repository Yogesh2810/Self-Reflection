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
<div class="jumbotron text-center bg-white text-primary m-3">
<h2>Mark Calendar Events</h2>
</div>
<div class="row mb-3">
<?php
$conn=dbconn();
$sql="select * from calendar_events where user_id = '".$_SESSION["user_id"]."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="card col-10 col-sm-3 m-2">
    <div class="card-body">
    <h5 class="card-title">'.$row["summary"].'</h5>
    <p class="card-text">'.$row["description"].'<br> start date : '.$row["start_date"].'<br> end date : '.$row["end_date"].'</p>
    <p class="card-text">status : '.$row["status"].'</p>
    <a class="btn btn-block btn-warning m-2" href="changestatus.php?id='.$row["event_id"].'&status=snoozed">snooze</a>
    <a class="btn btn-block btn-secondary m-2" href="changestatus.php?id='.$row["event_id"].'&status=completed">Mark Complete</a>
    </div>
    </div>
    
    ';
  }
} else {
  echo "Nothing To Mark";
}
?>
</div>
<a class="btn btn-block btn-primary m-3" href="home.php">Home</a>
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