<?php include "control/process.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
<body>

<h1>Registration Form</h1>
<hr>

<form action="action.php" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Full Name:</td>
<td><input type="text" id="fname" name="fname"> <?php echo $validatename; ?><br>
</td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" id="email" name="email"><?php echo $validateemail; ?><br></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="pass" name="pass"><?php echo $validatepass; ?><br></td>
</tr>
<tr>
<td>Comment</td>
<td><textarea name="comm" rows="5" cols="20"></textarea><?php echo $validatecomm; ?><br></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<input type="radio" id="other" name="gender" value="other">Other
<?php echo $validateradio; ?>
<br>
</td>

</tr>

<tr>
<td>Please choose a hobby</td>
<td><input type="checkbox" id="sing" name="sing" value="Singing">Singing
 <input type="checkbox" id="dance" name="dance" value="Dancing">Dancing
 <input type="checkbox" id="read" name="read" value="Reading">Reading
 <?php echo $validatecheckbox; ?>
<?php echo $v1;?>
<?php echo $v2;?>
<?php echo $v3;?>
 </td>
 </tr>
<tr>
<td>Please choose a file</td>
 <td> <input type="file" name="filetoupload" ></td>
 </tr>
 <tr>
 <td>
  <input type="Submit">
<input type="Reset">
 </td>
</table>
</form>
</body>
</html>