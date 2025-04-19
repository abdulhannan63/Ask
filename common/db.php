<?php
$host="localhost";
$username="root";
$password="";
$d_base="form";

$conn = new mysqli($host,$username,$password,$d_base);

if($conn->connect_error){
    die("not connected with DB".$conn->connect_error);
}
// echo "connected";
?>