<?php
/**
 * Created by PhpStorm.
 * User: feel
 * Date: 03.12.13
 * Time: 14:54
 */
if (isset($_POST['edit'])) {
    $con = mysqli_connect("localhost", "root", "1765160", "webdev");

// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = 'INSERT into student values (NULL,"' . $_POST['fio'] . '",' . $_POST['mark'] . ')';
    $result = mysqli_query($con, $query);

    mysqli_close($con);
    header("Location: index.php");
    die();

} else {
    echo "
    <html>
    <head>
    <title>
    Add student
    </title>
    </head>
    <body>
    <form method='POST' action='add.php'>
    <h3>Input name of student and his mark</h3>
    <br>
    Name:<input type='text' name='fio'>
    <br>
    Mark:<input type='text' name='mark'>
    <input type='hidden' name='edit' value='true'>
    <br>
    <input type='submit' value='Send'>
    </form>
    </body>
    </html>";
}
?>