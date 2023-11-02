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
           
            $user_name = $row["username"];
            $password = $row['password'];
           

            $sql2=mysqli_query($conn,"DELETE from login");
            $stmt = mysqli_prepare($conn, "INSERT into login(username, password, type) values(?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $user_name, $password, $type);
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
                $user_id = $row["lid"];
                $user_name = $row["username"];
                $password = $row['password'];
                $type = $row['type'];

                $sql2=mysqli_query($conn,"DELETE from login");
                $stmt = mysqli_prepare($conn, "INSERT into login(username, password, type) values(?, ?, ?)");
                mysqli_stmt_bind_param($stmt, "sss", $user_name, $password, $type);
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
        
    }
    else{
        echo "<script type='text/javascript'>
        alert('Wrong user name or password!!')
                </script>";
    }
}

?>
