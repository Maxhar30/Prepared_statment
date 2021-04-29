<?php 
require_once 'connection.inc.php';
if(isset($_GET['name'])){
    $name = mysqli_real_escape_string($conn, $_GET["name"]);
    $email = mysqli_real_escape_string($conn, $_GET["email"]);
    $sql = "INSERT into users (username, email) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Error";
    }else{
        mysqli_stmt_bind_param($stmt, "ss",$name, $email);
        $result = mysqli_stmt_execute($stmt);
        if($result){
            echo "Done";
        }
    }
}

?>