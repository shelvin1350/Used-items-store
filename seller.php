
<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href= 
'https://fonts.googleapis.com/css?family=Roboto|Pacifico' 
          rel='stylesheet'> 

<style>


.form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #222;
    border-radius: 10px;
   
}

h1 {
    font-size: 24px;
}

form {
    display: flex;
    flex-direction: column;
    margin-left: 300px;
    margin-top: 120px;

}

label {
    margin: 10px 0;
}

input, select {
    padding: 10px;
    width: 60%;
    border: none;
    background-color: #333;
    color: #fff;
    border-radius: 5px;
}

select {
    width:62%;
}

button {
    margin: 20px 0;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 300px;
    margin-left: 140px;
}

button:hover {
    background-color: #0056b3;
}
    </style>

</head>
<body>
     
<div class="nav">
<?php
    include ("login_check.php");
?>




       


<img src="images/ss.png">

<a href="seller.php"><h2 class="menu selected">Add product</h2></a>
<a href="seller_product.php"><h2 class="menu">Products</h2></a>
<a href="seller_orders.php"><h2 class="menu">Orders</h2></a>

<a href="#"><h2 class="menu">Contact Us</h2></a>
<?php

include ("flag.php");

       ?>


<?php


if(isset($_POST['submit'])){

   $pname=$_POST['product_name'];
   $price=$_POST['product_price'];
   $pimage=$_POST['img'];
   $ptype=$_POST['product_type'];

    $sql1=mysqli_query($conn,"select * from login");
    $row1=mysqli_fetch_array($sql1);
    $id=$row1['id'];
   $sql=mysqli_query($conn,"INSERT into products(product_name, product_price, product_image, product_type, sid)values('$pname', '$price', '$pimage', '$ptype', $id)");
   if($sql==true){
    echo"<script type='text/javascript'>
            alert 'Product added successfully'
            </script>";
   }
   else{
    echo"<script type='text/javascript'>
            alert 'Failed'
            </script>";
   }
}
?>

</div>
        <form method="post" action="">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
            
            <label for="product_price">Product Price:</label>
            <input type="text" id="product_price" name="product_price" required>
            <label for="product_price">Product Image:</label>
            <input type="file" name="img">
            <label for="product_type">Product Type:</label>
            <select id="product_type" name="product_type">
                <option value="car">Car</option>
                <option value="bike">Bike</option>
                <option value="gadgets">Gadgets</option>
            </select>
            
            <button type="submit" name="submit">Submit</button>
        </form>

</body>

</html>