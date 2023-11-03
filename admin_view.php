<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_table.css">
    <link href= 
'https://fonts.googleapis.com/css?family=Roboto|Pacifico' 
          rel='stylesheet'>
          
<style>


.form-container {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid #444;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      margin-top: 60px;
      margin-bottom: 60px;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
      width: 95%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #777;
      border-radius: 5px;
      background-color: #444;
      color: #fff;
      margin-right: 10px;
    }

    .form-container input[type="button"] {
      width: 95%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      margin-left: 10px;
    }

    .form-container input[type="button"]:hover {
      background-color: #0056b3;
    }


</style>

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
    <a href="logout.php"><button class="black-button-admin">Logout</button></a>

</div>
     

<?php


$cid=$_POST['button'];
$sql=mysqli_query($conn,"SELECT * from register where uid=$cid");

$row=mysqli_fetch_assoc($sql);

$sid=$row['uid'];
$sname=$row['name'];
$mobile=$row['mobile'];
$email=$row['email'];
$password=$row['password'];
$username=$row['username'];
$type=$row['type'];




?>
     <div class="form-container">   
    <form method="post">
      <label for="customer-id">Customer ID:</label>
      <input type="text" id="customer-id" value="<?php echo $sid ?> " name="customer-id" required>

      <label for="customer-name">Customer Name:</label>
      <input type="text" id="customer-name" name="customer-name" value="<?php echo $sname ?> " required>

      <label for="mobile">Mobile:</label>
      <input type="text" id="mobile" name="mobile" value="<?php echo $mobile ?> " required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value="<?php echo $email ?> " required>

      <label for="password">Password:</label>
      <input type="text" id="password" name="password" value="<?php echo $password ?> " required>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" value="<?php echo $username ?> " required>

      <label for="type">Type:</label>
      <input type="text" id="type" name="type" value="<?php echo $type ?> " required>

      <input type="button" value="Update">
    </form>
</div>
</body>

</html>