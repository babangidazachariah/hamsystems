<?php
    require_once("connection.php");
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
