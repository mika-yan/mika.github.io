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
	<title>Best of Armenia - Украшения</title>
	<link rel="stylesheet" type="text/css" href="../css/jewelry.css">
	<link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>
<body>

<!------------------------------HEADER-------------------------------->

<header class="nav">
  <div class="nav_menu">
	 <ul>
		<li><a href="index.php">Одежда</a></li>
		<li><a href="jewelry.php" id="a_2">Украшения</a></li>
		<li><a href="../html/info_acc.php">Профиль</a></li>
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




<!------------------------------CARD 1--------------------------------->

<div class="card_menu_1">
<div class="container">
	<div class="card">
		<div class="imgBx">
		<img src="../img/img card_uk/1.png" alt="">
		</div>
		<div class="contentBx">
			<h2>Птица</h2>
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
			<a href="../html/zapros.php">Купить</a>
		</div>
	</div>
</div>



<!------------------------------CARD 2-----------------------------

<div class="container1">
	<div class="card1">
		<div class="imgBx1">
		<img src="../img/img card_uk/" alt="">
		</div>
		<div class="contentBx1">
			<h2>Украшение</h2>
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
			<a href="html/zapros.html">Buy Now</a>
		</div>
	</div>
</div>
---->
<!------------------------------CARD 3---------------------------

<div class="container2">
	<div class="card2">
		<div class="imgBx2">
		<img src="../img/img card_uk/" alt="">
		</div>
		<div class="contentBx2">
			<h2>Украшение</h2>
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
			<a href="html/zapros.html">Buy Now</a>
		</div>
	</div>
</div>


------>


<!------------------------------CARD 4---------------------------
<div class="container3">
	<div class="card3">
		<div class="imgBx3">
		<img src="../img/img card_uk/" alt="">
		</div>
		<div class="contentBx3">
			<h2>Украшение</h2>
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
			<a href="html/zapros.html">Buy Now</a>
		</div>
	</div>
</div>

------>




<!------------------------------PRELOADER------------------------------>

<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 999999999999999999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background:#2B2B2B  url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->


</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>