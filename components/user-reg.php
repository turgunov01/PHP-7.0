<?
  include_once './db.php';
  // save the user in PHPMyAdmin.net on table
  $userLogin = $_POST['login'];
  $userName = $_POST['name'];
  $userPass = $_POST['pass'];
  $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
  
  $imgPath = "./img/avatar/$userLogin.$ext";
  
  move_uploaded_file($_FILES['photo']['tmp_name'], ".$imgPath");
  
  userReg($userLogin, $userName, $userPass, $imgPath);
  header('Location: /');
?>