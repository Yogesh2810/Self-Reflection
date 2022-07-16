<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();

$target_dir = "calendar/";
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$msg="";

// Allow certain file formats
if($imageFileType != "ics"  ) {
  $msg = "Sorry, only ics files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $msg = $msg." Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $msg = $msg . " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    $msg = $msg . "Sorry, there was an error uploading your file.";
  }
}

$sql="delete from module_2 where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="delete from calendar_events where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="insert into module_2 values ('".$_SESSION["user_id"]."',0,0,0,0,'$newfilename')";
mysqli_query($conn,$sql);

$file= fopen("calendar/$newfilename","r");
$count=0;
while(! feof($file))
{   $count=$count+1;
    $line=fgets($file);
    if(strpos($line,"BEGIN:VEVENT") !==false)
    {
        $description="";
        $summary="";
        $start_date="";
        $end_date="";
    }
    if(strpos($line,"DTSTART") !==false)
    {
        $start_date=substr($line,8,8);
    }
    if(strpos($line,"DTEND") !==false)
    {
        $end_date=substr($line,6,8);
    }
    if(strpos($line,"DESCRIPTION") !==false)
    {
        $description=substr($line,12);
    }
    if(strpos($line,"SUMMARY") !==false)
    {
        $summary=substr($line,8);
        $sql="insert into calendar_events values ('".$_SESSION["user_id"]."','".time().$count."','$description','$summary','$start_date','$end_date',' ')";
        mysqli_query($conn,$sql);
        
    }
    
}

$sql="select count(event_id) from calendar_events where user_id = '".$_SESSION["user_id"]."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $count1 = $row["count(event_id)"];
  }
} else {
  echo "0 results";
}

$sql="update module_2 set total_tasks = $count1 where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);
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
<h2 class="card-title"><?php echo $msg;?></h2>
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