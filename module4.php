<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();
$sql="select * from module_4 where user_id ='".$_SESSION["user_id"]."'";
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
<h1>Handwriting Analysis</h1>
<h5>Graphology</h5>
</div>

<div class="card">
<div class="card-body">
<?php
if($count==0)
{
    echo "<h5 class=\"card-title\"> No Graphology data Found !</h5>";
    echo "<p class=\"card-text\"> Upload the Handwriting sample using Upload button given below. (any image format)</p>";
    echo "<p class=\"card-text text-info\">
    What is Graphology ?<br>
    A person's handwriting is as unique as their personality, which makes it tempting to connect the two. Graphology is a fun exercise, but it has very limited accuracy. At best these correlations are informed guesses with many exceptions. They're fun to find, but don't use them to judge job applicants or alter friendships</p>";
        
}
else{
    $row=mysqli_fetch_assoc($result);
    echo '<h5 class="card-title">Following data was Found from your handwriting</h5>
    <table class="table">
    <thead class="thead-dark"><tr><th>Your top 5 personality Traits</th></tr></thead>
    <tbody>
    <tr><td>
    <ul>
    <li>'.$row["top1"].'</li>
    <li>'.$row["top2"].'</li>
    <li>'.$row["top3"].'</li>
    <li>'.$row["top4"].'</li>
    <li>'.$row["top5"].'</li>
    </ul>
    </td></tr>
    </tbody>
    </table>
    <p class="card-text text-info">
    What is Graphology ?<br>
    A person\'s handwriting is as unique as their personality, which makes it tempting to connect the two. Graphology is a fun exercise, but it has very limited accuracy. At best these correlations are informed guesses with many exceptions. They\'re fun to find, but don\'t use them to judge job applicants or alter friendships</p>
    
    <p class="card-text text-danger">
    For every human, nobody always writes in same handwriting, and this section of program will only work for handwriting sample that you upload, so it is likely, that predictions of this program are about your personality traits, which were strongest when you wrote the handwriting sample.
    </p>
    ';

}
?>
<a class="btn btn-block btn-danger mt-3" href="uploadhand.php">Upload Handwriting sample</a>
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