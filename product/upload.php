<?php
    include "includes/connect.php";
    SESSION_start();
    if(isset($_POST['sub'])){
        $pname = $_POST['name'];
        $description = $_POST['desp'];
        $cost = $_POST['cost'];
        $qry = "INSERT INTO `upload` (`pname`, `description` ,`cost`) VALUES ('$pname','$desp','$cost');";
        mysqli_query($qry,$conn);
        header('location:search.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Selling Products</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "includes/header1.php"; ?>
        <div class="start">
            <div class="next">
                <h2>Upload</h2>
                <form action="" method="post">
                    Product name </br> <input type="text" name="name"/></br></br>
                    Description </br> <textarea type="text" colms=20  rows=20 name="desp"></textarea></br></br>
                    Cost </br> <input type="integer" name="cost"/></br></br>
                    <input type="button" name="image" value="choose file"></br></br>
                    <input type="submit" name="sub">
                </form>
            </div>
        </div>
    </body>
</html>