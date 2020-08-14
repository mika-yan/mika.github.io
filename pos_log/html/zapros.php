<?php
 require "../php/db.php";
?>
<?php if(isset($_SESSION['logged_user']) ) : ?>
  



<?php else: ?>



  
 <?php header('Location: /'); ?>




<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Best of Armenia - Оформление заказа</title>
  <link rel="stylesheet" type="text/css" href="../css/zapros_style.css">
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>
<body>

<!------------------------------HEADER-------------------------------->

<header class="nav">
  <div class="nav_menu">
   <ul>
    <li><a href="../php/index.php">Одежда</a></li>
    <li><a href="../php/jewelry.php">Украшения</a></li>
    <li><a href="info_acc.php">Профиль</a></li>
      



   </ul>
  </div>
 <div class="logo">
  <img src="../img/logo/logo.png">
 </div>

  <div class="contact_forma">
     <div class="phone">
      <h4>
        <img src="https://img.icons8.com/ios-filled/18/000000/phone.png"/>
        +7 9хх-ххх-хх-хх
      </h4>
     </div>
     <div class="email">
      <h4>
        <img src="https://img.icons8.com/ios-filled/18/000000/important-mail.png"/>
      albertmik1915@gmail.com
     </h4>
     </div>
</header>




<form action="../mail.php" method="POST" enctype="multipart/form-data">


<div class="zapros">
	<div class="form">
    <div class="zag">

	<label  for=""><h3>Оформление заказа</h3></label>
    </div>

	<br />


<input required autocomplete="off" type="text" placeholder="Имя" name="user_name" id="user_name">





<input required autocomplete="off" type="text" placeholder="Фамилия" name="user_family" id="user_family">


<br />

<input required autocomplete="off" type="number" placeholder="Телефон" name="user_phone"
id="user_phone">




<input required autocomplete="off" type="email" placeholder="E-mail" name="user_email" id="user_email">
<br />

<input required autocomplete="off" type="text" placeholder="Наименование товара" name="user_name_tovar" id="user_name_tovar">



<input required autocomplete="off" type="text" placeholder="Цвет и размер" name="user_color_size" id="user_color_size">

<br />
<input required autocomplete="off" type="text" placeholder="Адрес доставки" name="user_adres" id="user_adres">



<input required autocomplete="off" type="number" placeholder="Индекс" name="user_index" id="user_index">
<br></br>

<div class="file_upload_button">

<input required type="file" name="upload" id="file" class="inputfile" />


<label for="file">Выберите файл</label>
<br>
<h2>Прикрепите чек с оплаты</h2>
</div>

<div class="bt1">
<button type="submit" class="bt1">Сделать заказ</button>
</div>
</div>
</div>
</form>

<!------------------------------PRELOADER------------------------------>

<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background:#2B2B2B  url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->


<script type="text/javascript" src="../js/input.js"></script>

</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>