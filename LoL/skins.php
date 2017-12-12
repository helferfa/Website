<!DOCTYPE html>
<html>
<head>
	<title>League of Legends - Skins</title>
	<link rel="shortcut icon" type="image/x-icon" href="League-of-Legends.ico" />
	<?php
			$champ = (!isset($_GET["champ"])) ? "" : $_GET["champ"];
			$id = (!isset($_GET["champ"])) ? "0" : $_GET["id"];
		?>
	<style type="text/css">
		body {
			vertical-align: middle;
			align-items: center;
			background-color: grey;

			<?php echo ($champ == "") ? "background-image: url('Summoners Rift".$id.".jpg')" : "background-image: url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/".$champ."_".$id.".jpg')"?>;
			background-size: 100% auto;
		}
		#container {
			clear: left;
			margin: 0 auto;
			width: 1097px;
			height: 645px;
			vertical-align: middle;
		}
	</style>
</head>
<body>

	<div align="center" >
		<!--<img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_0.jpg">

		<img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg">
		<img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_2.jpg">
		<img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_3.jpg">-->

	</div>
	<button type="button" onclick="loadnext()">
		Weiter
	</button>

	<script type="text/javascript">

		function loadnext() {

			var selectedChamp = "<?php echo $champ ?>";
			var selectedId = "<?php echo $id+1 ?>";
			if (selectedId>=5) {window.location.replace('Test2.php?champ='+selectedChamp);} else	{window.location.replace('skins.php?champ='+selectedChamp+'&id='+selectedId);}
		}

	</script>
</body>
</html>