<?php 
require_once './connection.inc.php';

$sql = "SELECT * from users";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "Error in SQL";
}else{
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)){
        echo $row['username'];
        echo "<br>";
    }
    
}
?>