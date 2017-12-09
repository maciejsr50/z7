<?php 
session_start();
if (isset($_COOKIE['name'])) {
    $username = $_COOKIE['name'];
    $_SESSION["login_user"] = $username;
    header('Location: http://mboguszpas.pl/Z7/fileManager.php');
}
?>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Bogusz</title>
</head>
<h1 align="center">Panel logowania użytkownika</h1>
<hr>

<body>
 <form method="post" action="loginAction.php">

  <div class="container">
    <label><b>Nazwa użytkownika</b></label>
    <input type="text" placeholder="Wprowadź nazwę użytkownika" name="uname" required>

    <label><b>Hasło</b></label>
    <input type="password" placeholder="Wprowadź hasło" name="psw" required>

    <button type="submit" class="loginbtn">Zaloguj</button>
    <button type="button" class="signupbtn" onclick="document.location.href='register.html'">Zarejestruj</button>
  </div>

</form> 
</body>