<html>
    <body>
        <form method="get">
        <table border="0px" align="center" width="40%" cellspacing="15">
            <tr><td> Project Id</td><td>:</td><td><input type="text"></td> </tr>
            <tr><td>Project id</td><td>:</td><td><input type="text"  name="projectId"/></td></tr>
            <tr><td>Project Name</td><td>:</td><td><input type="text" name="projectName"/></td></tr>
            <tr><td>Date of Start</td><td>:</td><td><input type="date" name="dos"></td></tr>
            <tr><td>Date of Completion </td><td>:</td><td><input type="date" name="doc" /><td></tr>
            <tr><td align=center colspan="3"><input type="submit" name="submit" value="Create Project"/><td></tr>
        </table>
        </form>
    </body>
</html>



<?php

session_start();

if(isset($_GET['submit'])){

$conn = mysqli_connect('localhost:3306','root','');
if(!$conn){
    print 'die';
    die("Connection failed: ".  mysql_error());
}

mysqli_select_db($conn,'persistent');




mysql_close($conn);
    
}

?>