<?php
 require "../php/db.php";
?>
<?php if(isset($_SESSION['logged_user']) ) : ?>
  

<?php header('Loaction: ../index.php') ?>
<a href="logout.php" style="color:black;text-decoration: none;margin-top: 1px; margin-left:150px; position: absolute;">Выйти</a>

<?php else: ?>

  <?php echo "<a style='color:black;text-decoration: none;margin-top: 0px;margin-left:150px;position: absolute;'' href='login.php'>Авторизоваться</a>"; ?>



<?php endif; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Best of Armenia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devices-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/zapros_style.css">
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
  </head>
  <body>
 
  
<header class="nav">
  <div class="nav_menu">
   <ul>
    <li><a href="../index.html">Одежда</a></li>
    <li><a href="../html/jewelry.html">Украшения</a></li>
    <li><a href="../html/delivery.html">Доставка</a></li>
 
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

  </div>
</header>
<div class="thenkyou">
    <div class="thky"><h1><a href="../php/index.php">Спасибо за заказ<br /></a></h1></</div>
  </div>
<!------------------------------PRELOADER------------------------------>

<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background:#2B2B2B  url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->


</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>