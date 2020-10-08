<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8" http-equiv="Content-type" content="text/html"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>xren</title>
</head>
<body>
    <form action="code1.php" method="GET" enctype="multipart/form-data">
    <input placeholder="поле" type="text"  name="username" value=""/>
    <div>
        <input type="password" name="userpass">
    </div>
    <div>
        <p><input type="radio" name="one" value="">фигня</p>
        <p><input checked type="radio" name="one" value="">херня</p>
    </div>
    <div class="two">
        <h2>второе радио</h2>
        <p><input type="radio" name="two" value="">херня</p>
        <p><input type="radio" name="two" value="">фигня</p>
    </div>
    <div class="free">
        <h2>галочки</h2>
        <p><input type="checkbox" checked name="box" value="">фигня</p>
        <p><input type="checkbox" name="box1" value="">фиг ня</p>
        <p><input type="checkbox" name="box2" value="">фи гня</p>
    </div>
    <div class="foto">
        <p><input type="file" name="foto" value=""></p>
    </div>
    <div>
        <textarea name="text"></textarea>
    </div>
    <div>
    <select name="color">
        <option value="red">красный </option>
        <option selected value="green">зеленый</option>
        <option value="black">черный</option>
    </select>
    </div>
    <div>
        <button type="reset">очистить</button>
        <button type="submit">отправить</button>
    </div>
    </form>
    <pre>
    <?php 
    $ser=array('федя','вася','леша');
    
    print_r($ser) 
    
   /* echo 'хрень'."<br/>";
    require 'code1.php';
    echo "<br/>";
    require 'code1.php';
    */
    ?></pre>
      </br>
    <?php
   
    echo $ser[2];
    echo"</br>";
    var_dump($ser)
    ?>
<?php
$db=mysqli_connect('127.0.0.1','root','0238994Tk','blume1');
if($db==false){
    echo 'вы не подключены';
   
}
echo '<hr>';
echo 'норм'."</br>";
$datab= mysqli_query($db, "SELECT*FROM 'blume'");
//$datab1=mysqli_fetch_assoc($datab);
while ($real=mysqli_fetch_assoc($datab))
{
print_r($real) ;

}

//print_r($real);
//require 'code.php';



?>
</body>
</html>