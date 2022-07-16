<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();
$sql="select total_tasks,completed_tasks,snoozed_tasks,efficiency from module_2 where user_id = '".$_SESSION["user_id"]."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
      $count=1;
      $total=$row["total_tasks"];
      $completed=$row["completed_tasks"];
      $snoozed=$row["snoozed_tasks"];
      $efficiency=$row["efficiency"];
    }
  } else {
    $count=0;
  }
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
<div class="jumbotron bg-primary text-white text-center m-3">
<h1>Calendar Analysis</h1>
</div>

<div class="card m-2">
<div class="card-body text-center">
<?php
    if($count==0)
    {
        echo "<h5 class=\"card-title\"> No Calendar data Found !</h5>";
        echo "<p class=\"card-text\"> Upload the calendar file using Upload button given below. (calendar file has extension .ics)</p>";
        echo "<p class=\"card-text text-info\">Where to Find Calendar file ?<br> go to <a href=\"https://takeout.google.com\">Google Takeout Service</a> and Download Your Calendar Data.</p>";
        
    }
    if($count==1)
    {
        echo "<p> Out of <strong>$total Events</strong>, you have Completed <strong>$completed Events</strong>, and Snoozed <strong>$snoozed Events</strong>.</p>";
        echo "<h5 class=\"card-title\"> Efficiency = $efficiency %</h5>";
        if($efficiency>80)
            {
                echo "<h3>You are <strong style=\"color:green;\">Consistent</strong> In nature.</h3>";
            }
            else{
                echo "<h3>You are <strong style=\"color:red;\">Inconsistent</strong> In nature.</h3>";
            }
            echo "<a class=\"btn btn-block btn-warning mt-3\" href=\"markcal.php\">Mark Calendar Events</a>";
        
    }
?>
<a class="btn btn-block btn-danger mt-3" href="uploadcal.php">Upload Calendar File</a>
<a class="btn btn-block btn-success mt-3" href="home.php">Home</a>
</div>
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