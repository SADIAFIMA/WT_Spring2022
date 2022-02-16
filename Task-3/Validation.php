<?php
$validatename="";
$validateage="";
$validateemail="";
$validatepassword="";
$validatedesignation="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3=$v4=$v5="";
$name=$age=$email=$password=$designation"";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "All names must be more than 5 characters";

}
else
{
    $name=$_REQUEST["fname"];
}


if(empty($_REQUEST["age"]) || (strlen($_REQUEST["age"])<3))
{
    $validateage= "all fields are required";

}
else
{
    $age=$_REQUEST["age"];
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="all fields are required";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<3))
{
    $validatepassword= "All names must be more than 5 characters";

}
else
{
    $password=$_REQUEST["password"];
}

if(!isset($_REQUEST["vehicle1"])&&!isset($_REQUEST["vehicle2"])&&!isset($_REQUEST["vehicle3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["vehicle1"]))
   {
       $v1= $_REQUEST["vehicle1"];
   }
   if(isset($_REQUEST["vehicle2"]))
   { 
       $v2= $_REQUEST["vehicle2"];
   }
   if(isset($_REQUEST["vehicle3"]))
   {
       $v3= $_REQUEST["vehicle3"];
   }
   if(isset($_REQUEST["vehicle4"]))
   { 
       $v4= $_REQUEST["vehicle4"];
   }
}
if(isset($_REQUEST["designation"]))
{
    $validateradio= $_REQUEST["designation"];
}
else{
    $validateradio= "please select at least one radio";
}

}
?>