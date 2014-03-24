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
		<div class="breadcrumb"><a href="index.php">Brevkasse</a></div>
		<div id="icon"></div>
		<h1>Brevkasse</h1>
		<p class="overview-summary topic-summary">
			Her sidder der voksne som gerne vil prøve at hjælpe.
			Find den brevkasse der passer bedst til dit spørgsmål og prøv og se om der allerede er et svar du kan bruge.
			Hvis ikke, kan du stille dit eget spørgsmål.
			Vi prøver at besvare dit spørgsmål så hurtigt vi kan, men der kan gå op til 10 dage.
			
		</p>
		<section class="topics">
			<div class="card-wrapper">
				<div class="card">		
					<h2>Når det gør ondt inderst inde</h2>
					<p>
						Her i brevkassen har vi en baggrund
						som pædagog, socialrådgiver eller psykolog.
					</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
			<div class="card-wrapper">
				<div class="card">		
					<h2>Klar, parat, teenageliv</h2>
					<p>
						Spørg om alt fra veninder/venner, kærester, følelser og tanker til mode, make-up og gossip. Her i
						brevkassen har vi forskellige baggrunde og er alle voksne. 
					</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
			<div class="card-wrapper">
				<div class="card">		
					<h2>KRAM </h2>
					<p>
						I KRAM-brevkassen kan du spørge om Kost, Rygning, Alkohol & Motion. Spørgsmål
						omkring spiseforstyrrelser skal i stedet stilles i brevkassen: Når det gør ondt inderst inde.
					</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
			<div class="card-wrapper">
				<div class="card">		
					<h2>Hvad tror jeg på?</h2>
					<p>Spørg om kultur, identitet, religion og politik.</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
			<div class="card-wrapper">
				<div class="card">		
					<h2>Tandzonen</h2>
					<p>Spørg om alle de ting der har noget at gøre med din mund og tænder. Niels arbejder som tandlæge til dagligt.</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
			<div class="card-wrapper">
				<div class="card">		
					<h2>Musikliv og talentudvikling</h2>
					<p>
						Spørg hvis du eller dit band har spørgsmål omkring musik, kompositioner,
						sceneshow og image.
					</p><a href="brevkasse-overview.php" class="hover-box">
					<p>Læs mere</p></a>
				</div>
			</div>
		</section>
	</div>
	
	<?php echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>