
<html>
    <body>
        <form name="input" action="createProject.php" method="post">
            <table border="0px" align="center" cellspacing="15">


                <tr><td>Project Id</td><td><input type="text"  name="projectId"/></td></tr>
                <tr><td>Project Name</td><td><input type="text" name="projectName"/></td></tr>
                <tr><td>Date of Start</td><td><input type="date" name="dos"> </td></tr>
                <tr><td>Date of Completion </td><td><input type="date" name="doc" /><td></tr>
                <td colspan="2" align="center"><button type="submit" name="submit" class="btn-lg"> Submit </button></td>
            </table>
        </form>
    </body>
</html>


<?php
session_start();

if (isset($_POST['submit'])) {

    $conn = mysqli_connect('localhost:3306', 'root', '');
    if (!$conn) {
        print 'die';
        die("Connection failed: " . mysql_error());
    }

    mysqli_select_db($conn, 'persistent');
    $sql1 = "select name, username from employee where active =1";

    $res = mysqli_query($conn, $sql1);
    $projectManager;
    $name;
    while ($rows = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
  
            $name = $rows['name'];
            $projectManager = $rows['username'];
    
    }

    mysqli_select_db($conn, 'persistent');
    $sql = 'insert into projects values(' . $_POST['projectId'] . ',"' . $_POST['projectName'] . '","' . $projectManager . '","' . $name . '","' . $_POST['dos'] . '","' . $_POST['doc'] . '","pending")';

    mysqli_query($conn, $sql);

    mysqli_close($conn);

    echo 'A new Project has been Added';
}
?>

