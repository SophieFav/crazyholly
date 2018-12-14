<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
session_unset();
session_destroy();
header('location: index.php');
?>
</body>
</html>