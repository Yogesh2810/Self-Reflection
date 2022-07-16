<?php 
include "head.php";
$conn=dbconn();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=time();
    $username1=mysqli_real_escape_string($conn,$_POST["username1"]);
    $emailid1=mysqli_real_escape_string($conn,$_POST["emailid1"]);
    $password1=mysqli_real_escape_string($conn,$_POST["password1"]);
    
    $sql="insert into users values ('$id','$username1','$emailid1','$password1')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert(\"Registration Successful !\");
                location.replace(\"index.php\");
                </script>";
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

<script>
function validate()
{
    var x = document.forms["regisform"]["password1"].value;
    var y = document.forms["regisform"]["password2"].value;
    if (x != y) {
    alert("Password Doesn't Match ");
    return false;
    }
    return true;
}
</script>
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
<div class="row mt-5">
<div class="col-1 col-sm-4"></div>

<div class="col-10 col-sm-4 card text-center">
<form method="post" name="regisform" onsubmit="return validate();">
<br>
<input type="text" class="form-control form-control-sm" placeholder="Name" name="username1" required>
<br>
<input type="email" class="form-control form-control-sm" placeholder="Email Id " name="emailid1" required>
<br>
<input type="password" class="form-control form-control-sm" placeholder="Password" name="password1" minlength="4" required>
<br>
<input type="password" class="form-control form-control-sm" placeholder="Confirm Password" name="password2" minlength="4" required>
<br>
<button class="btn btn-block btn-warning" type="submit">Sign Up</button>
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