<?php
require 'config.php';

$select = "SELECT * FROM crud";
$result = mysqli_query($con, $select);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body bgcolor="#FFE4C4">
    <h1 align="center"> View Page </h1>
    <hr>
    <br>
    <table border="1vh">

        <th>I'd</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Birth Date</th>
        <th>Gender</th>
        <th>City</th>
        <th>Course</th>
        <th>Hobbies</th>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php $id = $row['id']; ?>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['number']; ?>
                </td>
                <td>
                    <?php echo $row['dob']; ?>
                </td>
                <td>
                    <?php echo $row['gender']; ?>
                </td>
                <td>
                    <?php echo $row['city']; ?>
                </td>
                <td>
                    <?php echo $row['course']; ?>
                </td>
                <td>
                    <?php echo $row['hobbies']; ?>
                </td>
                <td><a href="update.php?id=<?php echo $id ?>">Update</td>
                <td><a href="delete.php?id=<?php echo $id ?>">Delete</td>
            </tr>
            <?php
        }
        ?>
        </tr>
    </table>
</body>

</html>