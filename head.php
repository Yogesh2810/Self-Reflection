<?php

function dbconn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BE";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function bootstrap()
{
    echo ' <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resource/bootstrap.min.css">
    <link rel="stylesheet" href="resource/font-awesome.min.css">
    <script src="resource/bootstrap.bundle.min.js"></script>
    <script src="resource/jquery-3.3.1.slim.min.js"></script>
    <script src="https://use.fontawesome.com/4f3fd5426e.js"></script>';

}

function minimum($a,$b)
{
  if($a <= $b)
  {
    return $a;
  }
  else 
  {
    return $b;
  }
}

function maximum($a,$b)
{
  if($a >= $b)
  {
    return $a;
  }
  else 
  {
    return $b;
  }
}

function score_1($user_id)
{
  $mysql=dbconn();
  $sql="SELECT `extraversion` as e, `agreebleness` as a, `conscientiousness` as c, `neuroticism` as n, `openness`as o FROM `module_1` WHERE `user_id` = '".$user_id."'";
  
  $result=mysqli_query($mysql,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $res="";
    $row=mysqli_fetch_assoc($result);
      $e=$row["e"];
      $a=$row["a"];
      $c=$row["c"];
      $n=$row["n"];
      $o=$row["o"];

      if($e=='A')
      {
        $emean="";
        $esuggest="";
      }
      else
      {
        $emean="";
        $esuggest="";
      }


      if($a=='A')
      {
        $amean="";
        $asuggest="";
      }
      else
      {
        $amean="";
        $asuggest="";
      }


      if($c=='A')
      {
        $cmean="";
        $csuggest="";
      }
      else
      {
        $cmean="";
        $csuggest="";
      }


      if($n=='A')
      {
        $nmean="";
        $nsuggest="";
      }
      else
      {
        $nmean="";
        $nsuggest="";
      }

      if($o=='A')
      {
        $omean="";
        $osuggest="";
      }
      else
      {
        $omean="";
        $osuggest="";
      }

      $res='<table class="table"><thead class="thead-dark"><th>Personality</th><th>Suggestion</th></thead>
      <tbody>
      <tr><td>'.$emean.'</td><td>'.$esuggest.'</td></tr>
      <tr><td>'.$amean.'</td><td>'.$asuggest.'</td></tr>
      <tr><td>'.$cmean.'</td><td>'.$csuggest.'</td></tr>
      <tr><td>'.$nmean.'</td><td>'.$nsuggest.'</td></tr>
      <tr><td>'.$omean.'</td><td>'.$osuggest.'</td></tr>
      </tbody>
      </table>';
    }
  else{
    $res="No results Found for this activity.";
  }
  mysqli_close($mysql);
  return $res;
  
}



function score_2($user_id)
{
  $mysql=dbconn();
  $sql="select * from module_2 where user_id='".$user_id."'";
  $result=mysqli_query($mysql,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $res="";
    $row=mysqli_fetch_assoc($result);
  }
  else{
    $res="No results Found for this activity.";
  }
  mysqli_close($mysql);
  return $res;
}
function score_3($user_id)
{
  $mysql=dbconn();
  $sql="select * from module_3 where user_id='".$user_id."'";
  $result=mysqli_query($mysql,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $res="";
    $row=mysqli_fetch_assoc($result);
  }
  else{
    $res="No results Found for this activity.";
  }
  mysqli_close($mysql);
  return $res;
}
function score_4($user_id)
{
  $mysql=dbconn();
  $sql="select * from module_4 where user_id='".$user_id."'";
  $result=mysqli_query($mysql,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $res="";
    $row=mysqli_fetch_assoc($result);
  }
  else{
    $res="No results Found for this activity.";
  }
  mysqli_close($mysql);
  return $res;
}


?>