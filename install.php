<!DOCTYPE html>
<html>
<head>
	<title>NotePadex Install</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex,follow' />
	<link rel="sortcut icon" href="app/system/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="app/system/css/style_install.css">
</head>
<body>
   
    <?php
      
        $file_name = 'configx.php';

        if (!file_exists($file_name)) {
            include("app/system/page-install.php");
        } else{

        }
   
    ?>

    <script type="text/javascript" src="app/system/javascript/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="app/system/javascript/script-install.js"></script>

</body>
</html>