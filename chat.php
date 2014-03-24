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
			<div class="breadcrumb"><a href="index.php">Chat</a></div>
			<h1>Chat</h1>
			<h2>1-1 Chat</h2>
			<p>
				Her kan du chatte en til en med en voksen rådgiver. Vi sidder en masse frivillige voksne og vi vil gerne lytte
				og hjælpe dig med at sætte ord på de tanker og følelser, du går med lige nu. Med vores ord kan vi forsøge at
				støtte og rådgive dig.
				Har du brug for mere hjælp, vil vi gerne hjælpe dig med at finde ud af hvem, hvor og hvordan du kan finde den.
				Det kan både være andre steder på nettet eller et fysisk sted i nærheden af, hvor du bor.
			</p>
			<p>
				<table border="0" cellspacing="1" cellpadding="1" align="center">
					<tbody>
						<tr>
							<td></td>
							<td>Eftermiddag</td>
							<td>Aften</td>
						</tr>
						<tr>
							<td>Mandag</td>
							<td>13-16</td>
							<td></td>
						</tr>
						<tr>
							<td>Tirsdag</td>
							<td>13-16 </td>
							<td>18-21</td>
						</tr>
						<tr>
							<td>Onsdag</td>
							<td>13-16 </td>
							<td>18-21</td>
						</tr>
						<tr>
							<td>Torsdag</td>
							<td>13-16 </td>
							<td>18-21</td>
						</tr>
						<tr>
							<td>Fredag</td>
							<td>13-16 </td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</p>
			<p>
				Hvis du vil benytte 1-1 Chatten skal du trykke på den lille widget i højre side af skærmen.
				OBS: 1-1-chatten virker i øjeblikket ikke på mobil. Brug derfor din pc eller bærbare hvis du vil chatte.

			</p>
			<hr/>
			<h2>Gruppechat	</h2>
			<p>I gruppechatten kan du mødes og chatte med andre unge der bruger Cyberhus, om hvad som helst mellem himmel og jord. </p>
			<p>
				En voksen rådgiver følger med for at sikre at gruppechatten er et trygt sted for dem der ønsker at deltage, ligesom
				moderatorerne gør i debatforum. Rådgiveren vil kun blande sig hvis spillereglerne ikke overholdes.
			</p>
			<p>
				Den voksne rådgiver har altid mulighed for at slette kommentarer og kicke eller banne brugere hvis de ikke
				overholder spillereglerne. 
			</p>
			<p>Gruppechatten har åbent hver tirsdag & torsdag kl. 18-21 </p>
			<p>Gruppechatten har altid lukket i folkeskolernes ferier: Vinterferie, Påskeferie, Sommerferie, Efterårsferie & Juleferie</p><a href="">Gå til gruppechatten</a>
			<hr/>
			<h2>KRAM-chat</h2>
			<p>I KRAM-chatten kan du chatte med andre unge om sundhed. </p>
			<p>
				KRAM er en forkortelse for Kost, Rygning, Alkohol & Motion, og netop de fire temaer vil ofte være dem vi har fokus på i
				chatten, men andre emner som prævention, plastikkirurgi og kroppens udvikling vil du også kunne finde ind i mellem. 
			</p>
			<p>
				En voksen rådgiver følger med og deltager ind i mellem også i snakken. Det vil sige at man både kan chatte med andre unge,
				men også stille rådgiveren et konkret spørgsmål om sundhed, hvis det er nødvendigt. 
			</p>
			<p>
				Den voksne rådgiver har altid mulighed for at slette kommentarer og kicke eller banne brugere hvis de ikke
				overholder spillereglerne.
			</p>
			<p>KRAM-Chatten har åbent hver onsdag kl. 18-21.</p>
			<p>Nedenfor kan du se hvilket tema der er på de kommende chats.</p>
			<p>
				<table>
					<tbody>
						<tr>
							<td>Onsdag</td>
							<td>d. 12 Marts</td>
							<td>kl. 18-21</td>
							<td>Puberteten </td>
						</tr>
						<tr>
							<td>Onsdag</td>
							<td>d. 19 Marts </td>
							<td>kl. 18-21 </td>
							<td>Kost</td>
						</tr>
						<tr>
							<td>Onsdag</td>
							<td>d. 26 Marts </td>
							<td>kl. 18-21</td>
							<td>Kronisk sygdom</td>
						</tr>
					</tbody>
				</table>
			</p><a href="">Gå til KRAM-Chatten</a>
		</div>
	</div>
	
	<?php echo footer(); ?> 
	<script src="js/expand.js"></script>
</body>
</html>