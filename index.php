<!DOCTYPE html>
<html>
<head>
	<title>NotePad EX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex,follow' />
	<link rel="sortcut icon" href="app/system/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="app/system/css/style.css">
	<link rel="stylesheet" type="text/css" href="app/system/css/style_mobile.css">
	<link rel="stylesheet" type="text/css" href="app/system/css/style_desktop.css">
	<?php include("app/system/php/theme_style.php"); ?>
    <?php include("app/system/php/colors_blocks.php"); ?>
	<?php
        $receive_validator_login = true;
        function BodyColor($receive){
           if($receive == false){
               echo ' style="background:#333;" ';
           }
        }
	?>
</head>
<body <?php BodyColor($receive_validator_login); ?> >

    <?php
        
        if($receive_validator_login == true){
            include("app/system/page-home.php");
        }else{
            include("app/system/page-login.php");
        }

    ?>
    
    <script type="text/javascript" src="app/system/javascript/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="app/system/javascript/script.js"></script>
</body>
</html>