<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cyberhus</title>
	<link href="css/screen.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="js/jquery.min.js"></script>
	<?php include_once ('include.php'); ?>
</head>
<body>
	<?php echo nav(); ?> 
	<?php include_once ('chatbar.php'); ?>

	<div class="wrapper">
		<?php echo sidebar(); ?>
		<div id="content-wrapper">
			<div class="breadcrumb"><a href="livsfortaellinger-overview.php">Fortællinger > Kropshemmeligheden > Min knogler i...</a></div>
			<article>
				<p class="light-text">Emil den vilde - Dreng, 16 år 
					<time>20. okt 2013</time>
				</p>
				<p>Min knogler i mine lillefingre er bøget så jeg har to lillefingre der ser ud som om at de er kroge</p>
			</article>
			<section id="interaction"><a href="#komm-form" class="btn left">+ Tilføj kommentar</a><a href="" class="btn right">Cyberlike</a><span class="light-text right">4 synes godt om</span></section>
			<section id="kommentarer">
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus. Fusce
						sit amet dictum felis suscipit eget.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
					</p>
				</div>
			</section>
			<section id="komm-form">
				<h2>Tilføj kommentar</h2>
				<form>
					<input type="text" placeholder=" Navn"/>
					<textarea placeholder=" Kommentar"></textarea>
					<input type="submit" value="Gem" class="btn"/>
				</form>
			</section>
		</div>
	</div>
	
	<?php echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>