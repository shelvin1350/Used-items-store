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
     

<?php
include ("db.php");
$stmt = mysqli_prepare($conn, "SELECT * from login where type='admin'");

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$sql=mysqli_fetch_array($result);
if(mysqli_num_rows($result) <= 0)
{

    header ("location:login.php");
}
?>


<div class="nav-admin">


    <img src="images/ss.png">

    <a href="admin.php"><h2 class="menu">Sellers</h2></a>
    <a href="admin_customer.php"><h2 class="menu selected">Customers</h2></a>
    <a href="admin_orders.php"><h2 class="menu">Orders</h2></a>
    <a href="admin_Cart.php"><h2 class="menu">Cart</h2></a>
    <a href="contact.php"><h2 class="menu">Contact Us</h2></a>

</div>
     
<table class="custom-table">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Password</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>123-456-7890</td>
                <td>john.doe@example.com</td>
                <td>*******</td>
                <td>johndoe123</td>
                <td>hai</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>   

</body>

</html>