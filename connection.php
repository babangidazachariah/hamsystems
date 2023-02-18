<?php
    $username = "b35bfc72e5de73";
    $pass = "d0de149c"; 
    $host = "us-cdbr-east-06.cleardb.net"; 
    $dbase = "heroku_b1434386a052247"
    // Connect to DB: mysql://b35bfc72e5de73:d0de149c@us-cdbr-east-06.cleardb.net/heroku_b1434386a052247?reconnect=true
    $conn = mysqli_connect($host, $username, $pass, $dbase);

?>
