<?php
    $username = "b35bfc72e5de73";
    $pass = "d0de149c"; 
    $host = "us-cdbr-east-06.cleardb.net"; 
    $dbase = "heroku_b1434386a052247";
    // Connect to DB: mysql://b35bfc72e5de73:d0de149c@us-cdbr-east-06.cleardb.net/heroku_b1434386a052247?reconnect=true
    
    $conn = mysqli_connect($host, $username, $pass, $dbase);
   
    //mysql://b35bfc72e5de73:d0de149c@us-cdbr-east-06.cleardb.net/heroku_b1434386a052247?reconnect=true
    //$con = new mysqli("heroku_b1434386a052247", "b35bfc72e5de73", "d0de149c", "heroku_b1434386a052247" ); 
    
    if($con->con_errno){

        print("Failed to connect to MySQL: " . $con->connect_error);
        exit();
    }
?>
