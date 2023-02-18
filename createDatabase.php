<?php
    $db = mysql_connect("localhost","root") or die ('Unable to connect. Check your connection parameters or '.mysql_error($db));
    $sql= "CREATE DATABASE IF NOT EXISTS HyamdaDatabase";
    mysql_query($sql, $db) or die(mysql_error($db));
    //make sure our recently created database is the active one
    mysql_select_db('HyamdaDatabase', $db) or die(mysql_error($db));
    
    $sql = "CREATE TABLE IF NOT EXISTS tblWords (wordID INTEGER NOT NULL AUTO_INCREMENT,														
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