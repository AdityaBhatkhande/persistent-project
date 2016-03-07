<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$conn = mysqli_connect('localhost:3306','root','');
if(!$conn){
    print 'die';
    die("Connection failed: ".  mysqli_error());
}

mysqli_select_db($conn,'persistent');
$sql1 = "select name from employee where active =1";

$res = mysqli_query($conn,$sql1);
$manager;
while($rows = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
   $manager = $rows['name']; 
}
$sql = "select * from projects where name ='".$manager."'";
//$sql = "select * from projects where name ='".$manager."' and status = 'pending'";


$result = mysqli_query($conn,$sql);

mysqli_close($conn);
    


?>
