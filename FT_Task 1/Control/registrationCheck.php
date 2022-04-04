<?php
include ("../Model/Model.php");
$error="";
$fname="";
$lname="";
$age="";
$salary="";
$address="";



if(isset($_POST["Submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $salary=$_POST["salary"];
    $address=$_POST["address"];

    $dbobj = new db();
    $conobj=$dbobj->opencon();
    $userQuery=$dbobj->insertRow($conobj,"person",$fname,$lname,$age,$salary,$address);
    $dbobj ->closecon($conobj);
        
    

}

?>
