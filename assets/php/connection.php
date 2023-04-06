<?php      
    $host = "127.0.0.1";  
    $user = "root";  
    $password = 'ab3135c2@';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  