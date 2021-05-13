<html>
<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body bgcolor="#423126">

<?php
require_once "base.php";
$link = connect();
$id = $_GET["id"];
$mas = get_information_for_character($link, $id);
echo "<p class='title'> $mas[0]</p>" . '</br>';

if($mas[1]){
echo "<p class='titleSmall'>Портрет</p>" . '</br>';
	echo $mas[1];
}
if($mas[2]){
echo "<p class='titleSmall'>Другие герои об этом персонаже</p>" . '</br>';
	echo $mas[2];
}
if($mas[3]){
echo "<p class='titleSmall'>Любовь в жизни персонажа</p>" . '</br>';
	echo $mas[3];
}
if($mas[4]){
echo "<p class='titleSmall'>Судьба</p>" . '</br>';
	echo $mas[4];
}
if($mas[5]){
echo "<p class='titleSmall'>Роль в книге</p>" . '</br>';
	echo $mas[5];
}
if($mas[6]){
echo "<p class='titleSmall'>Отношение автора к этому герою</p>" . '</br>';
	echo $mas[6];
}
if($mas[7]){
echo "<p class='titleSmall'>Прототип</p>" . '</br>';
	echo $mas[7];
}
?>
</body>
</html>