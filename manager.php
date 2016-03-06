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
        <title>Hello, <?php print $_SESSION['name']."!"; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    </head>
    <body>
        <div class='jumbotron' ><h2 style="position:relative;left:100px">Hello, <?php print $_SESSION['name']."!"; ?></h2></div>
        <div style="position:absolute; height: 80%; width:20%; background:#265a88; top:20%;opacity: 0.7;">
            <br><br>
            <a href="showProject.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Show Project</button>
            <br><br>
            <a href="createProject.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Create Project</button>
            <br><br>
            <a href="addLeaders.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Add Leaders</button>
            <br><br>
            <a href="createTasks.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Create Tasks</button>
            <br><br>
            <a href="assignTasks.php" target="iframe_content" style="color:white; font-size:25px; padding-left: 40px">Assign Tasks</button>
            
        </div>
        <iframe border="0" src="createProject.php" name="iframe_content" style="position:absolute; top:20%; left:20%; height:80%;width:80%">
    </body>
</html>
