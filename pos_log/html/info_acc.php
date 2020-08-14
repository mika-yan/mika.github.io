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
	<title>Best of Armenia - Профиль</title>
	<link rel="stylesheet" type="text/css" href="../css/info_acc.css">
	<link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>
<body>

<!------------------------------HEADER-------------------------------->

<header class="nav">
  <div class="nav_menu">
	 <ul>
		<li><a href="../php/index.php">Одежда</a></li>
		<li><a href="../php/jewelry.php">Украшения</a></li>
		<li><a href="info_acc.php" id="a_3">Профиль</a></li>
	 </ul>
  </div>
 <div class="logo">
	<img src="../img/logo/logo.png">
 </div>
  <div class="login_user_profile">
     <?php
          echo $_SESSION['logged_user']->login;
    ?>
  </div>
</header>


<div class="info_acc">

<div class="user_card_info">


     <h2>Имя пользовтаеля</h2>
        <?php
          echo $_SESSION['logged_user']->login;
        ?>
            <span></span>
            <span></span>
          

     <h2>Почта пользовтаеля</h2>
        <?php
          echo $_SESSION['logged_user']->email;
        ?>
        

     <h2>Номер мобильного телефона</h2>
        <?php
          echo $_SESSION['logged_user']->number_phone;

        ?>

</div>

<br>
<br>
<br>
<div class="pod_btn_logout">

 <a href="../php/logout.php" >Выйти из аккаунта</a>
 
</div>

</div>



  </body>


  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </html>






<!------------------------------PRELOADER------------------------------>

<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999999999999999999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background:#2B2B2B  url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->


</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>