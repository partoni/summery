<?php
echo time()."</br>";
echo date('d:m:Y i-s')."</br>";
/*setlocale( LC_TIME, 'ru_RU.UTF-8');
var_dump(setlocale( LC_TIME, 'ru_RU.UTF-8'));
echo strftime("%B %Y года, %d число.Был %A, часы показцвали %H:%M"."<br />");
// return (setlocale( LC_TIME, 'ru_RU.UTF-8'));
echo date("l dS of FY h:i:s A"); */?>
<?php
$str = date('d-m-Y h:i:s');

// до PHP 5.1.0 вместо false необходимо было сравнивать со значением -1
if (($timestamp = strtotime($str)) === false) {
    echo "Строка ($str) недопустима";
} else {
    echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect('127.0.0.1','root','0238994Tk','blume1');
if($db==true){
    echo "</br>";
    echo 'нет соединения';
    echo "</br>";
}
$datab= mysqli_query($db, "SELECT `имя` FROM `blume` ");
$real1=array();
while($real=mysqli_fetch_assoc($datab)){
    $real1[]=$real;
    
}
echo "</br>";
print_r($real1[1]['имя']);
$f=$real1[1]['имя'];
echo count($real1)."</br>";
echo $f
//$datab= mysqli_query($db, "SELECT `имя` FROM `blume` ");
    //$real=mysqli_fetch_assoc($datab);
   //$real=1;
    
   //print_r($real);
   //$real==true
  
/*for($i=1;$i<6;$i++)
{
    $datab= mysqli_query($db, " SELECT `имя` FROM `blume`WHERE `id`=$i ");
    
    $real=mysqli_fetch_assoc($datab);
    print_r($real);
    $real1=(strlen($real['имя']))/2;
   echo $real1."<br/>";
    $datab= mysqli_query($db, "UPDATE `blume` set `кол-во букв`= $real1 WHERE `id`=$i");
    echo "<hr>";
}

$i=4;
switch ($i) {
    case 4:
        echo "i равно 4";
    case 6:
        echo "i равно 6";
    break;
    case 7:
        echo "i равно 7";
}
echo $i;
//print_r ($real);
//require 'code2.php';
/*$letter=0;
while(($real=mysqli_fetch_assoc($datab)))
{   print_r ($real);
   
    echo $real1."</br>";
    
    echo "<hr>";
    /*$letter++;
    $real1=(strlen($real['имя']))/2;
    $datab= mysqli_query($db, "UPDATE `blume` set `кол-во букв`= $real1 WHERE `id`=$letter");
    echo $real['имя']."</br>";
    print_r ($real)."</br>";
    echo $real1."</br>";
    echo "<hr>";
}

$st='abc';
$st1=strpos($st,'b');
var_dump($st1)*/
//phpinfo(32)
?>