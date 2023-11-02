<?php
include ("db.php");
$stmt = mysqli_prepare($conn, "SELECT * from login");

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$sql=mysqli_fetch_array($result);
// $sql=mysqli_query($conn, "SELECT * from login");
if(mysqli_num_rows($result) > 0 && $sql['type']!='admin')
{

    $flag=1;
}
else if(mysqli_num_rows($result) > 0 && $sql['type']=='admin')
{
    mysqli_query($conn,'DELETE from login');
    $flag=0;    
}
else{
    $flag=0;
}
?>