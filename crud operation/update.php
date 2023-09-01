<?php session_start() ?>
<?php
include('config.php');
$id = $_REQUEST['id'];
$select = "SELECT * FROM crud WHERE id=$id";
$res = mysqli_query($con, $select);
$fetch = mysqli_fetch_array($res);
$a = $fetch['hobbies'];
$b = explode(",",$a);
?>

<html>

<head>
    <title>Form Registration</title>
</head>

<body bgcolor="#FFCCFF">
    <h1 align="center">Registration Form</h1>
    <hr>
    <br><br>
    <center>
        <form action="update_details.php?id=<?php echo $fetch['id'] ?>" method="post">

            Name :
            <input type="text" name="name" id="name" value="<?php echo $fetch["name"]; ?>" required> <br><br>

            Email :
            <input type="email" name="email" value="<?php echo $fetch["email"]; ?>" required></td> <br><br>

            Contact :
            <input type="number" name="number" value="<?php echo $fetch["number"]; ?>" required> <br><br>
            Birthdate :
            <input type="date" name="date" value="<?php echo $fetch["dob"]; ?>" required> <br><br>

            City :
            <input type="text" name="city" value="<?php echo $fetch["city"]; ?>"> <br><br>
            <tr>
                <td> Gender : </td>
                <td> <input type="radio" name="gender" value="male" <?php echo ($fetch['gender'] == "male") ? "checked" : "" ?> required>Male

                    <input type="radio" name="gender" value="female" <?php echo ($fetch['gender'] == "female") ? "checked" : "" ?> required>Female

                    <input type="radio" name="gender" value="other" <?php echo ($fetch['gender'] == "other") ? "checked" : "" ?> required>Other

                </td>
            </tr><br><br>
<tr>
    <td>Select Course:  </td>

<td>
<select name="course">
<option value=""></option>
<option value="bca" <?php echo ($fetch['course'] == "bca") ? "selected" : "" ?> >BCA</option>
<option value="bba" <?php echo ($fetch['course'] == "bba") ? "selected" : "" ?> >BBA</option>
<option value="bcom" <?php echo ($fetch['course'] == "bcom") ? "selected" : "" ?> >Bcom</option>
</select>
</td>

</tr>
<br><br>
<tr>
<td>Hobbies :</td>
<td><input type="checkbox" name="hobbies[]" value="music" <?php if(in_array("music",$b)){echo "checked";} ?> >Music
    <!--  in_array (pela je string search karavi hoy te,pachi je variable mathi search karavu hoy te) -->
<input type="checkbox" name="hobbies[]" value="cricket" <?php if(in_array("cricket",$b)){echo "checked";} ?>>Cricket
<input type="checkbox" name="hobbies[]" value="reading" <?php if(in_array("reading",$b)){echo "checked";} ?>>Reading</td>
    </tr>
            <br><br>
            <input type="submit" value="Update">
    </center>
    </form>


</body>

</html>