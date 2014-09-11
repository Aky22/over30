<?php require_once('include/header.php'); ?>
<style type="text/css">
	body{
		background:none;
	}
</style>
<content>
	<div class="subpage_bg">
		<div class="center">
			<img src="style/img/competitioner_head.png" alt="c_head" />
			<?php
				if(!isset($_GET['id']) && empty($_GET['id']))
				{
					echo '<div id="competitioners">
						<h2>Jelentkezőink</h2>
						<div class="row">
							<img src="style/img/sample_img.png" alt="sample" id="first-img" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<div class="cleared"></div>
						</div>
						<div class="row">
							<img src="style/img/sample_img.png" alt="sample" id="first-img" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<div class="cleared"></div>
						</div>
						<div class="row">
							<img src="style/img/sample_img.png" alt="sample" id="first-img" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<div class="cleared"></div>
						</div>
						<div class="row">
							<img src="style/img/sample_img.png" alt="sample" id="first-img" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<img src="style/img/sample_img.png" alt="sample" class="slider_img" />
							<div class="cleared"></div>
						</div>
					</div>
					<div id="ads">
						<h2>Hírdetések</h2>
						<img src="style/img/ads_default.png" alt="ads" id="first-img" />
						<img src="style/img/ads_default.png" alt="ads" />
						<img src="style/img/ads_default.png" alt="ads" />
					</div>';
				}
				else
				{
					echo '<div id="competitioner">
							<div id="links">
								<a href="index.php">Főoldal > </a><a href="versenyzok.php">Versenyzők > </a><label>Kis Zita</label><br />
							</div>
							<img src="style/img/sample_profile_img.png" alt="sample" class="profile_img" />
							<div id="about">
								<h2>Kis Zita</h2>
								<p>A Lorem Ipsum egy egyszerû szövegrészlete, szövegutánzata a betûszedõ és nyomdaiparnak. A Lorem Ipsum az 1500-as évek óta standard szövegrészletként szolgált az iparban; mikor egy ismeretlen nyomdász összeállította a betûkészletét és egy példa-könyvet vagy szöveget nyomott papírra, ezt használta. Nem csak 5 évszázadot élt túl, de az elektronikus betûkészleteknél is változatlanul megmaradt. Az 1960-as években népszerûsítették a Lorem Ipsum részleteket magukbafoglaló Letraset lapokkal, és legutóbb softwarekkel mint például az Aldus Pagemaker.</p>
								<div id="datas">
									<label>Kor: 35 év</label>
									<label>Magasság: 165 cm</label>
									<label>Súly: 57 kg</label>
									<label>Foglalkozás: Vállalkozó</label>
									<label>Hobbi: Zene, tánc, olvasás</label>
								</div>
								<div id="vote" onclick="window.location.href=\'index.php\'">
									<h2>Szavazok</h2>
								</div>
							</div>
							<div id="img">
								<img src="style/img/sample_cs_img.png" alt="sample" id="first-img" />
								<img src="style/img/sample_cs_img.png" alt="sample" />
								<img src="style/img/sample_cs_img.png" alt="sample" />
							</div>
							<div class="cleared"></div>
						</div>
						<div id="ads">
							<img src="style/img/ads_big_default.png" alt="ads" id="first-img" />
							<img src="style/img/ads_medium_default.png" alt="ads" id="first-img" />
							<img src="style/img/ads_medium_default.png" alt="ads" />
							<img src="style/img/ads_default.png" alt="ads" id="first-img" />
							<img src="style/img/ads_default.png" alt="ads" />
							<img src="style/img/ads_default.png" alt="ads" />
						</div>';
				}
			?>
		</div>
	</div>
</content>
<?php require_once('include/footer.php'); ?>