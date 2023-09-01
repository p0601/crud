<?php
include 'config.php';
include 'form.php';

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = date('y-m-d',strtotime($_POST['date']));
$gender = $_POST['gender'];
$city = $_POST['city'];
$course = $_POST['course'];
$hobbies = $_POST['hobbies'];
$hobbie = implode(",",$hobbies);     // implode function is used to contvert array to string



$insert = "INSERT INTO crud (name,email,number,dob,gender,city,course,hobbies) VALUES ('$name','$email','$number','$date','$gender','$city','$course','$hobbie')";

$res = mysqli_query($con, $insert);

header("location:view.php");

if ($res == 1) {
    echo "Record inserted";
} else {
    echo "record not inserted";
}

?>