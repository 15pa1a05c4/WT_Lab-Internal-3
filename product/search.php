<?php
    include "includes/connect.php";
    SESSION_start(); 
    if(isset($POST['sub'])){
        $pname= $POST['name'];
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Selling Products</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include "includes/header1.php"; ?>
        <div class="start">
            <div class="next">
        <h2>Search</h2>
        <?php 
           $qry= "SELECT * from upload where name='$pname';";
           $sql=mysqli_query($conn,$qry); 
           if(mysqli_num_rows($sql)>0){
               while($row=mysqli_fetch_assoc($sql)){
                    $pname=$row['name'];
                    $description=$row['description'];
                    $cost=$row['cost'];
                    echo "<p>$pname</p>";
                    echo "<p>$descrption</p>";
                    echo "<p>$cost</p>";
               }
           }
        ?>
        <button onclick="myFunction()">Sell</button>
        <script>
        function myFunction(){
            alert("Done");
        }
        </script>
        </div>
    </div>
    </body>
</html>