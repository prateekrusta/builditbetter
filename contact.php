<?php

$names = $_POST['names'];
$email = $_POST['email'];
$subjects = $_POST['subjects'];
$messages = $_POST['messages'];

if(!empty($names) || !empty($email) || !empty($subjects) || !empty($messages) )
{
    $host = "sql12.freesqldatabase.com";
    $dbname = "sql12579871";
    $dbUsername = "sql12579871";
    $dbPassword = "bMzjcsnss4";
    $dbPort = "3306";
    

    $conn = mysqli_connect(hostname: $host, username: $dbUsername, password: $dbPassword, database: $dbname, port: $dbPort);
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO contactinfo (names, email, subjects, messages) VALUES (?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if ( ! mysqli_stmt_prepare($stmt, $sql)) {
         
            die(mysqli_error($conn));
        }
        
        mysqli_stmt_bind_param($stmt, "ssss",
                               $names,
                               $email,
                               $subjects,
                               $messages);
        
        mysqli_stmt_execute($stmt);
        
        echo "Record saved.";
        
        $stmt->close();
        $conn->close();
       }
   }
else{
    echo "All field are required";
    die();
}

?>