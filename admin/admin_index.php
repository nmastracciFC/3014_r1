<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');

confirm_logged_in();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS Portal Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<h1>Welcome <?php echo {$_SESSION['user_name']}?></h1>


	<?php echo "<h2> Hi {$_SESSION['user_name']}</h2>"  ?>
	
</body>
</html>