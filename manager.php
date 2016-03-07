<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

?>

<html>
    <head>
        <title><?php print $_SESSION['name']."!"; ?></title>
        <script type="text/javascript">
            function confirmLogout(){
                var a = alert("Are you sure want to logout? ");
                
                if(a == true){
                    window.location.assign("localhost/Persistent Project/logout.php");
                }
            }
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    </head>
    <body>
        <div class='jumbotron' ><h1 style="position:relative;left:100px">Hello, <?php print $_SESSION['name']."!"; ?></h1></div>
        <div style="position:absolute; height: 80%; width:20%; background:#265a88; top:20%;opacity: 0.4;">
            <br><br>
            <a href="showProject.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Show Project</button>
            <br><br>
            <a href="createProject.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Create Project</button>
            <br><br>
            <a href="createTasks.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Create Tasks</button>
            <br><br>
            <a href="showTasks.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Show Tasks</button>
            <br><br>
            <a href="myDashboard.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">My Dashboard</button>
            <br><br>
            <a href="developers.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Developers</button>
            <br><br>
            <a href="logout.php" style="color:white; font-size:25px; padding-left: 40px" onclick="return confirmLogout()">Logout</button>
            <br><br>
            
        </div>
        <iframe src="createProject.php" name="iframe_content" style="position:absolute; top:20%; left:20%; height:80%;width:80%">
    </body>
</html>
