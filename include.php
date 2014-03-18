<?php

function nav() 
{
	$content = '
	<div class="dev"></div>
	<header>
		<div class="header"><a href="index.php" class="logo"></a>
			<nav>
				<ul>
					<li><a href="chat.php">Chat</a></li>
					<li><a href="brevkasse-topics.php">Brevkasse</a></li>
					<li><a href="debat-topics.php">Debat</a></li>
					<li><a href="fortaellinger.php">Fortællinger</a>
						<ul>
							<li><a href="livsfortaellinger-overview.php">Livsfortællingen</a></li>
							<li><a href="kropshemmeligheder.php">Kropshemmeligheder</a></li>
						</ul>
					</li>
					<li><a href="galleri.php">Kunstgalleri</a></li>
					<li><a href="blog-types.php">Blogs</a>
						<ul>
							<li><a href="blog-overview.php">Unge blogs</a></li>
							<li><a href="blog-overview.php">Voksne blogs</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	';

	return $content;
}


function sidebar() 
{
	$content = '
	<section class="sidebar">
		<h2>Sidebar title</h2>
		<p>
			This is sidebar text - 
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus. Fusce
			imperdiet non magna sit amet bibendum. Cras id convallis massa. Sed sed aliquam nibh, eu fringilla lectus.
			Fusce rhoncus magna sit amet velit venenatis, sit amet tempus purus luctus. Sed a libero dapibus,
			vehicula tortor ac, porta ipsum.
		</p>
	</section>
	';

	return $content;
}


function comments() 
{
	$content = '
	<section id="interaction"><a href="#komm-form" class="btn left">+ Tilføj kommentar</a><a href="" class="btn right">Cyberlike</a><span class="light-text right">4 synes godt om</span></section>
	<section id="kommentarer">
		<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus. Fusce
				imperdiet non magna sit amet bibendum. Cras id convallis massa. Sed sed aliquam nibh, eu fringilla lectus.
				Fusce rhoncus magna sit amet velit venenatis, sit amet tempus purus luctus. Sed a libero dapibus,
				vehicula tortor ac, porta ipsum. <br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
				<p class="komm-komm"><a class="komm-arrow"></a></p>
			</p>
			<div class="inline-komm">			
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
				</div>
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
						<p class="komm-komm"><a class="komm-arrow"></a></p>
					</p>
					<div class="inline-komm">			
						<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
								<p class="komm-komm"><a class="komm-arrow"></a></p>
							</p>
							<div class="inline-komm">			
								<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
				</div>
			</div>
		</div>
		<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
		</div>
		<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus. Fusce
				imperdiet non magna sit amet bibendum. Cras id convallis massa. Sed sed aliquam nibh, eu fringilla lectus.
				Fusce rhoncus magna sit amet velit venenatis, sit amet tempus purus luctus. Sed a libero dapibus,
				vehicula tortor ac, porta ipsum. <br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
				<p class="komm-komm"><a class="komm-arrow"></a></p>
			</p>
			<div class="inline-komm">			
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
				</div>
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
						<p class="komm-komm"><a class="komm-arrow"></a></p>
					</p>
					<div class="inline-komm">			
						<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
								<p class="komm-komm"><a class="komm-arrow"></a></p>
							</p>
							<div class="inline-komm">			
								<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
					<p>Lorem ipsum dolor sit amet.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
				</div>
			</div>
		</div>
		<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
			<p>Lorem ipsum dolor sit amet.<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span></p>
		</div>
		<div class="kommentar"><span class="light-text">Hans den glade </span><span class="right light-text">22. dec 2013</span>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nisi metus. Fusce
				imperdiet non magna sit amet bibendum. Cras id convallis massa. Sed sed aliquam nibh, eu fringilla lectus.
				Fusce rhoncus magna sit amet velit venenatis, sit amet tempus purus luctus. Sed a libero dapibus,
				vehicula tortor ac, porta ipsum. Maecenas venenatis diam felis, sit amet dictum felis suscipit eget.
				vehicula tortor ac, porta ipsum. Maecenas venenatis diam felis, sit amet dictum felis suscipit eget.
				Fusce rhoncus magna sit amet velit venenatis, sit amet tempus purus luctus. Sed a libero dapibus,<br/><a href="">Tilføj kommentar</a><span class="light-text"> - </span><a href="">Cyberlike</a><span class="light-text"> - 2 synes godt om</span>
			</p>
		</div>
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
	';

	return $content;
}


function footer() 
{
	$content = '
	<footer>
		<div class="footer">
			<div class="footer-top">
				<div class="footer-column footer-one">
					<h1>Om Cyberhus</h1>
					<p>
						Cyberhus er dit klubhus på nettet. Du kan skrive til en voksen og få rådgivning i vores brevkasser og chat,
						dele dine tanker i ung-til-ung, lave billeder eller bare hænge ud. I Cyberhus kan du være dig selv og har
						du brug for en voksen, vil vi gerne lytte og prøve at hjælpe.
					</p>
					<p>Cyberhus er en del af EUs Insafe- & Daphne program</p>
					<div class="footer-icons"><img src="img/footer-eu.jpg"/><img src="img/footer-insafe.jpg"/><img src="img/footer-daphne.jpg"/></div>
					<p class="copyright">© Copyright 1998 - 2014 | Center for Digital Pædagogik</p>
				</div>
				<div class="footer-column footer-two">
					<h1>Andet</h1>
					<ul>
						<li>Artikler</li>
						<li>Kontakt</li>
						<li>For voksne</li>
						<li>Sikkerhed på Cyberhus</li>
						<li>Login</li>
					</ul>
					<div class="social-icons"><a href="https://www.facebook.com/cyberhus" title="Cyberhus på Facebook" class="facebook"></a><a href="http://instagram.com/cyberhus" title="Cyberhus på Instagram" class="instagram"></a></div>
				</div>
				<div class="footer-column footer-three">
					<h1>Ung I</h1>
					<ul>
						<li>Aarhus</li>
						<li>Esbjerg</li>
						<li>Frederiksberg</li>
						<li>Herning</li>
						<li>Kolding</li>
						<li>København</li>
						<li>Odense</li>
						<li>Silkeborg</li>
						<li>Viborg</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	';

	return $content;
}