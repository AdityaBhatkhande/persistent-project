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

$sql1 = "update employee set active = 0 where active = 1";

mysqli_query($conn,$sql1);
echo '  <html> <body> alert("Logging out session?") </body><html>';

header('Location: index.html');
mysqli_close($conn);

?>