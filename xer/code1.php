<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8" http-equiv="Content-type" content="text/html"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>xren</title>
</head>
<body>
<a href="xer.php">главная</a>
<div>
<?php
echo $_GET['username']."<br/>";
$user=trim($_GET['username']);
if($user=='partonio')
{
    echo 'норм';
}
else{ 
    echo 'херня';
}
?>
</div>
</body>
</html>