<?php
    if(!isset($_SESSION["username"]))
    {
        header('Location:../login/login.php');
    }
    $conn=new mysqli('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');
    if($conn->connect_error)
    {
        die("Error in db connection".$conn->connect_error);
    }
    $sql = "SELECT count(*) as totalnot from circular where read_status=0";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
?>
    <span class="badge"><?php  
        $noti=$row['totalnot'];
        if($noti > 0)
            {
                echo $noti; 
            }
    ?></span>
