<?php
if(isset($_POST['url1']))
{
$url = $_POST['url1'];
$img = file_get_contents($url);
$file = fopen("C:\\xampp\\htdocs\\php\\Web_Application\\captures\\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);

$file = fopen("C:\\Users\\Akshat\\Documents\\Project\\Plant_Disease_Detection\\input\\IMG.jpg", "w");
fwrite($file, $img);
fclose($file);
die;
}
if(isset($_POST['url2']))
{   
    $dlt=$_POST['url2'];
    unlink($dlt);
    die;
}
die;
?>
