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
print 'in php';

$sql = "select designation,name from employee where username = '".$_POST['username']."' and password = '".$_POST['password']."'";

mysqli_select_db($conn,'persistent');
$result = mysqli_query($conn,$sql);
if ($result) {
    // output data of each row
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $sql = 'update employee set active = true where username = "'.$_POST['username'].'"';
        mysqli_query($conn,$sql);
        $_SESSION['name'] = $row['name'];
        header('location: manager.php');
        
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>