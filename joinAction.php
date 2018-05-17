<?php
    $conn = mysqli_connect("localhost", "root", "ehdgh3333", "phpHomePage", 3306);

    if(!$conn){
        echo "Cannot Connect To MySQL";
    }

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];

    $statement = mysqli_prepare($conn, "INSERT INTO user VALUES(?, ?, ?, ?)");

    mysqli_stmt_bind_param($statement, "ssss", $userID, $userPassword, $userName, $userEmail);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;

    


?>

