<?php require_once('include/header.php'); ?>
<style type="text/css">
	body{
		background:none;
	}
</style>
<script type="text/javascript">
    /* <![CDATA[ */
	$(document).ready(function(){
		$("input[type=file]").nicefileinput();
	});
	/* ]]> */
</script>
<content>
	<div class="subpage_bg">
		<div class="center">
			<img src="style/img/competitioner_head.png" alt="c_head" />
			<?php
				if(!isset($_GET['id']) && empty($_GET['id']))
				{
                    //TODO: [x]Jelentkezőlap befejezése
                    require_once('include/registration.php');
					echo '<div id="competitioners">
						<h2>Jelentkezés</h2>
                        <form method="post" action="'.$_SERVER['PHP_SELF'].'" id="jelentkezes_form" enctype="multipart/form-data">
                            <div class="left">
                                <label>Név*: </label><input type="text" name="name" /><br/>
                                <label>Becenév*: </label><input type="text" name="nick" /><br/>
                                <label>Telefon*: </label><input type="text" name="phone" /><br/>
                                <label>Email*: </label><input type="text" name="email" /><br/>
                                <label>Megye*: </label><input type="text" name="state" /><br/>
                                <label>Város*: </label><input type="text" name="city" /><br/>
                                <label>Életkor*: </label><input type="text" name="age" /><br/>
                                <label>Magasság*: </label><input type="text" name="height" /><br/>
                                <label>Súly*: </label><input type="text" name="weight" /><br/>
                                <label>Hobbi*: </label><input type="text" name="hobby" /><br/>
                            </div>
                            <div class="right">
                                <label>Képek*:</label><br />
                                <input type="file" name="picture1" /><br />
                                <input type="file" name="picture2" /><br />
                                <input type="file" name="picture3" /><br />
                                <input type="file" name="picture4" /><br />
                                <input type="file" name="picture5" /><br />
                            </div>
                            <div class="right">
                                <label>Bemutatkozás:* (pár mondat magadról)</label><br />
                                <textarea name="about"></textarea><br />
                                <input type="submit" value="Jelentkezés" name="submit" />
                            </div>
                        </form>
                        '.$_error.'
                        <div class="cleared"></div>
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