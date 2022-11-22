<?php

$names = $_POST['names'];
$email = $_POST['email'];
$subjects = $_POST['subjects'];
$messages = $_POST['messages'];

if(!empty($names) || !empty($email) || !empty($subjects) || !empty($messages) )
{
    $host = "localhost";
    $dbname = "owasp";
    $dbUsername = "root";
    $dbPassword = "";
    

    $conn = mysqli_connect(hostname: $host, username: $dbUsername, password: $dbPassword, database: $dbname);
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