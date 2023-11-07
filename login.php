<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="nav">



<?php
include('db.php');
include('login_check.php');
if($flag==1){
    header('location:index.php');
}
if(isset($_POST['submit']))
{
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $type=$_POST['type'];
    if($type=='admin')
    {
        $stmt = mysqli_prepare($conn, "SELECT * from admin where username = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $id= $row["uid"];
            $user_name = $row["username"];
            $password = $row['password'];
           
            
            $sql2=mysqli_query($conn,"DELETE from login");
            $stmt = mysqli_prepare($conn, "INSERT into login(id, username, password, type) values(?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "isss", $id, $user_name, $password, $type);
            mysqli_stmt_execute($stmt);
            
            header("location:admin.php");  
            
    
         }
         else{
            echo "<script type='text/javascript'>
                    alert('Wrong user name or password!!')
                    </script>";
        }
    
    }
    else if($type=='seller' || $type== 'customer')
    {
            $stmt = mysqli_prepare($conn, "SELECT * from register where username = ? AND password = ?");
            mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $user_id = $row["uid"];
                $user_name = $row["username"];
                $password = $row['password'];
                $type = $row['type'];

                $sql2=mysqli_query($conn,"DELETE from login");
                $stmt = mysqli_prepare($conn, "INSERT into login(id, username, password, type) values(?, ?, ?, ?)");
                mysqli_stmt_bind_param($stmt, "isss", $user_id, $user_name, $password, $type);
                mysqli_stmt_execute($stmt);
                if($type=='seller')
                {
                    header("location:seller.php");  
                }
                else if($type=='customer')
                {
                    header("location:index.php");  
                }
        
            }
            else{
                echo "<script type='text/javascript'>
                alert('Wrong user name or password!!')
                        </script>";
            }
        
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
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="pass" placeholder="Password" required>
            <select name="type" required>
                <option value="seller">Seller</option>
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>
             <input type="submit" name="submit" value="Login">
             <div class="bottom">
                <p><a class="register-link" href="signup.php">Register</a></p>
             </div>
        </form>
    </div>
</body>
</html>