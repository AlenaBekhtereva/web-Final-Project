<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require_once "base.php";
$name = str_replace("_", " ", $_GET["name"]);
echo $name;
?>
</body>
</html>
