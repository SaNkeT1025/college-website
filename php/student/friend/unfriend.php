<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header('Location:../../login/login.php');
}
$connection = mysqli_connect("localhost","root","","college");
if($connection->connect_error)
{
    die("Error in db connection".$conn->connect_error);
}
$fid=$_GET['id'];

$combine=$_SESSION["username"];
$arr=explode(" ",$combine);
$sprn=$arr[0];

$query = "DELETE from requests WHERE user='$sprn' and friendid='$fid' and status='accepted'";
$result = $connection->query($query);
if($result)
{   $query = "DELETE from requests WHERE user='$fid' and friendid='$sprn' and status='accepted'";
    $result = $connection->query($query);
    if($result)
    {
        header('Location:./friends.php');
    }
    else
    {
        $connection->close();
        echo "<script>
        alert('Unknown error occurred');
        window.location.href='./friends.php';
        </script>";
    }
    
}
else
{
    $connection->close();
    echo "<script>
    alert('Unknown error occurred');
    window.location.href='./friends.php';
    </script>";
}

?>
