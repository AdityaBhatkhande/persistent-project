

<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    </head>
    <body>
        
<?php

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
        $i = $i+ 30;
?>
        <div style="color:#aee ;position :relative; margin-left:<?php print $i ?>; height: 400px ;width:300px ; float:left; background:url(images/notes.jpg)">
        
            
            <table border="1" style="border-collapse:collapse;" valign="bottom">
                <tr>
                    <td>Task ID</td>
                    <td><?php print $row['taskId']; ?></td>
                </tr>
                <tr>
                    <td>Task Name</td>
                    <td><?php print $row['taskName']; ?></td>
                </tr>
                <tr>
                    <td>Task Description</td>
                    <td><?php print $row['taskDesc']; ?></td>
                </tr>
                <tr>
                    <td>Project ID</td>
                    <td><?php print $row['projectId']; ?></td>
                </tr>
                <tr>
                    <td>Project Manager</td>
                    <td><?php print $row['projectManager']; ?></td>
                </tr>
                <tr>
                    <td>Date of Start</td>
                    <td><?php print $row['dos']; ?></td>
                </tr>
                <tr>
                    <td>Date of Completion</td>
                    <td><?php print $row['doc']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php print $row['status']; ?></td>
                </tr>
                <tr>
                    <td>Developer Name</td>
                    <td><?php print $row['developerName']; ?></td>
                </tr>
            </table>
            <div  style="margin: auto; width:40%; ">
                <button type="button" name="delete" class="btn-lg">Delete</button></div>
        </div>
        
        <?php
         }
} else {
    echo "0 results";
}
mysqli_close($conn);
    


?>
        
    </body>
</html>