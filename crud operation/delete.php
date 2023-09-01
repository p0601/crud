<?php

include('config.php');

$id = $_REQUEST['id'];
$del = "DELETE FROM crud WHERE id='$id'";
$res = mysqli_query($con, $del);
if ($res == 1) {
    header("location:view.php");
} else {
    echo "data is not deleted";
}
?>