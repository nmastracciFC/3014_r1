<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');

confirm_logged_in();

$theHour = date('G');

if ( $theHour >= 3 && $theHour <= 11 ) {
	$greeting = "Salute the Sun! It's rising JUST for you!";
} else if ( $theHour >= 12 && $theHour <= 18 ) {
	$greeting = "Feeling like a nap? It must be the afternoon.";
} else if ( $theHour >= 19 || $theHour <= 2 ) {
	$greeting = "My, you're working late! Go to sleep. It's night time!";
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS Portal Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<h1>Welcome <?php echo $_SESSION['user_name'];?></h1>


	<?php echo "<h2> Hi {$_SESSION['user_name']}</h2>";  ?>
	<?php echo "<h2> You were last logged in at: {$_SESSION['user_lastlog']}</h2>";  ?>
	<?php echo $greeting; ?> <?php date_default_timezone_set("America/New_York"); echo "The time is " . date("h:ia");?>
		
</body>
</html>