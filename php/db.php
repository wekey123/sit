<?php
//OB START
ob_start();
//SESSION START
session_start();
//ERROR REPORTING
error_reporting(0);

$servername="localhost";
$username="root";
$password="";
$dbname="od";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
include 'php/functions.php';

?>