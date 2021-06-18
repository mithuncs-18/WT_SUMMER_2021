<?php
 
$validatename="";
$validateemail="";
$validatepass="";
$validatecomm="";
$validateradio="";
$validatecheckbox="";
$v1=$v2=$v3="";
$name=$email=$gender=$pass=$comm="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $validatename="your name is " .$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["pass"]))
{
    $validatepass= "please enter password";
}
else{
    $validatepass="your password is " .$_REQUEST["pass"];
}
if(empty($_REQUEST["comm"]))
{
    $validatecomm= "please enter text";
}
else{
    $validatecomm="your comment: " .$_REQUEST["comm"];
}

if(isset($_REQUEST["gender"]))
{
    $validateradio="your gender: " .$_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}
if(!isset($_REQUEST["sing"])&&!isset($_REQUEST["dance"])&&!isset($_REQUEST["read"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["sing"]))
   {
       $v1=$_REQUEST["sing"];
   }
   if(isset($_REQUEST["dance"]))
   { 
       $v2=$_REQUEST["dance"];
   }
   if(isset($_REQUEST["read"]))
   {
    $v3=$_REQUEST["read"];
   }
}
$target_file="files/".$_FILES["filetoupload"]["name"];

if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)){
echo "you have uploaded a file".$_FILES["filetoupload"]["name"];
echo"<img src='".$target_file."'>";
}
else{
    echo"an error uploading file.";
}

}
?>