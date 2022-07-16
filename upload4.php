<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();

$target_dir = "Handwriting/";
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$msg="";

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $msg= $msg. "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
        $msg= $msg.  "File is not an image.";
      $uploadOk = 0;
    }
  }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $msg = $msg."Sorry, only Image files are allowed.";
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

$sql="delete from module_4 where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="delete from handwriting_attributes where user_id = '".$_SESSION["user_id"]."'";
mysqli_query($conn,$sql);

$sql="insert into module_4(user_id,file) values ('".$_SESSION["user_id"]."','$newfilename')";
mysqli_query($conn,$sql);

$cmd = "python handwriting.py ".$_SESSION["user_id"]. " ".$newfilename;
echo $cmd;
system($cmd);

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