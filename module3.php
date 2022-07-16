<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();
$sql="select * from module_3 where user_id ='".$_SESSION["user_id"]."'";
$result = mysqli_query($conn, $sql);
$count= mysqli_num_rows($result); 
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
<div class="jumbotron bg-primary text-white text-center m-3">
<h1>Fitness Activity Analysis</h1>
<h5>And Prediction</h5>
</div>
<div class="card text-center" >
<div class="card-body">
<?php
if($count==0)
{
    echo "<h5 class=\"card-title\"> No Fitness data Found !</h5>";
    echo "<p class=\"card-text\"> Upload the Fitness data file using Upload button given below. (Fitness data file has extension .csv)</p>";
    echo "<p class=\"card-text text-info\">
    Where to Find Fitness file ?<br>
     go to <a href=\"https://takeout.google.com\">Google Takeout Service</a> and Download Your Fitness Data.
     </p>";
    echo "<h5 class=\"card-title\"> You will need to upload two (.csv) files to know results. </h5>";
    
}
else
{
  $row = mysqli_fetch_assoc($result);
  $distance_1=$row["distance_1"];
  $distance_2=$row["distance_2"];
  $avg_speed_1=$row["avg_speed_1"];
  $avg_speed_2=$row["avg_speed_2"];
  $steps_1=$row["steps_1"];
  $steps_2=$row["steps_2"];
  $minutes_1=$row["minutes_1"];
  $minutes_2=$row["minutes_2"];
  $calories_1=$row["calories_1"];
  $calories_2=$row["calories_2"];
  $peak_1=$row["peak_1"];
  $peak_2=$row["peak_2"];
  echo "<h5 class=\"card-title\"> Following Data was Found according to files you've uploaded !</h5>";
  echo '
  <table class="table mb-3 ">
  <thead class="thead-dark">
  <tr> <th> </th> <th> Result</th> </tr>
  </thead>
  <tbody>
  <tr> <td class="text-center">Distance You Cover in a Day</td> <td> <strong>'.minimum($distance_1,$distance_2).' To '.maximum($distance_1,$distance_2).'</strong> meter</td> </tr>
  <tr> <td class="text-center">Your Average Speed</td> <td> <strong>'.minimum($avg_speed_1,$avg_speed_2).' To '.maximum($avg_speed_1,$avg_speed_2).'</strong> meter/second</td> </tr>
  <tr> <td class="text-center">Your Daily Step Count</td> <td> <strong>'.minimum($steps_1,$steps_2).' To '.maximum($steps_1,$steps_2).'</strong> Steps</td> </tr>
  <tr> <td class="text-center">Minutes you spent Walking in a Day</td> <td> <strong>'.minimum($minutes_1,$minutes_2).' To '.maximum($minutes_1,$minutes_2).'</strong> Minute</td> </tr>
  <tr> <td class="text-center">Calories Burnt in a Day</td> <td> <strong>'.minimum($calories_1,$calories_2).' To '.maximum($calories_1,$calories_2).'</strong> Kcal</td></tr>
  <tr> <td class="text-center">Peak Workout Hour 1 </br> <strong>(Time in 24 Hour Format)</strong></td> <td> '.$peak_1.'</td> </tr>
  <tr> <td class="text-center">Peak Workout Hour 2 </br> <strong>(Time in 24 Hour Format)</strong></td> <td> '.$peak_2.'</td> </tr>
  
  </tbody>
  </table>
  ';
  echo '
  <table class="table mb-3 ">
  <thead class="thead-dark ">
  <tr>  <th> What Does above Data Say about you ?</th> </tr>
  </thead>
  <tbody>
  <tr><td>
  <ul>
  <li><p> According to <a href="https://www.healthline.com/health/how-many-steps-a-day#1">Healthline</a>, A person should walk about 10,000 steps per day for a healthy lifestyle.
  <br> You walk almost <strong>'.  maximum($steps_1,$steps_2) /10000 *100 .'</strong> % for this Goal.
  </p></li>
  <li><p> According to <a href="https://www.healthline.com/health/fitness-exercise/how-many-calories-do-i-burn-a-day#weight-loss">Healthline</a>, A person should a 500 to 1,000 Kcal calorie deficit each day for a healthy lifestyle. You can do this all through diet, exercise, or a combination of the two.
  <br> You Complete this Goal almost <strong>'.  maximum($calories_1,$calories_2) /1000 *100 .'</strong> % for this Goal.
  </p></li>
  
  </ul>
  </td><tr>
  </tbody>
  </table>
  ';
}
?>
<a class="btn btn-block btn-danger mt-3" href="uploadfit.php">Upload Fitness data Files</a>
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