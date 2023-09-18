<?php
$name="root";
$password="";
$server='localhost';
$db='contactform';

$con=mysqli_connect($server,$name,$password,$db);
if(!$con){
    echo mysqli_connect_error($con);
}
