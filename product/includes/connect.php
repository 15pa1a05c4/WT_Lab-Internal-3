<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="db_pro";
    $conn = mysqli_connect($servername,$username,$password) or die ('Connection failed : ');
    mysqli_select_db($conn,$db);
?> 