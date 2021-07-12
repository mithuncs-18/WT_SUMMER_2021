<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$interest ="";
if(isset($_POST["i1"]) )
{
    $interest =$interest."music";
}
if(isset($_POST["i2"]) )
{
    $interest =$interest.",sports";
}
if(isset($_POST["i3"]) )
{
    $interest =$interest.",singing";
}


$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['dob'],$_POST['password'],$_POST['address'],$_POST['gender'],$_POST['profession'],$interest);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>