<?php

$subjectss = $_POST['subjectss'];
$messagess = $_POST['messagess'];

if(!empty($subjectss) || !empty($messagess) )
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
        $sql = "INSERT INTO suggestions (subjects, suggestions) VALUES (?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if ( ! mysqli_stmt_prepare($stmt, $sql)) {
         
            die(mysqli_error($conn));
        }
        
        mysqli_stmt_bind_param($stmt, "ss",
                               $subjectss,
                               $messagess);
        
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