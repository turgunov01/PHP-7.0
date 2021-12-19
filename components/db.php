<?
  function pdo() {
      $dbname = 'php10-00';
      $dbuser = 'root';
      $pass = '';
      $host = 'localhost';
      return new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $pass);
  }
  pdo();
  
  function userReg($login, $name, $pass, $photo) {
      $pdo = pdo();
      $name = htmlspecialchars($name);
      $login = htmlspecialchars($login);
      $pass = password_hash($pass, PASSWORD_DEFAULT);
      $query = "INSERT INTO users (login, name, pass, photo) VALUES (?,?,?,?)";
      $driver = $pdo->prepare($query);
      $result = $driver ->execute([$login, $name, $pass, $photo]);
      return $result;
  }
  
  function userAuth($login, $pass) {
    
    $pdo = pdo();
    session_start();
    $query = "SELECT * from `users` WHERE login=?";
    $driver = $pdo -> prepare($query);
    $result = $driver -> execute([$login]);    
    $user = $driver->fetch(PDO::FETCH_ASSOC);
    
    if($user['login'] == $login and password_verify($pass, $user['pass'])) {
      $_SESSION['login'] = $user['login'];
      $_SESSION['name'] = $user['name'];
      $_SESSION['photo'] = $user['photo'];
    }
    
  }
  
  function addComment($login,$photo,$comment,$time) {
    $pdo = pdo();
    $query = "INSERT INTO comments (login, photo, comment, time) VALUES (?,?,?,?)";
    $driver = $pdo->prepare($query);
    $result = $driver -> execute([$login,$photo,$comment,$time]);
    return $result;
}
?>