<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Home</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
				
	             
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutpage.html">About</a></li>
				    <li><form action="includes/logout.inc.php" method ="POST">				
					      <button type="submit" name="submit">Logout</button> 
					   </form>';
					</li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>CROWD SOURCING</h1>
					<p>we predict the historical place by taking your image as input.<br />
					</p>
					<a href="#one" class="button special scrolly">Get Started</a>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<div class="content">
								<header class="align-center">
									<h2>historical monuments of india</h2>
									<p>        tell us our culture and tradition </p>
								</header>
								<hr />
								<p>India is rich in culture,traditions,heritage buildings, temples, forts and palaces. Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.
								These Historical Monuments are the only wealth of Indian tourism along with other World Heritage Sites and 
								Nature tourism places like wild parks and ancient temples of south India</p>
								<p>Historical Monuments can be classified according to architecture styles, religious entities, period
of construction etc. By period we mean the monuments constructed can be differentiated as per their time e.g. Indus valley
period, Magadha Empire, Gupta Empire etc in Ancient India, Mughal period during Medieval India and monuments of Modern
India. Styles of Architecture also plays a vital role in classification of Historical Places of India. For example the monuments
built during Mughal era are classical examples of Turkish-Persian architecture, while the monuments of South India gives the
glimpses of Dravidian Architecture.</p>

<p><b>here we are predicting the historical monuments based on the images that your are uploading .we also glad to hear from you ,whether our prediction is write or wrong ,which help us to improve our algorithm in future . </b> </p>
							</div>
						</div>
					</div>
				</div>
			</section>

	 <section id="two" class="wrapper style3">
				<div class="inner">
					<div id="flexgrid">
					<form action="upload.php"method="POST" enctype="multipart/form-data">
	upload here <input type="file" name="file" multiple />
	<br><br>
	<button type="submit" name="submit" name="submit">UPLOAD Image</button>
</form>
	      </div>
				</div>
			</section>
		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Belur Chennakeshava Temple </h2>
										<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
									</header>
									<hr />
									<p> The Chennakesava Temple, originally called Vijayanarayana Temple, was built on the banks of the Yagachi River in Belur,
									by the Hoysala Empire King Vishnuvardhana in 1117 AD. Chennakesava means “handsome Kesava”. Lord Vishnu is worshipped in this temple.
									These temple complexes have been proposed to be listed under UNESCO World Heritage Sites.
                                     If one is willing to spend enough time at Belur,
									 there is no end to the pleasures one experiences in gazing at the different mythological tales that these time-tested monuments have to narrate. 
									 The temples create magic during the early hours of the day, just before sunrise, when a tranquil atmosphere surrounds them.
									 This is the best time to enjoy and understand the poetry of these stone images. 
									 The transition from dawn to after sunrise is also something not to be missed. 
									 Suddenly the temple brightens up bringing with it the liveliness of the local devotees, who begin to throng in, as part of a daily ritual. 
									 A total different mood sets in, that of colour and light.
                                   </p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Hampi Vijaya Vittala Temple</h2>
										<p>mattis sapien pretium tellus venenatis</p>
									</header>
									<hr />
									<p>The Vittala Temple or Vijaya Vittala Temple is a hindu temple dedicated to Lord Vishnu situated in Hampi, Karnataka.
									It is an ancient monument that is well-known for its exceptional architecture and unmatched craftsmanship.
									It is considered to be one of the largest and the most famous structures in Hampi. 
									The temple is located in the north eastern part of Hampi,near the banks of the Tungabhadra River. 
									The iconic temple has amazing stone structures such as the incomparable stone chariot and the fascinating musical pillars.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>summer school at CVG 2018</h2>
						<p>best platform for inspiring mind.</p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Get in Touch</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input name="email" id="email" type="email" placeholder="Email">
									</div>
									<div class="field">
										<label for="dept">Department</label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						devloped by sanketh prabhu &hearts;
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>