<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Health Centre</title>
<h2 align="center"> You have been logged out succesfully. Click <a href="./index.php">here </a> to reuturn.</h2>
<?php
session_unset();
session_destroy();
?>
</head>
<body>
</body>
</html>
