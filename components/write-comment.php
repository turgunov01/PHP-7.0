<?
include_once('../function.php');
include_once('db.php');
date_default_timezone_set('Asia/Tashkent');
$time = date("H:i");
addComment($_POST['name'], $_SESSION['photo'], $_POST['descr'], $time);
header('Location:/?route=guest');

?>