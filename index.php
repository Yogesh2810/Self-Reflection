<?php 
if(!isset($_SESSION))
{
session_start();
}
else
{
session_destroy();
session_start();
}
include "head.php";
$conn=dbconn();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $emailid1=mysqli_real_escape_string($conn,$_POST["emailid1"]);
    $password1=mysqli_real_escape_string($conn,$_POST["password1"]);
    
    $sql="select user_name,user_id,user_password from users where user_email_id = '$emailid1'";
    $result = mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $pass=$row["user_password"];
        if($pass==$password1)
        {
          $_SESSION["user_id"]=$row["user_id"];
          $_SESSION["user_name"]=$row["user_name"];
          echo "<script>alert(\"Logging IN \");
          location.replace(\"home.php\");
          </script>";    
        }
        else
        {
          echo "<script>alert(\"Wrong Password ! \");</script>";
        }
      }
    } else {
      echo "<script>alert(\"Account Not Found , Email ID Not present in Our records\");</script>";
    }
}
?>
<html>
<head>
<?php bootstrap();?>

<style>
#blank_space{
background:none;
}
footer{
    position:fixed;
    bottom:0;
    width:100%;
}
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
<div class="row mt-5" >
<div class="col-1 col-sm-4"></div>

<div class="col-10 col-sm-4 card text-center">
<form method="post">
<br>
<input type="text" class="form-control form-control-sm" placeholder="Email Id " name="emailid1" required>
<br>
<input type="password" class="form-control form-control-sm" placeholder="Password" name="password1" required>
<br>
<button type="submit" class="btn btn-block btn-primary">Login</button>
</form>
or<br>
<a class="btn btn-block btn-warning" href="register.php">Sign Up</a>
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