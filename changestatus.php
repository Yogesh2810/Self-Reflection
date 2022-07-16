<?php
@session_start();
if(!$_SESSION["user_id"])
{
  echo"<script>location.replace(\"index.php\");</script>";
}
include "head.php";
$conn=dbconn();
$id=mysqli_real_escape_string($conn,$_GET["id"]);
$status=mysqli_real_escape_string($conn,$_GET["status"]);

$sql="update calendar_events set status='$status' where event_id = '$id'";
mysqli_query($conn,$sql);

if($status=="completed")
{
    $sql="update module_2 set completed_tasks=completed_tasks + 1 ";
    mysqli_query($conn,$sql);    
}

if($status=="snoozed")
{
    $sql="update module_2 set snoozed_tasks=snoozed_tasks + 1 ";
    mysqli_query($conn,$sql);    
}

$sql="update module_2 set efficiency= 100 * completed_tasks / (snoozed_tasks + completed_tasks) ";
    mysqli_query($conn,$sql);

    mysqli_close($conn);

    echo"<script>location.replace(\"markcal.php\");</script>";
?>