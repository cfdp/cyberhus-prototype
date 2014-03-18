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
			<div class="breadcrumb"><a href="index.php">Kunstgalleri > Min billeder</a></div>
			<article>
				<div id="galleri-img"><img src="img/kitten.jpg" alt="kitten" width="100%"/></div>
				<p class="light-text">Emil den vilde - Dreng, 16 år 
					<time>20. okt 2013</time>
				</p>
				<h1>Mine billeder</h1>
				<p>
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					Aenean lobortis erat sit amet bibendum porta. Nunc congue orci vitae posuere vulputate.
					Vestibulum ullamcorper ipsum vel viverra facilisis. Integer molestie mauris sed enim dignissim,
					convallis posuere leo blandit. Phasellus id sem tincidunt, ornare mauris at, hendrerit justo.
					Donec ultricies, tortor ac porta tempus, tortor quam aliquet velit, et porttitor nisl dolor
					fringilla magna.
				</p>
			</article>
			<?php echo comments(); ?>
		</div>
	</div>
	
	<?php //echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>