<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
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

<a href="index.php"><h2 class="menu">Home</h2></a>
<a href="car.php"><h2 class="menu">Cars</h2></a>
<a href="bike.php"><h2 class="menu">Bikes</h2></a>
<a href="gadget.php"><h2 class="menu">Gadgets</h2></a>
<a href="contact.php"><h2 class="menu selected">Contact Us</h2></a>



<?php
    include ("flag.php");
?>

</div>
     
       

</body>

</html>