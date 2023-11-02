
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="nav">
<?php
include('db.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$type=$_POST['type'];

if($password==$cpassword)
{
    $sql = mysqli_query($conn, "insert into used_items.register(name, mobile, email, password, username, type) values('$name', '$mobile', '$email', '$password', '$email', '$type')");
    if($sql==true)
    {
        echo "<script type='text/javascript'>
        alert('Registration successfull')
        </script>";
        header('Refresh:0.5; url=login.php');
    }
    else
    {
        echo "<script type='text/javascript'>
                alert('Registration failed')
                </script>";
    }
}

else 
{
    echo ("Password doesn't match");
}
}
?>

<img src="images/ss.png">

<a href="index.php"><h2 class="menu">Home</h2></a>
<a href="car.php"><h2 class="menu">Cars</h2></a>
<a href="bike.php"><h2 class="menu">Bikes</h2></a>
<a href="gadget.php"><h2 class="menu">Gadgets</h2></a>
<a href="contact.php"><h2 class="menu">Contact Us</h2></a>

</div>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="mobile" placeholder="Mobile" required>
            <input type="email" name="email" placeholder="Email" required>
           
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <select name="type" required>
                <option value="" disabled selected>select the type</option>
                <option value="seller">Seller</option>
                <option value="customer">Customer</option>
            </select>
            <input type="submit" name="submit" value="Register">
        </form>
        <div class="bottom-text-box">
            <p><a class="login-link" href="login.php">Already have an account? Login</a></p>
        </div>
    </div>
</body>
</html>
