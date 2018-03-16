<?php
    include "includes/connect.php";
    SESSION_start();

    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $qry = "INSERT INTO `db_user` (`name`, `email` ,`password`) VALUES ('$name','$email','$password');";
        echo $qry;
        mysqli_query($conn,$qry)or die("failed");
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Selling Products</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "includes/header.php"; ?>
        
        <div class="start">
            <div class="next">
                <h2>Register</h2>
                <form action="" method="POST">
                    Name : <input type="text" name="name"/></br></br>
                    email : <input type="text" name="email"/></br></br>
                    Password : <input type="password" name="pass"/></br></br>
                    Retype Password : <input type="password" name="repass"/></br></br>
                    <input type="submit" name="sub">
                </form>
            </div>
        </div>
    </body>
</html>