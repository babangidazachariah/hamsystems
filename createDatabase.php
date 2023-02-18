<?php
    require_once("connection.php");
    
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
                                                        
   
    $conn->mysqli($sql); 
?>
