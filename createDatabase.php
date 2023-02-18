<?php
    //mysql://b35bfc72e5de73:d0de149c@us-cdbr-east-06.cleardb.net/heroku_b1434386a052247?reconnect=true
    $con = new mysqli("heroku_b1434386a052247","b35bfc72e5de73","d0de149c","heroku_b1434386a052247" ); //or die ('Unable to connect. Check your connection parameters or '.mysql_error($db));
    if($con->con_errno){

        print("Failed to connect to MySQL: " . $con->connect_error);
        exit();
    }
    //$sql= "CREATE DATABASE IF NOT EXISTS HyamdaDatabase";
    //$con->mysqli_query($sql); 
    //make sure our recently created database is the active one
    //mysqli_select_db('HyamdaDatabase', $db); 
    
    $sql = "CREATE TABLE IF NOT EXISTS tbltesWords (wordID INTEGER NOT NULL AUTO_INCREMENT,														
                                                        word VARCHAR(50) NOT NULL,
                                                        morphology VARCHAR(50) NOT NULL,
                                                        partOfSpeech VARCHAR(20) NOT NULL,
                                                        singularPlural INTEGER NOT NULL,
                                                        meaning VARCHAR(100) NOT NULL,
                                                        exampleUsage VARCHAR(100),
                                                        explanations VARCHAR(100),
                                                        PRIMARY KEY (wordID)
                                                        )
                                                        ENGINE=MyISAM";
                                                        
    mysql_query($sql, $db) or die(mysql_error($db));
?>
