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
    die("Connection failed: ".  mysql_error());
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
if ($result) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $i = $i+ 50;
        echo '<div style="color:white ; position :relative; height:250px; width:300px; margin-left:'.$i.'; margin-top: 20px ;float:left; background: url(images/notes.jpg); "> <table border=0><tr><td>Project Name</td><td>:</td><td> '.$row['projectName'].'</td></tr><tr><td> Date of start</td><td>:</td><td> '.$row['dos'].'</td></tr><tr><td> Date of Completion</td><td>:</td><td> '.$row['doc'].'</td></tr><tr><td> Status</td><td>:</td><td> '.$row['status'].'</td></tr></table></div>';
        
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
    


?>