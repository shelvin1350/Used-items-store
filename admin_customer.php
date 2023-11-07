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
$sql=mysqli_query($conn,"SELECT * from register where type='customer'");
$num=mysqli_num_rows($sql);
$sql1=mysqli_query($conn,"SELECT * from register where type='seller'");
$num1=mysqli_num_rows($sql1);

?>


<div class="nav-admin">


    <img src="images/ss.png">

    <a href="admin.php"><h2 class="menu">Sellers(<?php echo $num1 ?>)</h2></a>
    <a href="admin_customer.php"><h2 class="menu selected">Customers(<?php echo $num ?>)</h2></a>
    <a href="admin_orders.php"><h2 class="menu">Orders</h2></a>
    <a href="admin_Cart.php"><h2 class="menu">Cart</h2></a>
    <a href="contact.php"><h2 class="menu">Contact Us</h2></a>
    <a href="logout.php"><button class="black-button-admin">Logout</button></a>

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


<?php


if($num > 0)
{
    while($row = mysqli_fetch_assoc($sql))
    {

$sid=$row['uid'];
$sname=$row['name'];
$mob=$row['mobile'];
$email=$row['email'];
$password=$row['password'];
$user=$row['username'];


?>
<form method="post" action="admin_view.php">
<tbody>
            <tr>
                <td><?php echo $sid ?></td>
                <td><?php echo $sname ?></td>
                <td><?php echo $mob ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $user ?></td>
                <?php echo '<td><input type="hidden" name="button" value="' . $sid . '"><input type="submit" class="black-button" value="View"></td>' ?>;
            </tr>
        
        </tbody>
    </form>
    <?php
    }
}
?>

        
    </table>   

</body>

</html>