<!DOCTYPE html>
<html>
<head>
	<title>Champions</title>
	<link rel="shortcut icon" type="image/x-icon" href="League-of-Legends.ico" />
	<?php
	$champ = (!isset($_GET["champ"])) ? "" : $_GET["champ"];
	?>

	<style> body  {
		/*background-image: url("Summoners Rift.jpg");*/
		<?php echo ($champ == "") ? "background-image: url('Summoners Rift0.jpg')" : "background-image: url('Champs/".$champ.".jpg')"?>;


		background-size: 100% auto;
		color: black;
		
	}
</style>
</head>
<body>

	<div align="center">
		<form action="#">
			<label>Champions:
				<select id="champs" onchange="loadPage()">
					<optgroup>
						<option value="null">--Bitte Auswaehlen--</option>
					</optgroup>
					<optgroup label="A">
						<option value="Aatrox">Aatrox</option>
						<option value="Ahri">Ahri</option>
						<option value="Akali">Akali</option>
						<option value="Alistar">Alistar</option>
						<option value="Amumu">Amumu</option>
						<option value="Anivia">Anivia</option>
						<option value="Annie">Annie</option>
						<option value="Ashe">Ashe</option>
						<option value="Aurelion Sol">Aurelion Sol</option>
						<option value="Azir">Azir</option>
					</optgroup>	
					<optgroup label="B">
						<option value="Bard">Bard</option>
						<option value="Blitzcrank">Blitzcrank</option>
						<option value="Brand">Brand</option>
						<option value="Braum">Braum</option>
					</optgroup>
					<optgroup label="C">
						<option value="Caitlyn">Caitlyn</option>
						<option value="Camille">Camille</option>
						<option value="Cassiopeia">Cassiopeia</option>
						<option value="ChoGath">Cho'Gath</option>
						<option value="Corki">Corki</option>
					</optgroup>
					<optgroup label="D">
						<option value="Darius">Darius</option>
						<option value="Diana">Diana</option>
						<option value="DrMundo">Dr.Mundo</option>
						<option value="Draven">Draven</option>
					</optgroup>
					<optgroup label="E">
						<option value="Ekko">Ekko</option>
						<option value="Elise">Else</option>
						<option value="Evelynn">Evelynn</option>
						<option value="Ezreal">Ezreal</option>
					</optgroup>
					<optgroup label="F">
						<option value="Fiddlesticks">Fiddlesticks</option>
						<option value="Fiora">Fiora</option>
						<option value="Fizz">Fizz</option>
					</optgroup>
					<optgroup label="G">
						<option value="Galio">Galio</option>
						<option value="Gangplank">Gangplank</option>
						<option value="Garen">Garen</option>
						<option value="Gnar">Gnar</option>
						<option value="Gragas">Gragas</option>
						<option value="Graves">Graves</option>
					</optgroup>
					<optgroup label="H">
						<option value="Hecarim">Hecarim</option>
						<option value="Heimerdinger">Heimerdinger</option>
					</optgroup>
					<optgroup label="I">
						<option value="Illaoi">Illaoi</option>
						<option value="Irelia">Irelia</option>
						<option value="Ivern">Ivern</option>
					</optgroup>
					<optgroup label="J">
						<option value="Janna">Janna</option>
						<option value="JarvanIV">Jarvan IV</option>
						<option value="Jax">Jax</option>
						<option value="Jayce">Jayce</option>
						<option value="Jhin">Jhin</option>
						<option value="Jinx">Jinx</option>
					</optgroup>
					<optgroup label="K">
						<option value="Kalista">Kalista</option>
						<option value="Karma">Karma</option>
						<option value="Karthus">Karthus</option>
						<option value="Kassadin">Kassadin</option>
						<option value="Katarina">Katarina</option>
						<option value="Kayle">Kayle</option>
						<option value="Kennen">Kennen</option>
						<option value="KhaZix">Kha'Zix</option>
						<option value="Kindred">Kindred</option>
						<option value="Kled">Kled</option>
						<option value="KogMaw">Kog'Maw</option>
					</optgroup>
					<optgroup label="L">
						<option value="LeBlanc">LeBlanc</option>
						<option value="LeeSin">Lee Sin</option>
						<option value="Leona">Leona</option>
						<option value="Lissandra">Lissandra</option>
						<option value="Lucian">Lucian</option>
						<option value="Lulu">Lulu</option>
						<option value="Lux">Lux</option>
					</optgroup>
					<optgroup label="M">
						<option value="Malphite">Malphite</option>
						<option value="Malzahar">Malzahar</option>
						<option value="Maokai">Maokai</option>
						<option value="MasterYi">Master Yi</option>
						<option value="MissFortune">Miss Fortune</option>
						<option value="Mordekaiser">Mordekaiser</option>
						<option value="Morgana">Morgana</option>
					</optgroup>
					<optgroup label="N">
						<option value="Nami">Nami</option>
						<option value="Nasus">Nasus</option>
						<option value="Nautilus">Nautilus</option>
						<option value="Nidalee">Nidalee</option>
						<option value="Nocturne">Nocturne</option>
						<option value="Nunu">Nunu</option>
					</optgroup>
					<optgroup label="O">
						<option value="Olaf">Olaf</option>
						<option value="Orianna">Orianna</option>
					</optgroup>
					<optgroup label="P">
						<option value="Pantheon">Pantheon</option>
						<option value="Poppy">Poppy</option>
					</optgroup>
					<optgroup label="Q">
						<option value="Quinn">Quinn</option>
					</optgroup>
					<optgroup label="R">
						<option value="Rammus">Rammus</option>
						<option value="RekSai">Rek'Sai</option>
						<option value="Renekton">Renekton</option>
						<option value="Rengar">Rengar</option>
						<option value="Riven">Riven</option>
						<option value="Rumble">Rumble</option>
						<option value="Ryze">Ryze</option>
					</optgroup>
					<optgroup label="S">
						<option value="Sejuani">Sejuani</option>
						<option value="Shaco">Shaco</option>
						<option value="Shen">Shen</option>
						<option value="Shyvana">Shyvana</option>
						<option value="Singed">Singed</option>
						<option value="Sion">Sion</option>
						<option value="Sivir">Sivir</option>
						<option value="Skarner">Skarner</option>
						<option value="Sona">Sona</option>
						<option value="Soraka">Soraka</option>
						<option value="Swain">Swain</option>
						<option value="Syndra">Syndra</option>
					</optgroup>
					<optgroup label="T">
						<option value="TahmKench">Tahm Kench</option>
						<option value="Taliyah">Taliyah</option>
						<option value="Talon">Talon</option>
						<option value="Taric">Taric</option>
						<option value="Teemo">Teemo</option>
						<option value="Thresh">Thresh</option>
						<option value="Tristana">Tristana</option>
						<option value="Trundle">Trundle</option>
						<option value="Tryndamere">Tryndamere</option>
						<option value="TwistedFate">Twisted Fate</option>
						<option value="Twitch">Twitch</option>
					</optgroup>
					<optgroup label="U">
						<option value="Udyr">Udyr</option>
						<option value="Urgot">Urgot</option>
					</optgroup>
					<optgroup label="V">
						<option value="Varus">Varus</option>
						<option value="Vayne">Vayne</option>
						<option value="Veigar">Veigar</option>
						<option value="Bard">Vel'Koz</option>
						<option value="Vi">Vi</option>
						<option value="Viktor">Viktor</option>
						<option value="Vladimir">Vladimir</option>
						<option value="Volibear">Volibear</option>
					</optgroup>
					<optgroup label="W">
						<option value="Warwick">Warwick</option>
						<option value="Wukong">Wukong</option>
					</optgroup>
					<optgroup label="X">
						<option value="Xerath">Xerath</option>
						<option value="XinZhao">Xin Zhao</option>
					</optgroup>
					<optgroup label="Y">
						<option value="Yasuo">Yasuo</option>
						<option value="Yorick">Yorick</option>
					</optgroup>
					<optgroup label="Z">
						<option value="Zac">Zac</option>
						<option value="Zed">Zed</option>
						<option value="Ziggs">Ziggs</option>
						<option value="Zilean">Zilean</option>
						<option value="Zyra">Zyra</option>
					</optgroup>
				</select>
			</label>
		</form>
	</div>


	<p id="demo"></p>
	<script>
		function myFunction() {
			var x = document.getElementById("champs").value;
			document.getElementById("demo").innerHTML = "You selected: " + x;
			switch(x)
			{
				case "Aatrox":  document.body.style.background = "#FFF url(Champs/Aatrox.png)"; break;
				case "Ahri":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Akali":  document.body.style.background = "#FFF url(Champs/Akali.jpg)"; break;
				case "Alistar":  document.body.style.background = "#FFF url(Champs/Alistar.jpg)"; break;
				case "Amumu":  document.body.style.background = "#FFF url(Champs/Amumu.jpg)"; break;
				case "Anivia":  document.body.style.background = "#FFF url(Champs/Anivia.jpg)"; break;
				case "Annie":  document.body.style.background = "#FFF url(Champs/Annie.jpg)"; break;
				case "Ashe":  document.body.style.background = "#FFF url(Champs/Ashe.jpg)"; break;
				case "Aurelion Sol":  document.body.style.background = "#FFF url(Champs/AurelionSol.jpg)"; break;
				case "Azir":  document.body.style.background = "#FFF url(Champs/Azir.jpg)"; break;
				case "Bard":  document.body.style.background = "#FFF url(https://images8.alphacoders.com/573/thumb-1920-573306.jpg)"; break;
				case "Blitzcrank":  document.body.style.background = "#FFF url(Champs/Blitzcrank.jpg)"; break;
				case "Brand":  document.body.style.background = "#FFF url(Champs/Caitlyn.jpg)"; break;
				case "Braum":  document.body.style.background = "#FFF url(Champs/Braum.jpg)"; break;
				case "Caitlyn":  document.body.style.background = "#FFF url(Champs/Caitlyn.jpg)"; break;
				case "Camille":  document.body.style.background = "#FFF url(Champs/Camille.jpg)"; break;
				case "Cassiopeia":  document.body.style.background = "#FFF url(Champs/Cassiopeia.jpg)"; break;
				case "ChoGath":  document.body.style.background = "#FFF url(Champs/ChoGath.jpg)"; break;
				case "Corki":  document.body.style.background = "#FFF url(Champs/Corki.jpg)"; break;
				case "Darius":  document.body.style.background = "#FFF url(Champs/Darius.jpg)"; break;
				case "Diana":  document.body.style.background = "#FFF url(Champs/Diana.jpg)"; break;
				case "DrMundo":  document.body.style.background = "#FFF url(Champs/DrMundo.jpg)"; break;
				case "Draven":  document.body.style.background = "#FFF url(Champs/Draven.jpg)"; break;
				case "Ekko":  document.body.style.background = "#FFF url(Champs/Ekko.jpg)"; break;
				case "Elise":  document.body.style.background = "#FFF url(Champs/Elise.jpg)"; break;
				case "Evelynn":  document.body.style.background = "#FFF url(Champs/Evelynn.jpg)"; break;
				case "Ezreal":  document.body.style.background = "#FFF url(Champs/Ezreal.jpg)"; break;v
				case "Fiddlesticks":  document.body.style.background = "#FFF url(Champs/Fiddlesticks.jpg)"; break;
				case "Fiora":  document.body.style.background = "#FFF url(Champs/Fiora.jpg)"; break;
				case "Fizz":  document.body.style.background = "#FFF url(Champs/Fizz.jpg)"; break;
				case "Galio":  document.body.style.background = "#FFF url(Champs/Galio.jpg)"; break;
				case "Gangplank":  document.body.style.background = "#FFF url(Champs/Gangplank.jpg)"; break;
				case "Garen":  document.body.style.background = "#FFF url(Champs/Garen.jpg)"; break;
				case "Gnar":  document.body.style.background = "#FFF url(Champs/Gnar.jpg)"; break;
				case "Gragas":  document.body.style.background = "#FFF url(Champs/Gragas.jpg)"; break;
				case "Graves":  document.body.style.background = "#FFF url(Champs/Graves.jpg)"; break;
				case "Hecarim":  document.body.style.background = "#FFF url(Champs/Hecarim.jpg)"; break;
				case "Heimerdinger":  document.body.style.background = "#FFF url(Champs/Heimerdinger.jpg)"; break;
				case "Illaoi":  document.body.style.background = "#FFF url(Champs/Illaoi.jpg)"; break;
				case "Irelia":  document.body.style.background = "#FFF url(Champs/Irelia.jpg)"; break;
				case "Ivern":  document.body.style.background = "#FFF url(Champs/Ivern.jpg)"; break;
				case "Janna":  document.body.style.background = "#FFF url(Champs/Janna.jpg)"; break;
				case "JarvanIV":  document.body.style.background = "#FFF url(Champs/JarvanIV.jpg)"; break;
				case "Jax":  document.body.style.background = "#FFF url(Champs/Jax.jpg)"; break;
				case "Jayce":  document.body.style.background = "#FFF url(Champs/Jayce.jpg)"; break;
				case "Jhin":  document.body.style.background = "#FFF url(Champs/Jhin.jpg)"; break;
				case "Jinx":  document.body.style.background = "#FFF url(Champs/Jinx.jpg)"; break;
				case "Kalista":  document.body.style.background = "#FFF url(Champs/Kalista.jpg)"; break;
				case "Karma":  document.body.style.background = "#FFF url(Champs/Karma.jpg)"; break;
				case "Karthus":  document.body.style.background = "#FFF url(Champs/Karthus.jpg)"; break;
				case "Kassadin":  document.body.style.background = "#FFF url(Champs/Kassadin.jpg)"; break;
				case "Katarina":  document.body.style.background = "#FFF url(Champs/Kayle.jpg)"; break;
				case "Kayle":  document.body.style.background = "#FFF url(Champs/Kennen.jpg)"; break;
				case "Kennen":  document.body.style.background = "#FFF url(Champs/KhaZix.jpg)"; break;
				case "KhaZix":  document.body.style.background = "#FFF url(Champs/Kindred.jpg)"; break;
				case "Kindred":  document.body.style.background = "#FFF url(Champs/Kledd.jpg)"; break;
				case "Kled":  document.body.style.background = "#FFF url(Champs/KogMaw.jpg)"; break;
				case "KogMaw":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "LeBlanc":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "LeeSin":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Leona":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Lissandra":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Lucian":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Lulu":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Lux":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Malphite":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Malzahar":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Maokai":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "MasterYi":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "MissFortune":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Mordekaiser":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Morgana":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nami":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nasus":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nautilus":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nidalee":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nocturne":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Nunu":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Olaf":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Orianna":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Pantheon":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Poppy":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Quinn":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Rammus":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "RekSaik":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Renekton":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Rengar":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Riven":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Rumble":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Ryze":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Sejuani":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Shaco":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Shen":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Shyvana":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Singed":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Sion":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Sivir":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Skarner":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Sona":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Soraka":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Swain":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Syndra":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "TahmKench":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Taliyah":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Talon":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Taric":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Teemo":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Thresh":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Tristana":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Trundle":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Tryndamere":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "TwistedFate":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Twitch":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Udyr":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Urgot":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Varus":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Vayne":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Veigar":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "VelKoz":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Vi":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Viktor":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Vladimir":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Volibear":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Warwick":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Wukong":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Xerath":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "XinZhao":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Yasuo":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Yorick":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Zac":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Zed":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Ziggs":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Zilean":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;
				case "Zyra":  document.body.style.background = "#FFF url(Champs/Ahri.jpg)"; break;

			}
			this.innerHTML = "reset";


		}
	</script>

	<script type="text/javascript">

		function loadPage() {

			var selectBox = document.getElementById("champs");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			window.location.replace('Test2.php?champ='+selectedValue);
		}

	</script>

	<script type="text/javascript">

		function loadSkins() {

			var daten ="<?php echo $champ ?>";
			window.location.replace('skins.php?champ='+daten+ '&id='+0);
		}

		document.getElementById("skins").onclick = loadSkins;

	</script>

</div>
<font color="black">
	<div align="center">
		<button type="button" id="skins" onclick="loadSkins()">
			Skins
		</button>
		<strong> <h1>
			<?php if ($champ == "Braum"): echo "Hi Ican :)"?>

			<?php endif ?>	
		</h1> </strong>
	</div>
</font>

<div align="center">
	<a href="skins.php">Skins</a>
	<a href="fanarts.php">Fanarts</a>
</div>


<div align="center">
	<a href="index.php">Hier gehts zurueck</a>
</div>
</body>
</html>