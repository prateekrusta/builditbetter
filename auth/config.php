<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'sql12.freesqldatabase.com');
define('DB_USERNAME', 'sql12579871');
define('DB_PASSWORD', 'bMzjcsnss4');
define('DB_NAME', 'sql12579871');
define('PORT_NAME', '3306');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, PORT_NAME);

//Check the connection
if($conn == false){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

?>