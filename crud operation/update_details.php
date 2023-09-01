<?php
require "config.php";
require "update.php";

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$dob = date('y-m-d',strtotime($_REQUEST['date']));
$gender = $_REQUEST['gender'];
$city = $_REQUEST['city'];
$course = $_REQUEST['course'];
$hobbies = $_POST['hobbies'];
$hobbie = implode(",",$hobbies);

$update = "UPDATE crud SET name='$name',email='$email',number='$number',dob='$dob',gender='$gender',city='$city',course='$course',hobbies='$hobbie' WHERE id='$id'";

$res = mysqli_query($con, $update);
header("location:view.php");
?>