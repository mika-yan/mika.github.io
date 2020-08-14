<?php 
  require "db.php";  // Подключаем файл для базы данных
  $data = $_POST;
  if(isset($data['do_login'])) {
  $errors = array();
  $user =  R::findOne('users', 'login = ?',array($data['login']));
  if ($user) 
  { 
   
   if(password_verify($data['password'], $user->password))
   {

  $_SESSION['logged_user'] = $user;  // Если все верно,проходим авторизацию
  


  //  header('Location: dashboard/dashboard.php'); // Редирект в временный личный кабинет
   header('Location: ../html/info_acc.php');
        
   } else 

   {  

      $errors[] = 'Неверно введен пароль';
   } 
   

  } 


  else 
  {

   $errors[] = 'Пользователь не найден'; 
    
  }

  if ( ! empty($errors)) {
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
  }

  }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="css_php/login.css">
</head>
<body>
  <div class="back">
    <a href="/">
       <svg  width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
       <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/></svg>
    </a>
  </div>


   <div class="col">
     <h1><svg class="bi bi-person-bounding-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 00-.5.5v3a.5.5 0 01-1 0v-3A1.5 1.5 0 011.5 0h3a.5.5 0 010 1h-3zM11 .5a.5.5 0 01.5-.5h3A1.5 1.5 0 0116 1.5v3a.5.5 0 01-1 0v-3a.5.5 0 00-.5-.5h-3a.5.5 0 01-.5-.5zM.5 11a.5.5 0 01.5.5v3a.5.5 0 00.5.5h3a.5.5 0 010 1h-3A1.5 1.5 0 010 14.5v-3a.5.5 0 01.5-.5zm15 0a.5.5 0 01.5.5v3a1.5 1.5 0 01-1.5 1.5h-3a.5.5 0 010-1h3a.5.5 0 00.5-.5v-3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg> Авторизация</h1>
        <form action="login.php" method="POST">
        <input maxlength="8" autocomplete="off" type="text" name="login" id="login" placeholder="Ваш логин"><br>
        <input type="password" name="password" id="pass" placeholder="Ваше пароль"><br>
        <button type="submit" name="do_login" class="btn btn-success">Авторизоваться</button>
        <a href="signup.php">РЕГИСТРАЦИЯ</a>
        </form>
 


    </div>
   
  </body>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </html>