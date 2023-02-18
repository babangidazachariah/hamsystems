<?php
	require_once("createDatabase.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dictionary Web App</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php
        require_once("header.php");
    ?>
    <div class="row">
        <div class="col-3 menu">
            <ul>
                <li><a href='home.php' class="menuText">Home</a></li>
                <li><a href='register.php' class="menuText">Register</a></li>
                <li><a href='login.php' class="menuText">Login</a></li>
                <li><a href='hyamforum.php' class="menuText">Hyam Forum</a></li>
                
            </ul>
        </div>
    
        <div class="col-6">
            <div class="mainContainer">
                
                <form action="index.php" method="POST">
                    <div class="row">
                        <h1> Dictionary </h1>
                        <input type = "text" id="txtWord" name="txtName" placeholder="Word or Phrase"/>
                        <input type="submit" value="Search" name='btnSearWord' id='btnSearWord'>
                    </div>
                    <div class="row">
                        <h1 id="tltHyamWord"> </h1>
                        <label id="lblHyamMeaning">
                        <h1 id="tltEngWord"> </h1>
                        <label id="lblEngMeaning">  
                        <h1 id="tltExampleUsage"> </h1>
                        <label id="lblExampleUsage">       
                    </div>
                </form>
            </div>
        </div>

        <div class="col-3 right">
            <div class="aside" id='vdoImg'>
                <!--
                <video id="vdoExample" width="100%" controls>
                    <source id="vdoExample" src="videos/mov_bbb.mp4" type="video/mp4">
                    
                    Your browser does not support HTML video.
                </video>
                <img id="imgPictureExample" alt="Picture Showing Word/Phrase" />
                -->
            </div>
        </div>
    </div>

    
    <?php
        require_once('footer.php')
    ?>

</body>
</html>

