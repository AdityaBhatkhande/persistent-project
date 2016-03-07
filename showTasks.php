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
$sql = "select * from tasks where name ='".$manager."'";
//$sql = "select * from projects where name ='".$manager."' and status = 'pending'";


$result = mysqli_query($conn,$sql);
if ($result) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $i = $i+ 100;
        echo '<div style="color:#aee ; '
        . 'position :relative margin-left:$i; height: 400px ;'
                . 'width:300px ;float:left; content:url(images/notes.jpg) "><a href="deleteTasks.php">Delete</a> '
                . 'Task Id'.$row['taskId'].'<br>Task Name'.$row['taskName'].'<br>Task Description'.$row['taskDesc'].'<br>Project Id: '.$row['projectId'].'<br>Project Manager: '.$row['projectManager'].'<br> Date of start: '.$row['dos'].'<br> Date of Completion: '.$row['doc'].'<br> Status: '.$row['Status'].'<br>Developer Name: '.$row['developerName'].'</div>';
        
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
    


?>