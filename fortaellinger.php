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
			<div class="breadcrumb"><a href="index.php">Fortællinger</a></div>
			<div id="icon"></div>
			<h1>Livsfortællinger</h1>
			<p class="overview-summary">Her kan du skrive din historie og læse andres. Glæde, vrede, angst, tristhed, håb - 
				alle følelser er velkomne her. Det handler om at få sat ord på tankerne, og lade andre kigge med.
			</p><br/>
			<a href="livsfortaellinger-overview.php" class="btn overview-btn">Se Livsfortællinger</a><br/><br/><br/>
			<div id="icon"></div>
			<h1 class="sec_header">Kropshemmeligheder</h1>
			<p class="overview-summary">
				Skriv din kropshemmelighed her - og se den blive forvandlet til skønlitteratur af to professionelle forfattere.
				Måske ligner din navle statsministeren. Eller også har du som pige hår på brystvorterne. Eller måske kan du ikke tisse,
				før du har sunget ABC'en for dig selv. Eller har du en stomi-pose under trøje uden din venner ved det?
				Vi går alle sammen og gemmer på hemmeligheder om vores kroppe.
			</p><br/><a href="kropshemmeligheder.php" class="btn overview-btn">Se Kropshemmeligheder	</a>
		</div>
	</div>
	
	<?php //echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>