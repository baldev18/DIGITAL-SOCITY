<?php

    include 'connect.php';

    $a = $_POST["name"];
    $b = $_POST["email"];
    $c = $_POST["phone"];    
    $d = $_POST["password"];
    $e = $_POST["role"];
    $f = $_POST["flat_number"];    

    if($a=="" && $b=="" && $c=="")
    {
        echo "All fields are required.";
    }
    if($d=="" && $e=="" && $f=="")
    {
        echo "All fields are required."; 
    }
    else
    {
        $sql = "INSERT INTO users(name,email,phone,password,role,flat_number) VALUES ('$a', '$b','$c','$d', '$e','$f')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}
