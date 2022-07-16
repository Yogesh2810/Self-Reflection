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
 input[type="radio"]{
          height:0;
          width:0;
      }
      
      label {
    display: inline-block;
    background-color: white;
    padding: 5px 10px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border:1px solid #0275d8;
    border-bottom: 2px solid grey;
    border-radius: 4px;
    width:90%;
}
input[type="radio"]:checked + label {
    background-color:#0275d8;
    border-color: #0275d8;
    color:white;
}
input[type="radio"]:focus + label {
    border: 1px solid #0275d8;
    border-bottom: 2px solid #0275d8;
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
<div class="jumbotron bg-primary text-white text-center mt-4"><h1>Personality Test</h1></div>

<form onsubmit="return valid()" action="result1.php" method="post" name="psy" >
<b>
<div class="card mt-1 mb-2">Q.1: &nbsp;&nbsp;&nbsp;  I Am the life of the party.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q1" id="q1o1" value="1">
        <label for="q1o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q1" id="q1o2" value="2">
        <label for="q1o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q1" id="q1o3" value="3">
        <label for="q1o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q1" id="q1o4" value="4">
        <label for="q1o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q1" id="q1o5" value="5">
        <label  for="q1o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.2: &nbsp;&nbsp;&nbsp; I Feel little concern for others.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q2" id="q2o1" value="1">
        <label for="q2o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q2" id="q2o2" value="2">
        <label for="q2o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q2" id="q2o3" value="3">
        <label for="q2o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q2" id="q2o4" value="4">
        <label for="q2o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q2" id="q2o5" value="5">
        <label  for="q2o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.3: &nbsp;&nbsp;&nbsp; I Am always prepared.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q3" id="q3o1" value="1">
        <label for="q3o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q3" id="q3o2" value="2">
        <label for="q3o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q3" id="q3o3" value="3">
        <label for="q3o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q3" id="q3o4" value="4">
        <label for="q3o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q3" id="q3o5" value="5">
        <label  for="q3o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.4: &nbsp;&nbsp;&nbsp; I Get stressed out easily.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q4" id="q4o1" value="1">
        <label for="q4o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q4" id="q4o2" value="2">
        <label for="q4o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q4" id="q4o3" value="3">
        <label for="q4o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q4" id="q4o4" value="4">
        <label for="q4o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q4" id="q4o5" value="5">
        <label  for="q4o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.5: &nbsp;&nbsp;&nbsp; I Have a rich vocabulary.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q5" id="q5o1" value="1">
        <label for="q5o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q5" id="q5o2" value="2">
        <label for="q5o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q5" id="q5o3" value="3">
        <label for="q5o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q5" id="q5o4" value="4">
        <label for="q5o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q5" id="q5o5" value="5">
        <label  for="q5o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.6: &nbsp;&nbsp;&nbsp;  I Don't talk a lot.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q6" id="q6o1" value="1">
        <label for="q6o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q6" id="q6o2" value="2">
        <label for="q6o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q6" id="q6o3" value="3">
        <label for="q6o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q6" id="q6o4" value="4">
        <label for="q6o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q6" id="q6o5" value="5">
        <label  for="q6o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.7: &nbsp;&nbsp;&nbsp; I Am interested in people.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q7" id="q7o1" value="1">
        <label for="q7o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q7" id="q7o2" value="2">
        <label for="q7o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q7" id="q7o3" value="3">
        <label for="q7o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q7" id="q7o4" value="4">
        <label for="q7o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q7" id="q7o5" value="5">
        <label  for="q7o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.8: &nbsp;&nbsp;&nbsp; I Leave my belongings around.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q8" id="q8o1" value="1">
        <label for="q8o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q8" id="q8o2" value="2">
        <label for="q8o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q8" id="q8o3" value="3">
        <label for="q8o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q8" id="q8o4" value="4">
        <label for="q8o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q8" id="q8o5" value="5">
        <label  for="q8o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.9: &nbsp;&nbsp;&nbsp; I Am relaxed most of the time. <br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q9" id="q9o1" value="1">
        <label for="q9o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q9" id="q9o2" value="2">
        <label for="q9o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q9" id="q9o3" value="3">
        <label for="q9o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q9" id="q9o4" value="4">
        <label for="q9o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q9" id="q9o5" value="5">
        <label  for="q9o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.10: &nbsp;&nbsp;&nbsp; I Have difficulty understanding abstract ideas.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q10" id="q10o1" value="1">
        <label for="q10o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q10" id="q10o2" value="2">
        <label for="q10o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q10" id="q10o3" value="3">
        <label for="q10o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q10" id="q10o4" value="4">
        <label for="q10o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q10" id="q10o5" value="5">
        <label  for="q10o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.11: &nbsp;&nbsp;&nbsp; I Feel comfortable around people.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q11" id="q11o1" value="1">
        <label for="q11o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q11" id="q11o2" value="2">
        <label for="q11o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q11" id="q11o3" value="3">
        <label for="q11o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q11" id="q11o4" value="4">
        <label for="q11o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q11" id="q11o5" value="5">
        <label  for="q11o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.12: &nbsp;&nbsp;&nbsp; I Insult people.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q12" id="q12o1" value="1">
        <label for="q12o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q12" id="q12o2" value="2">
        <label for="q12o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q12" id="q12o3" value="3">
        <label for="q12o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q12" id="q12o4" value="4">
        <label for="q12o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q12" id="q12o5" value="5">
        <label  for="q12o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.13: &nbsp;&nbsp;&nbsp; I Pay attention to details.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q13" id="q13o1" value="1">
        <label for="q13o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q13" id="q13o2" value="2">
        <label for="q13o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q13" id="q13o3" value="3">
        <label for="q13o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q13" id="q13o4" value="4">
        <label for="q13o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q13" id="q13o5" value="5">
        <label  for="q13o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.14: &nbsp;&nbsp;&nbsp; I Worry about things.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q14" id="q14o1" value="1">
        <label for="q14o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q14" id="q14o2" value="2">
        <label for="q14o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q14" id="q14o3" value="3">
        <label for="q14o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q14" id="q14o4" value="4">
        <label for="q14o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q14" id="q14o5" value="5">
        <label  for="q14o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.15: &nbsp;&nbsp;&nbsp; I Have a vivid imagination.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q15" id="q15o1" value="1">
        <label for="q15o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q15" id="q15o2" value="2">
        <label for="q15o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q15" id="q15o3" value="3">
        <label for="q15o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q15" id="q15o4" value="4">
        <label for="q15o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q15" id="q15o5" value="5">
        <label  for="q15o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.16: &nbsp;&nbsp;&nbsp; I Keep in the background.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q16" id="q16o1" value="1">
        <label for="q16o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q16" id="q16o2" value="2">
        <label for="q16o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q16" id="q16o3" value="3">
        <label for="q16o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q16" id="q16o4" value="4">
        <label for="q16o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q16" id="q16o5" value="5">
        <label  for="q16o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.17: &nbsp;&nbsp;&nbsp; I Sympathize with others' feelings.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q17" id="q17o1" value="1">
        <label for="q17o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q17" id="q17o2" value="2">
        <label for="q17o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q17" id="q17o3" value="3">
        <label for="q17o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q17" id="q17o4" value="4">
        <label for="q17o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q17" id="q17o5" value="5">
        <label  for="q17o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.18: &nbsp;&nbsp;&nbsp; I Make a mess of things.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q18" id="q18o1" value="1">
        <label for="q18o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q18" id="q18o2" value="2">
        <label for="q18o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q18" id="q18o3" value="3">
        <label for="q18o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q18" id="q18o4" value="4">
        <label for="q18o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q18" id="q18o5" value="5">
        <label  for="q18o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.19: &nbsp;&nbsp;&nbsp; I Seldom feel blue.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q19" id="q19o1" value="1">
        <label for="q19o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q19" id="q19o2" value="2">
        <label for="q19o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q19" id="q19o3" value="3">
        <label for="q19o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q19" id="q19o4" value="4">
        <label for="q19o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q19" id="q19o5" value="5">
        <label  for="q19o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.20: &nbsp;&nbsp;&nbsp; I Am not interested in abstract ideas.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q20" id="q20o1" value="1">
        <label for="q20o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q20" id="q20o2" value="2">
        <label for="q20o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q20" id="q20o3" value="3">
        <label for="q20o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q20" id="q20o4" value="4">
        <label for="q20o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q20" id="q20o5" value="5">
        <label  for="q20o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.21: &nbsp;&nbsp;&nbsp; I Start conversations.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q21" id="q21o1" value="1">
        <label for="q21o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q21" id="q21o2" value="2">
        <label for="q21o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q21" id="q21o3" value="3">
        <label for="q21o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q21" id="q21o4" value="4">
        <label for="q21o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q21" id="q21o5" value="5">
        <label  for="q21o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.22: &nbsp;&nbsp;&nbsp;  I Am not ever interested in other people's problems.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q22" id="q22o1" value="1">
        <label for="q22o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q22" id="q22o2" value="2">
        <label for="q22o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q22" id="q22o3" value="3">
        <label for="q22o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q22" id="q22o4" value="4">
        <label for="q22o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q22" id="q22o5" value="5">
        <label  for="q22o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.23: &nbsp;&nbsp;&nbsp; I Get chores done right away.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q23" id="q23o1" value="1">
        <label for="q23o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q23" id="q23o2" value="2">
        <label for="q23o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q23" id="q23o3" value="3">
        <label for="q23o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q23" id="q23o4" value="4">
        <label for="q23o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q23" id="q23o5" value="5">
        <label  for="q23o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.24: &nbsp;&nbsp;&nbsp; I Am easily disturbed.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q24" id="q24o1" value="1">
        <label for="q24o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q24" id="q24o2" value="2">
        <label for="q24o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q24" id="q24o3" value="3">
        <label for="q24o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q24" id="q24o4" value="4">
        <label for="q24o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q24" id="q24o5" value="5">
        <label  for="q24o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.25: &nbsp;&nbsp;&nbsp;  I Have excellent ideas<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q25" id="q25o1" value="1">
        <label for="q25o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q25" id="q25o2" value="2">
        <label for="q25o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q25" id="q25o3" value="3">
        <label for="q25o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q25" id="q25o4" value="4">
        <label for="q25o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q25" id="q25o5" value="5">
        <label  for="q25o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.26: &nbsp;&nbsp;&nbsp; I Have little to say.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q26" id="q26o1" value="1">
        <label for="q26o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q26" id="q26o2" value="2">
        <label for="q26o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q26" id="q26o3" value="3">
        <label for="q26o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q26" id="q26o4" value="4">
        <label for="q26o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q26" id="q26o5" value="5">
        <label  for="q26o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.27: &nbsp;&nbsp;&nbsp; I Have a soft heart.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q27" id="q27o1" value="1">
        <label for="q27o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q27" id="q27o2" value="2">
        <label for="q27o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q27" id="q27o3" value="3">
        <label for="q27o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q27" id="q27o4" value="4">
        <label for="q27o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q27" id="q27o5" value="5">
        <label  for="q27o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.28: &nbsp;&nbsp;&nbsp; I Often forget to put things back in their proper place.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q28" id="q28o1" value="1">
        <label for="q28o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q28" id="q28o2" value="2">
        <label for="q28o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q28" id="q28o3" value="3">
        <label for="q28o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q28" id="q28o4" value="4">
        <label for="q28o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q28" id="q28o5" value="5">
        <label  for="q28o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.29: &nbsp;&nbsp;&nbsp; I Get upset easily.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q29" id="q29o1" value="1">
        <label for="q29o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q29" id="q29o2" value="2">
        <label for="q29o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q29" id="q29o3" value="3">
        <label for="q29o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q29" id="q29o4" value="4">
        <label for="q29o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q29" id="q29o5" value="5">
        <label  for="q29o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.30: &nbsp;&nbsp;&nbsp; I Do not have a good imagination.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q30" id="q30o1" value="1">
        <label for="q30o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q30" id="q30o2" value="2">
        <label for="q30o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q30" id="q30o3" value="3">
        <label for="q30o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q30" id="q30o4" value="4">
        <label for="q30o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q30" id="q30o5" value="5">
        <label  for="q30o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.31: &nbsp;&nbsp;&nbsp; I Talk to a lot of different people at parties.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q31" id="q31o1" value="1">
        <label for="q31o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q31" id="q31o2" value="2">
        <label for="q31o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q31" id="q31o3" value="3">
        <label for="q31o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q31" id="q31o4" value="4">
        <label for="q31o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q31" id="q31o5" value="5">
        <label  for="q31o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.32: &nbsp;&nbsp;&nbsp; I Am not really interested in others.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q32" id="q32o1" value="1">
        <label for="q32o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q32" id="q32o2" value="2">
        <label for="q32o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q32" id="q32o3" value="3">
        <label for="q32o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q32" id="q32o4" value="4">
        <label for="q32o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q32" id="q32o5" value="5">
        <label  for="q32o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.33: &nbsp;&nbsp;&nbsp; I Like order.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q33" id="q33o1" value="1">
        <label for="q33o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q33" id="q33o2" value="2">
        <label for="q33o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q33" id="q33o3" value="3">
        <label for="q33o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q33" id="q33o4" value="4">
        <label for="q33o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q33" id="q33o5" value="5">
        <label  for="q33o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.34: &nbsp;&nbsp;&nbsp;  I Change my mood a lot.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q34" id="q34o1" value="1">
        <label for="q34o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q34" id="q34o2" value="2">
        <label for="q34o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q34" id="q34o3" value="3">
        <label for="q34o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q34" id="q34o4" value="4">
        <label for="q34o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q34" id="q34o5" value="5">
        <label  for="q34o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.35: &nbsp;&nbsp;&nbsp;  I Am quick to understand things.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q35" id="q35o1" value="1">
        <label for="q35o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q35" id="q35o2" value="2">
        <label for="q35o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q35" id="q35o3" value="3">
        <label for="q35o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q35" id="q35o4" value="4">
        <label for="q35o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q35" id="q35o5" value="5">
        <label  for="q35o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.36: &nbsp;&nbsp;&nbsp; I Don't like to draw attention to myself.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q36" id="q36o1" value="1">
        <label for="q36o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q36" id="q36o2" value="2">
        <label for="q36o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q36" id="q36o3" value="3">
        <label for="q36o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q36" id="q36o4" value="4">
        <label for="q36o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q36" id="q36o5" value="5">
        <label  for="q36o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.37: &nbsp;&nbsp;&nbsp;  I Take time out for others<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q37" id="q37o1" value="1">
        <label for="q37o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q37" id="q37o2" value="2">
        <label for="q37o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q37" id="q37o3" value="3">
        <label for="q37o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q37" id="q37o4" value="4">
        <label for="q37o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q37" id="q37o5" value="5">
        <label  for="q37o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.38: &nbsp;&nbsp;&nbsp; I Shirk my duties.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q38" id="q38o1" value="1">
        <label for="q38o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q38" id="q38o2" value="2">
        <label for="q38o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q38" id="q38o3" value="3">
        <label for="q38o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q38" id="q38o4" value="4">
        <label for="q38o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q38" id="q38o5" value="5">
        <label  for="q38o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.39: &nbsp;&nbsp;&nbsp; I Have frequent mood swings.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q39" id="q39o1" value="1">
        <label for="q39o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q39" id="q39o2" value="2">
        <label for="q39o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q39" id="q39o3" value="3">
        <label for="q39o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q39" id="q39o4" value="4">
        <label for="q39o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q39" id="q39o5" value="5">
        <label  for="q39o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.40: &nbsp;&nbsp;&nbsp; I Use difficult words.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q40" id="q40o1" value="1">
        <label for="q40o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q40" id="q40o2" value="2">
        <label for="q40o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q40" id="q40o3" value="3">
        <label for="q40o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q40" id="q40o4" value="4">
        <label for="q40o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q40" id="q40o5" value="5">
        <label  for="q40o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.41: &nbsp;&nbsp;&nbsp; I Don't mind being the center of attention.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q41" id="q41o1" value="1">
        <label for="q41o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q41" id="q41o2" value="2">
        <label for="q41o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q41" id="q41o3" value="3">
        <label for="q41o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q41" id="q41o4" value="4">
        <label for="q41o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q41" id="q41o5" value="5">
        <label  for="q41o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.42: &nbsp;&nbsp;&nbsp; I Feel others' emotions.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q42" id="q42o1" value="1">
        <label for="q42o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q42" id="q42o2" value="2">
        <label for="q42o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q42" id="q42o3" value="3">
        <label for="q42o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q42" id="q42o4" value="4">
        <label for="q42o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q42" id="q42o5" value="5">
        <label  for="q42o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.43: &nbsp;&nbsp;&nbsp; I Follow a schedule<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q43" id="q43o1" value="1">
        <label for="q43o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q43" id="q43o2" value="2">
        <label for="q43o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q43" id="q43o3" value="3">
        <label for="q43o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q43" id="q43o4" value="4">
        <label for="q43o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q43" id="q43o5" value="5">
        <label  for="q43o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.44: &nbsp;&nbsp;&nbsp; I Get irritated easily<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q44" id="q44o1" value="1">
        <label for="q44o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q44" id="q44o2" value="2">
        <label for="q44o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q44" id="q44o3" value="3">
        <label for="q44o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q44" id="q44o4" value="4">
        <label for="q44o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q44" id="q44o5" value="5">
        <label  for="q44o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.45: &nbsp;&nbsp;&nbsp; I Spend time reflecting on things.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q45" id="q45o1" value="1">
        <label for="q45o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q45" id="q45o2" value="2">
        <label for="q45o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q45" id="q45o3" value="3">
        <label for="q45o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q45" id="q45o4" value="4">
        <label for="q45o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q45" id="q45o5" value="5">
        <label  for="q45o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.46: &nbsp;&nbsp;&nbsp; I Am quiet around strangers.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q46" id="q46o1" value="1">
        <label for="q46o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q46" id="q46o2" value="2">
        <label for="q46o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q46" id="q46o3" value="3">
        <label for="q46o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q46" id="q46o4" value="4">
        <label for="q46o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q46" id="q46o5" value="5">
        <label  for="q46o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.47: &nbsp;&nbsp;&nbsp; I Make people feel at ease.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q47" id="q47o1" value="1">
        <label for="q47o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q47" id="q47o2" value="2">
        <label for="q47o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q47" id="q47o3" value="3">
        <label for="q47o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q47" id="q47o4" value="4">
        <label for="q47o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q47" id="q47o5" value="5">
        <label  for="q47o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.48: &nbsp;&nbsp;&nbsp; I Am exacting in my work<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q48" id="q48o1" value="1">
        <label for="q48o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q48" id="q48o2" value="2">
        <label for="q48o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q48" id="q48o3" value="3">
        <label for="q48o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q48" id="q48o4" value="4">
        <label for="q48o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q48" id="q48o5" value="5">
        <label  for="q48o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.49: &nbsp;&nbsp;&nbsp; I Often feel blue.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q49" id="q49o1" value="1">
        <label for="q49o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q49" id="q49o2" value="2">
        <label for="q49o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q49" id="q49o3" value="3">
        <label for="q49o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q49" id="q49o4" value="4">
        <label for="q49o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q49" id="q49o5" value="5">
        <label  for="q49o5">5</label>
            </div>
        </div>
        </div><div class="card mt-1 mb-2">Q.50: &nbsp;&nbsp;&nbsp; I Am full of ideas.<br>        <div class="row mt-2">
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" name="q50" id="q50o1" value="1">
        <label for="q50o1">1</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q50" id="q50o2" value="2">
        <label for="q50o2">2</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio" required name="q50" id="q50o3" value="3">
        <label for="q50o3">3</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
         <input type="radio"  name="q50" id="q50o4" value="4">
        <label for="q50o4">4</label>
            </div>
            <div class="col-2 col-sm-2 m-1">
        <input type="radio"  name="q50" id="q50o5" value="5">
        <label  for="q50o5">5</label>
            </div>
        </div>
        </div><div class="card">
    <br>
<input class="btn btn-block btn-primary btn-lg" type="submit" value="Submit">
    <br>
</div>
</form>

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