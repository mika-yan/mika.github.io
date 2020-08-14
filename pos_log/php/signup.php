<?php 
require "db.php";
$data = $_POST;
if(isset($data['do_signup'])) {
  

   $errors = array();
   if ($data['login'] == '') {

     $errors[] = 'Введите логин';
     
   }
    
   if($data['email'] == '') {

     $errors[] = 'Введите E-mail';
     
   }
     
   if($data['password'] == '') {

     $errors[] = 'Введите пароль';
     
   }

    if($data['number_phone'] == '') {

     $errors[] = 'Введите ваш номер телефона';
     
   }

     
   if($data['password_2'] != $data['password']) {

     $errors[] = 'Пароли не совпадают';
     
   }
if(R::count('users', "login = ?",array($data['login'])) > 0 ){

     $errors[] = 'Пользователь с таким логином уже существует';
     
   }

   if(R::count('users', "email = ?",array($data['email'])) > 0 ){

     $errors[] = 'Пользователь с такой электронной почтой уже существует';
     
   }
   
    if(R::count('users', "number_phone = ?",array($data['number_phone'])) > 0 ){

     $errors[] = 'Пользователь с таким номером мобильного телефона уже существует';
     
   }


   if (empty($errors)) {
     # Регистрируемся

      
    $user = R::dispense('users');
    $user -> login = $data['login'];
    $user -> email = $data['email'];
    $user -> number_phone = $data['number_phone'];
    $user -> password = password_hash($data['password'], PASSWORD_DEFAULT);
    R::store($user);
    echo '<div style="color: green;">Вы успешно зарегистрировались<br><a href="login.php">Войти</a></div><hr';
     header('Location: login.php');

   } else{
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
   }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css_php/signup.css">
  
</head>
<body>
  <div class="back">
    <a href="/">
  <svg class="bi bi-arrow-counterclockwise ml-4 mt-3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
  </a>
  </div>

  
           <div class="col">
               <h1><svg class="bi bi-person-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM6 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zm4.5 0a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/> 
</svg> Регистрация</h1>
        <form action="signup.php" method="POST">

        <input maxlength="8" autocomplete="off" type="text" class="form-control" name="login" id="login" placeholder="Ваш логин"><br>

        <input  autocomplete="off" type="email" class="form-control" name="email" id="email" placeholder="Ваше E-mail"><br>

        <input  autocomplete="off" type="text" class="form-control" name="number_phone" id="number_phone" placeholder="Ваш номер телефона"><br>

        <input  autocomplete="off" type="password" class="form-control" name="password" id="password_2" placeholder="Ваше пароль"><br>

        <input  autocomplete="off" type="password" class="form-control" name="password_2" id="password_2" placeholder="Введите пароль еще раз"><br>

        <button type="submit" class="btn btn-success" name="do_signup">Зарегистрироваться</button>
        <a href="login.php">Уже есть аккаунт? Войти</a>

        </form>
           </div>



  </body>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </html>