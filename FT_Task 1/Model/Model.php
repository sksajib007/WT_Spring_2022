<?php

class db{

function opencon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";


    $conn = new mysqli($servername,$username,$password,$dbname);

    return $conn;

}

function insertRow($conn,$tablename,$fname,$lname,$age,$salary,$address)
{
    $result=$conn->query("INSERT INTO $tablename VALUES('$fname','$lname',$age,$salary,'$address')");
    return $result;
    
    
}

function fetchRow($conn,$tablename)
{
    $result = $conn->query("SELECT * FROM  $tablename");
    return $result;

    
}

function searchRow($conn,$tablename,$search)
{
    $result = $conn->query("SELECT * FROM $tablename WHERE fname LIKE '$search';");
    return $result;
}
function updateRow($conn,$tablename,$search,$new_salary){
    $result = $conn->query("UPDATE person SET salary = $new_salary WHERE fname LIKE '$search' ;");
    return $result;
}

function closecon($conn)
{
    $conn->close();
}

}

?>