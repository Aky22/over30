<?php require_once('include/header.php'); ?>
<content>
	<div class="center">
		<div id="box">
			<h2>Jelentkezz <span> fotózásunkra</span></h2>
			<ul>
				<li>Elmúltál már 30 éves?</li>
				<li>Szépnek tartod magad és mások szerint is szép vagy?</li>
				<li>Akkor jelentkezz az Over30 szépségversenyre!</li>
				<li>Legyél te Magyarország legszebb 30 feletti hölgye!</li>
			</ul>
			<div id="button" onclick="window.location.href='jelentkezes.php'">
				<h3>Jelentkezés</h3><img src="style/img/list-style.png" alt="list" />
			</div>
		</div>
		<div id="bottom_box">
			<h2>Legújabb jelentkezőink</h2>
			<div id="slider">
				<img src="style/img/sample_img.png" alt="sample" id="first-img" class="slider_img" />
				<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
				<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
				<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
			</div>
			<div class="cleared"></div>
			<div id="racers_btn" onclick="window.location.href='versenyzok.php'">
				<h3>Versenyzőink</h3><img src="style/img/list-style.png" alt="list" />
			</div>
		</div>
	</div>
</content>
<?php require_once('include/footer.php'); ?>