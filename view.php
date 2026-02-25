<?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $req = mysqli_query($con, $sql);
    $response = array();
    while($row=mysqli_fetch_array($req))
    {
        $value["name"] = $row["name"];
        $value["email"] = $row["email"];
        $value["phone"] = $row["phone"];
        $value["password"] = $row["password"];
        $value["role"] = $row["role"];
        $value["flat_number"] = $row["flat_number"];
        array_push($response, $value);
    }
    
    echo json_encode($response);

?>