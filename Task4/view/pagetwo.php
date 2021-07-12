<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$firstname=$email="";
$address=$dob=$password=$p1=$p2=$p3="";
$c1=$c2=$c3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $address=$row["address"];
      $password=$row["password"];
      
      if($row["profession"]=="Academian")
      {
        $p1="Academian";
      }
      else if($row["profession"]=="student")
      {
        $p2="student";
      }
      else if($row["profession"]=="Teacher")
      {
        $p3="Teacher";
      }

      if($row["interests"]=="music" )
      { $c1="checked"; }
      if($row["interests"]=="sports")
      { $c2="checked"; }
      if($row["interests"]=="singing")
      { $c3="checked"; }

      if($row["interests"]=="music,sports")
      { $c1="checked";
        $c2="checked";
      }

      if($row["interests"]=="music,singing")
      { $c1="checked";
        $c3="checked";
      }

      if($row["interests"]=="sports,singing")
      { $c2="checked";
        $c3="checked";
      }

      if($row["interests"]=="music,sports,singing")
      { $c2="checked";
        $c3="checked";
        $c1="checked";
      }
  

      $dob=$row["dob"];
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >
<br>
email : <input type='text' name='email' value="<?php echo $email; ?>" >
<br>
DOB : <input type='date' name='dob' value="<?php echo $dob; ?>" >
<br>
Password: <input type='text' name='password' value="<?php echo $password; ?>" >
<br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" >
<br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other

     <br>

    Profession:

      <select name="profession" id="profession">
      <option value='Academian'<?php echo $p1; ?>>Academian</option>
      <option value='student'<?php echo $p2; ?>>student</option>
      <option value='Teacher'<?php echo $p3; ?>>Teacher</option>
      </select>
    <br>

    Interest:
    <input type="checkbox" name="i1"  value='music'<?php echo $c1; ?>>music
    <input type="checkbox" name="i2" value='sports'<?php echo $c2; ?>>sports
    <input type="checkbox" name="i3" value='singing'<?php echo $c3; ?>>singing
    <br>
     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>
