
<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href= 
'https://fonts.googleapis.com/css?family=Roboto|Pacifico' 
          rel='stylesheet'> 
</head>


<style>

.product-tile {
    width: 250px; 
    border: 1px solid #ccc;
    padding: 10px; 
    text-align: center;
    display: inline-block; 
    margin: 10px; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    margin-left: 30px;

}


.product-tile img {
    max-width: 100%; 
    height: auto; 
    display: block; 
    margin: 0 auto; 
}


.product-tile h3 {
    font-size: 18px; 
    margin: 10px 0; 
}


.product-tile p {
    font-size: 14px;
    color: #333; 
    margin: 5px 0;
}

.product-tile button {
    background-color: #007bff; 
    color: #fff; 
    border: none; 
    padding: 8px 16px; 
    font-size: 14px; 
    cursor: pointer; 
}

.product-tile button:hover {
    background-color: #0056b3; 
}


</style>
<body>
    
<?php
    include ("login_check.php");
?>

<div class="nav">

<img src="images/ss.png">

<a href="index.php"><h2 class="menu">Home</h2></a>
<a href="car.php"><h2 class="menu">Cars</h2></a>
<a href="bike.php"><h2 class="menu">Bikes</h2></a>
<a href="gadget.php"><h2 class="menu selected">Gadgets</h2></a>
<a href="contact.php"><h2 class="menu">Contact Us</h2></a>


<?php
    include ("flag.php");
?>

</div>
     
<div class="product-tile">
        <img src="images/thar.jpg">
        <h3>Product Name</h3>
        <p>Price: $19.99</p>
        <button>Add to Cart</button>
    </div>

</body>

</html>