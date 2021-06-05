<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
<body>

<h1>Registration Form</h1>
<hr>

<form>

<table>
<tr>
<td>Full Name:</td>
<td><input type="text" id="fname" name="fname"><br>
</td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" id="email" name="email"><br></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="pass" name="pass"><br></td>
</tr>
<tr>
<td>Comment</td>
<td><textarea name="comm" rows="5" cols="20"></textarea><br></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<input type="radio" id="other" name="gender" value="other">Other
</td>

</tr>

<tr>
<td>Please choose a hobby</td>
<td><input type="checkbox" id="sing" name="sing">Singing
 <input type="checkbox" id="dance" name="dance" >Dancing
 <input type="checkbox" id="read" name="read" >Reading
 </td>
 </tr>

<tr>
<td>Please choose a file</td>
 <td> <input type="file" id="myfile" name="myfile"></td>
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