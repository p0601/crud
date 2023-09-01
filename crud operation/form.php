<html>

<head>
    <title>Form Registration</title>
</head>

<body bgcolor="cyan">
    <h1 align="center">Registration Form</h1>
    <hr>
    <br><br>
    <center>
        <form method="post" action="insert.php">
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td>Contact : </td>
                    <td><input type="number" name="number" id="number" required></td>
                </tr>
                <tr>
                    <td>Birthdate : </td>
                    <td><input type="date" name="date" id="dob" required></td>
                </tr>
                <tr>
                    <td>City : </td>
                    <td><input type="text" name="city" id="city"></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="male" required>Male
                        <input type="radio" name="gender" id="gender" value="female" required>Female
                        <input type="radio" name="gender" id="gender" value="other" required>Other
                    </td>
                </tr>
<tr>
    <td>Select Course:  </td>

<td>
<select name="course">
<option value=""></option>
<option value="bca">BCA</option>
<option value="bba">BBA</option>
<option value="bcom">Bcom</option>
</select>
</td>

</tr>

<tr>
<td>Hobbies :</td>
<td><input type="checkbox" name="hobbies[]" value="music">Music
<input type="checkbox" name="hobbies[]" value="cricket">Cricket
<input type="checkbox" name="hobbies[]" value="reading">Reading</td>
    </tr>

</table>

<br><br>
                 <input type="submit" name="submit" value="submit">&nbsp &nbsp &nbsp
                 <input type="reset" name="reset" value="reset">
                
        </form>
    </center>
</body>

</html>