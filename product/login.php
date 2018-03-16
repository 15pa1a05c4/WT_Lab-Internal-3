<?php
    include "includes/connect.php";
    SESSION_start();

    if(isset($_POST['sub'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $qry = "SELECT * from `db_user` where email='$email' and password='$password';"; 
        $sql=mysqli_query($conn,$qry);
        if(mysqli_num_rows($sql)>0){
            
            header('location:upload.php');
        }
        else{
            $warning="Invalid login";
        }
    }
?>   
<!DOCTYPE html>
<html>
    <head>
        <title>Selling Products</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "includes/header.php" ?>

        <div class="start">
            <div class="next">
                <h2>Login</h2>
                <form action="" method="POST">
                    email : <input type="text" name="name"/></br></br>
                    Password : <input type="password" name="name"/></br></br>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </body>
</html>