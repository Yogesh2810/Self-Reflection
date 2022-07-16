<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();

$target_dir = "Fitness/";
$temp1 = explode(".", $_FILES["fileToUpload1"]["name"]);
$temp2 = explode(".", $_FILES["fileToUpload2"]["name"]);
$newfilename1 = round(microtime(true)) . '1.' . end($temp1);
$newfilename2 = round(microtime(true)) . '2.' . end($temp2);
$target_file1 = $target_dir . $newfilename1;
$target_file2 = $target_dir . $newfilename2;
$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$msg="";

// Allow certain file formats
if($imageFileType1 != "csv"  || $imageFileType2 != "csv" ) {
  $msg = "Sorry, only csv files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $msg = $msg." Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
    $msg = $msg . " The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
  } else {
    $msg = $msg . "Sorry, there was an error uploading your file.";
  }
  
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
    $msg = $msg . " The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
  } else {
    $msg = $msg . "Sorry, there was an error uploading your file.";
  }
}

$sql="delete from module_3 where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="delete from fitness_attributes where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="insert into module_3(user_id,file_1,file_2) values ('".$_SESSION["user_id"]."','$newfilename1','$newfilename2')";
mysqli_query($conn,$sql);

$file= fopen('Fitness/'.$newfilename1,'r');
$size = filesize( 'Fitness/'.$newfilename1 ); 
$csv_data=fread($file,$size);
$lines = explode("\n", $csv_data);
for($i=1;$i<=96;$i++)
{
    $row = explode(",", $lines[$i]);
    $start_time=$row[0];
    $end_time=$row[1];
    $calories='0'.$row[2];
    $distance='0'.$row[3];
    $avg_speed='0'.$row[4];
    $steps='0'.$row[7];
    $minutes='0'.$row[8];
    $sql="insert into fitness_attributes values ('".$_SESSION["user_id"]."','$newfilename1','$start_time','$end_time',$calories,$distance,$avg_speed,$steps,$minutes)";
    mysqli_query($conn,$sql);
}

$file= fopen('Fitness/'.$newfilename2,'r');
$size = filesize( 'Fitness/'.$newfilename2 ); 
$csv_data=fread($file,$size);
$lines = explode("\n", $csv_data);
for($i=1;$i<=96;$i++)
{
    $row = explode(",", $lines[$i]);
    $start_time=$row[0];
    $end_time=$row[1];
    $calories='0'.$row[2];
    $distance='0'.$row[3];
    $avg_speed='0'.$row[4];
    $steps='0'.$row[7];
    $minutes='0'.$row[8];
    $sql="insert into fitness_attributes values ('".$_SESSION["user_id"]."','$newfilename2','$start_time','$end_time',$calories,$distance,$avg_speed,$steps,$minutes)";
    mysqli_query($conn,$sql);
}

$sql1= "select sum(calories),sum(distance),sum(steps),sum(minutes),max(avg_speed) from fitness_attributes where user_id= '".$_SESSION["user_id"]."' and file_name = '$newfilename1'";
$sql2= "select sum(calories),sum(distance),sum(steps),sum(minutes),max(avg_speed) from fitness_attributes where user_id= '".$_SESSION["user_id"]."' and file_name = '$newfilename2'";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$calorie1=$row1["sum(calories)"];
$distance1=$row1["sum(distance)"];
$steps1=$row1["sum(steps)"];
$minutes1=$row1["sum(minutes)"];
$max_speed1=$row1["max(avg_speed)"];

$calorie2=$row2["sum(calories)"];
$distance2=$row2["sum(distance)"];
$steps2=$row2["sum(steps)"];
$minutes2=$row2["sum(minutes)"];
$max_speed2=$row2["max(avg_speed)"];

$sql1= "select start_time,end_time from fitness_attributes where user_id= '".$_SESSION["user_id"]."' and file_name = '$newfilename1' order by steps desc limit 4";
$sql2= "select start_time,end_time from fitness_attributes where user_id= '".$_SESSION["user_id"]."' and file_name = '$newfilename2' order by steps desc limit 4";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$string1="";
$string2="";
while($row = mysqli_fetch_assoc($result1)) {
  $string1 = $string1 . $row["start_time"] . "  to  " . $row["end_time"] . "</br>";
}
while($row = mysqli_fetch_assoc($result2)) {
  $string2 = $string2 . $row["start_time"] . "  to  " . $row["end_time"] . "</br>";
}

$string1=str_replace('.000+05:30', ' ', $string1);
$string2=str_replace('.000+05:30', ' ', $string2);

$sql3="update module_3 set distance_1= $distance1,distance_2= $distance2,avg_speed_1 = $max_speed1,avg_speed_2 = $max_speed2,steps_1 = $steps1,steps_2 = $steps2,minutes_1 = $minutes1,minutes_2 = $minutes2,calories_1= $calorie1,calories_2= $calorie2, peak_1='$string1', peak_2='$string2' where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql3);

mysqli_close($conn);

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

<div class="container m-5 text-center">
<div class="card">
<div class="card-body">
<p class="card-text"><?php echo $msg;?></p>
</div>
<a href="home.php" class="btn btn-block btn-warning"> Home</a>
</div>
</div>

<footer class="bg-dark text-white text-center mt-5" >
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