<?php 
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";

$conn=dbconn();
$sql1="SELECT `extraversion` as e, `agreebleness` as a, `conscientiousness` as c, `neuroticism` as n, `openness`as o FROM `module_1` WHERE `user_id` = '".$_SESSION["user_id"]."'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $e=$row["e"];
      $a=$row["a"];
      $c=$row["c"];
      $n=$row["n"];
      $o=$row["o"];
    }
  } else {
    $e=$a=$c=$n=$o=" Unavailable ";
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
<h3 class="mt-2">Hello <?php echo $_SESSION["user_name"];?></h3>

<p class="text-dark"> Your Detailed Score is as below !</p>
<p class="text-primary">* Type A is high score</p>
<p class="text-danger">* Type B is low score</p>
<a class="btn btn-warning" href="home.php">Home</a> <a class="btn btn-danger ml-3" href="begintest.php">Begin Test</a>
<br>
<div class="row">
<!--    ---------------------------------------------------------------------------------    -->
<div class="col-11 col-sm-5 card m-2" id="extraversion">
<div class="card-body">
<h5 class="card-title">Type <?php echo $e;?> in Extraversion</h5>
<p class="card-text">
<?php
if($e=="A")
{
echo "A high extraversion score might mean you: <br>
    <br>
seek excitement or adventure<br>
make friends easily<br>
speak without thinking<br>
enjoy being active with others<br>
<br>
If you score high on extraversion, you might consider yourself an extrovert. You might enjoy attention and feel recharged after spending time with friends. You likely feel your best when in a large group of people. <br>
<br>
On the other hand, you may have trouble spending long periods of time alone.
";
}
else if($e=="B"){
echo "A low extraversion score can mean you: <br>
<br>
have a hard time making small talk or introducing yourself<br>
feel worn out after socializing <br>
avoid large groups<br>
are more reserved<br>
<br>
A low extraversion score can mean you prefer to spend time alone or with a small group of close friends. You might also be a more private person when it comes to sharing details about your life. This might come across as standoffish to others.";
}
else {
    echo " Score Unavailable - Please Click on red Button to Begin Test";
}
?>
</p>
</div>
</div>

<!--    ---------------------------------------------------------------------------------    -->

<div class="col-11 col-sm-5 card m-2" id="agreebleness">
<div class="card-body">
<h5 class="card-title">Type <?php echo $a;?> in Agreebleness</h5>
<p class="card-text">
<?php
if($a=="A")
{
echo "A high score in agreeableness might mean you:<br>
<br>
are always ready to help out<br>
are caring and honest<br>
are interested in the people around you<br>
believe the best about others<br>
<br>
If you score high in agreeableness, you you’re helpful and cooperative. Your loved ones may often turn to you for help. People might see you as trustworthy. You may be the person others seek when they’re trying to resolve a disagreement. 
<br><br>
In some situations, you might a little too trusting or willing to compromise. Try to balance your knack for pleasing others with self-advocacy. 

";
}
else if($a=="B"){
echo "
A low agreeableness score might mean you:<br>
<br>
    are stubborn <br>
    find it difficult to forgive mistakes<br>
    are self-centered<br>
    have less compassion for others <br>
    <br>
A low agreeableness score may mean you tend hold grudges. You might also be less sympathetic with others. But you are also likely avoid the pitfalls of comparing yourself to others or caring about what others think of you.
";
}
else {
    echo " Score Unavailable - Please Click on red Button to Begin Test";
}
?>
</p>
</div>

</div>

<!--    ---------------------------------------------------------------------------------    -->
<div class="col-11 col-sm-5 card m-2" id="conscientiousness">

<div class="card-body">
<h5 class="card-title">Type <?php echo $c;?> in Conscientiousness</h5>
<p class="card-text">
<?php
if($c=="A")
{
echo "If you score high on conscientiousness, you likely:<br>
<br>
keep things in order<br>
come prepared to school or work<br>
are goal-driven<br>
are persistent<br>
<br>
If you are a conscientious person, you might follow a regular schedule and have a knack for keeping track of details. You likely deliberate over options and work hard to achieve your goals. Coworkers and friends might see you as a reliable, fair person.
<br><br>
You may tend to micromanage situations or tasks. You might also be cautious or difficult to please.

";
}
else if($c=="B"){
echo "
A low score on conscientiousness might mean you:<br>
<br>
    are less organized<br>
    complete tasks in a less structured way<br>
    take things as they come<br>
    finish things at the last minute<br>
    are impulsive<br>
    <br>
A low conscientiousness score might mean you prefer a setting without structure. You may prefer doing things at your own pace to working on a deadline. This might make you appear unreliable to others. 
";
}
else {
    echo " Score Unavailable - Please Click on red Button to Begin Test";
}
?>
</p>
</div>

</div>

<!--    ---------------------------------------------------------------------------------    -->
<div class="col-11 col-sm-5 card m-2" id="neuroticism">

<div class="card-body">
<h5 class="card-title">Type <?php echo $n;?> in Neuroticism</h5>
<p class="card-text">
<?php
if($n=="A")
{
echo "A high score in neuroticism can mean you:<br>
<br>
often feel vulnerable or insecure<br>
get stressed easily<br>
struggle with difficult situations<br>
have mood swings<br>
<br>
If you score high on neuroticism, you may blame yourself when things go wrong. You might also get frustrated with yourself easily, especially if you make a mistake. Chances are, you’re also prone to worrying. 
<br><br>
But you’re likely also more introspective than others, which helps you to examine and understand your feelings. 

";
}
else if($n=="B"){
echo "
If you score low on neuroticism, you likely: <br>
<br>
    keep calm in stressful situations<br>
    are more optimistic<br>
    worry less<br>
    have a more stable mood<br>
    <br>
A low neuroticism score can mean you’re confident. You may have more resilience and find it easy to keep calm under stress. Relaxation might also come more easily to you. Try to keep in mind that this might not be as easy for those around you, so be patient. 
 
";
}
else {
    echo " Score Unavailable - Please Click on red Button to Begin Test";
}
?>
</p>
</div>

</div>

<!--    ---------------------------------------------------------------------------------    -->
<div class="col-11 col-sm-5 card m-2" id="openness">

<div class="card-body">
<h5 class="card-title">Type <?php echo $o;?> in Openness to Experience</h5>
<p class="card-text">
<?php
if($o=="A")
{
echo "If you scored high on openness, you might:<br>
<br>
enjoy trying new things<br>
be more creative<br>
have a good imagination<br>
be willing to consider new ideas<br>
<br>
A high score on openness can mean you have broad interests. You may enjoy solving problems with new methods and find it easy to think about things in different ways. Being open to new ideas may help you adjust easily to change.
<br><br>
Just make sure to keep an eye out for any situations where you might need to establish boundaries, whether that be with family members or your work-life balance.

";
}
else if($o=="B"){
echo "
A low openness score might mean you:<br>
<br>
    prefer to do things in a familiar way<br>
    avoid change<br>
    are more traditional in your thinking<br>
    <br>
A low openness score can mean you consider concepts in straightforward ways. Others likely see you as being grounded and down-to-earth.
 
";
}
else {
    echo " Score Unavailable - Please Click on red Button to Begin Test";
}
?>
</p>
</div>

</div>

<!--    ---------------------------------------------------------------------------------    -->
</div>
<p class="text-info">* This score will be saved with your account. You can Come back and check it at any point again.</p>
<p class="text-info">* It is also possible to take this test once again. To do that go to homepage, and select personality test option.</p>
<a class="btn btn-warning" href="home.php">Home</a> <a class="btn btn-danger ml-3" href="begintest.php">Begin Test</a>
</br></br>
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