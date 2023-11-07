<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_table.css">
    <link href= 
'https://fonts.googleapis.com/css?family=Roboto|Pacifico' 
          rel='stylesheet'>
          


</head>
<body>
     

<div class="nav">
<?php
    include ("login_check.php");
?>

<img src="images/ss.png">

<a href="seller.php"><h2 class="menu">Add product</h2></a>
<a href="seller_product.php"><h2 class="menu">Products</h2></a>
<a href="seller_orders.php"><h2 class="menu selected">Orders</h2></a>

<a href="#"><h2 class="menu">Contact Us</h2></a>
<?php

include ("flag.php");
$sql1=mysqli_query($conn,"select * from login");
$row1=mysqli_fetch_array($sql1);
$id=$row1['id'];


$stmt = mysqli_query($conn, "SELECT * from products where sid=$id");

$num=mysqli_num_rows($stmt);

       ?>
</div>
<table class="custom-table">
        <thead>
            <tr>
                <th>Product id</th>
                <th>Product Name</th>
                <th>Product price</th>
                <th>product type</th>
                
            </tr>
        </thead>


<?php


if($num > 0)
{
    while($row = mysqli_fetch_assoc($stmt))
    {

$pid=$row['pid'];
$pname=$row['product_name'];
$price=$row['product_price'];
$type=$row['product_type'];



?>

<tbody>
            <tr>
                <td><?php echo $pid ?></td>
                <td><?php echo $pname ?></td>
                <td><?php echo $price ?></td>
                <td><?php echo $type ?></td>
                
                
            </tr>
        
        </tbody>

    <?php
    }
}

?>

        
    </table>   

</body>

</html>