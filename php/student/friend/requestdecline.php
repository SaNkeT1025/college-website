<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header('Location:../../login/login.php');
    }
    $combine=$_SESSION["username"];
    $arr=explode(" ",$combine);
    $sprn=$arr[0];

    $targetprn=$_GET['id'];
    $connection = mysqli_connect('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');
    if($connection->connect_error)
    {
        die("Error in db connection".$conn->connect_error);
    }
    $query = "DELETE FROM requests where user='$targetprn' and friendid='$sprn' and status='pending'";
    $result = $connection->query($query);
    if($result)
    {
        $connection->close();
        echo "<script>
        window.location.href='./arrivedrequest.php';</script>";
    }
    else
    {
        $connection->close();
        echo "<script>
        alert('Unknown error occurred!!');
        window.location.href='./arrivedrequest.php';</script>";
    }


?>
