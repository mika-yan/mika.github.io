<?php
 require "pos_log/php/db.php";
?>
<?php if(isset($_SESSION['logged_user']) ) : ?>
	
	<?php 
header('Location: pos_log/php/index.php');
?>
<?php else: ?>

<?php endif; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-height, initial-scale=1">
	<title>Best of Armenia - Интернет магазин</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>

 <!------------------------------HEADER-------------------------------->

<header class="nav">
  <div class="nav_menu">
	 <ul>
		<li><a href="index.php">Одежда</a></li>
		<li><a href="pos_log/html/jewelry_no_reg.php">Украшения</a></li>
		<li><a href="pos_log/php/login.php">Вход</a></li>
		<li><a href="pos_log/php/signup.php">Регистрация</a></li>
		
	   
	 </ul>
  </div>
  <div class="logo">
	 <img src="pos_log/img/logo/logo.png">
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

<!------------------------------CARD 1--------------------------------->

<div class="card_menu_1">
<div class="container">
	<div class="card">
		<div class="imgBx">
		<img src="pos_log/img/img card_od/1.png" alt="">
		</div>
		<div class="contentBx">
			<h2>Легкие ветровки</h2>
			<div class="size">
				<h3>Size:</h3>
				<span>39</span>
				<span>40</span>
				<span>41</span>
				<span>42</span>
			</div>
			<div class="color">
				<h3>Color:</h3>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a href="pos_log/php/login.php" onclick="alert('Чтобы совершать покупки пройдите регистрацию или авторизацию')">Купить</a>
		</div>
	</div>
</div>

<!------------------------------CARD 2--------------------------------->

<div class="container1">
	<div class="card1">
		<div class="imgBx1">
		<img src="pos_log/img/img card_od/2.png" alt="">
		</div>
		<div class="contentBx1">
			<h2>Темный костюм</h2>
			<div class="size1">
				<h3>Size:</h3>
				<span>39</span>
				<span>40</span>
				<span>41</span>
				<span>42</span>
			</div>
			<div class="color1">
				<h3>Color:</h3>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a href="pos_log/php/login.php"  onclick="alert('Чтобы совершать покупки пройдите регистрацию или авторизацию')">Купить</a>
		</div>
	</div>
</div>

<!------------------------------CARD 3--------------------------------->

<div class="container2">
	<div class="card2">
		<div class="imgBx2">
		<img src="pos_log/img/img card_od/3.png" alt="">
		</div>
		<div class="contentBx2">
			<h2>Велюрный бомбер</h2>
			<div class="size2">
				<h3>Size:</h3>
				<span>39</span>
				<span>40</span>
				<span>41</span>
				<span>42</span>
			</div>
			<div class="color2">
				<h3>Color:</h3>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a href="pos_log/php/login.php" onclick="alert('Чтобы совершать покупки пройдите регистрацию или авторизацию')">Купить</a>
		</div>
	</div>
</div>



<!------------------------------CARD 4--------------------------------->
<div class="container3">
	<div class="card3">
		<div class="imgBx3">
		<img src="pos_log/img/img card_od/4.png" alt="">
		</div>
		<div class="contentBx3">
			<h2>Черный свитшот</h2>
			<div class="size3">
				<h3>Size:</h3>
				<span>39</span>
				<span>40</span>
				<span>41</span>
				<span>42</span>
			</div>
			<div class="color3">
				<h3>Color:</h3>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a href="pos_log/php/login.php" onclick="alert('Чтобы совершать покупки пройдите регистрацию или авторизацию')">Купить</a>
		</div>
	</div>
</div>







<!------------------------------FOOTER--------------------------------->

<div class="footer">

    <div class="footer_content">
    	<h4>ArmenianShop2020</h4>

    </div>

 </div>


<!------------------------------PRELOADER------------------------------>

<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background:#2B2B2B  url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->

<!------------------------------SCRIPTS--------------------------------->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="js/preloader.js"></script>
</body>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>