<?php
include("db.php");
$sql=mysqli_query($conn,"delete from login");
header("location:index.php");
?>