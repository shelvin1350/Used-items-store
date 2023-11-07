<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Pacifico' rel='stylesheet'>

    <style>
        .product-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .product-tile {
            width: 250px;
            border: 1px solid #e0e0e0;
            padding: 15px;
            text-align: center;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
            cursor: pointer;
            background-color: #ffffff;
            border-radius: 5px;
        }

        .product-tile:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .product-tile img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .product-tile img:hover {
            transform: scale(1.05);
        }

        .product-tile h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .product-tile p {
            font-size: 14px;
            color: #555;
        }

        .product-tile button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 16px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            border-radius: 5px;
        }

        .product-tile button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
    include("login_check.php");
?>
<div class="nav">
    <img src="images/ss.png">
    <a href="index.php"><h2 class="menu">Home</h2></a>
    <a href="car.php"><h2 class="menu selected">Cars</h2></a>
    <a href="bike.php"><h2 class="menu">Bikes</h2></a>
    <a href="gadget.php"><h2 class="menu">Gadgets</h2></a>
    <a href="contact.php"><h2 class="menu">Contact Us</h2></a>
    <?php
        include("flag.php");
    ?>
</div>
<div class="product-container">
    <?php
    $sql = mysqli_query($conn, "SELECT * from products where product_type='car'");
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $name = $row['product_name'];
            $price = $row['product_price'];
            $img = $row['product_image'];
            ?>
            <div class="product-tile">
                <img src="images/<?php echo $img ?>">
                <h3><?php echo $name ?></h3>
                <p>Price: Rs. <?php echo $price ?></p>
                <button>Enquire now</button>
            </div>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
