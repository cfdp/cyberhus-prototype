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
			<div class="breadcrumb"><a href="index.php">Blogs</a></div>
			<div id="icon"></div>
			<h1>Unge blogs</h1>
			<p class="overview-summary">
				Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				Aenean lobortis erat sit amet bibendum porta. Nunc congue orci vitae posuere vulputate.
				Vestibulum ullamcorper ipsum vel viverra facilisis. Integer molestie mauris sed enim dignissim,
				convallis posuere leo blandit. Phasellus id sem tincidunt, ornare mauris at, hendrerit justo.
			</p><br/><a href="blog-overview.php" class="btn overview-btn">Se Unge Blogs</a><br/><br/><br/>
			<div id="icon"></div>
			<h1 class="sec_header">Voksne blogs</h1>
			<p class="overview-summary">
				Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				Aenean lobortis erat sit amet bibendum porta. Nunc congue orci vitae posuere vulputate.
				Vestibulum ullamcorper ipsum vel viverra facilisis.
			</p><br/><a href="blog-overview.php" class="btn overview-btn">Se Voksne Blogs</a>
		</div>
	</div>
	
	<?php //echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>