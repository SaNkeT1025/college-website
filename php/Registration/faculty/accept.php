<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "college";

    // Create connection
    $conn = new mysqli('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
        $fid = $_GET['id'];
        $sql = "select * from `faculty` where `facultyid` = '$fid'; ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                $password=$row['email']; 
                $email=$row['email']; 
                $sql="UPDATE `faculty` SET `status`='approved',`password`='$password' WHERE `facultyid` = '$fid'";
                $res=$conn->query($sql);
            }
            if($res)
            {
                $conn -> close();
                header('Location:../student/email.php?id='.$email." "."fac");  
            }
            else
            {
                $conn -> close();
                echo "<script>alert('Unknown Error Occurred!!!');
                window.location.href='approvedecline.php';  
                </script>";
            }

        }
?>

