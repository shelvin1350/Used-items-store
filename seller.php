
<!DOCTYPE html>
<html>
<head>
    <title>Used items store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href= 
'https://fonts.googleapis.com/css?family=Roboto|Pacifico' 
          rel='stylesheet'> 

<style>

body {
    background-color: #000;
    color: #fff;
}
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
    width:650px;
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
    margin-left: 200px;
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


<?php
       if($flag==1){
            ?>
            
            <a style="margin-left:630px;" href="logout.php"><input type="button" value="logout"></a>
       
            <?php
        }
        else{
            ?>
    
            <a href="login.php"><input type="button" value="login"></a>
            <?php
        }
?>

</div>
        <form>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
            
            <label for="product_price">Product Price:</label>
            <input type="text" id="product_price" name="product_price" required>
            
            <label for="product_type">Product Type:</label>
            <select id="product_type" name="product_type">
                <option value="car">Car</option>
                <option value="bike">Bike</option>
                <option value="gadgets">Gadgets</option>
            </select>
            
            <button type="submit">Submit</button>
        </form>

</body>

</html>