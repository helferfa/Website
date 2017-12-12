<!DOCTYPE html>
<html>
<head>
	<title>MySql Test</title>
	<link rel="shortcut icon" type="image/x-icon" href="League-of-Legends.ico" />
	<style type="text/css">
		body {
			background-image: url("http://cdn30.us1.fansshare.com/image/backgroundimage/hd-wallpapers-black-background-hd-image-website-for-website-527805647.jpg");
		}
	</style>

</head>
<body>
	<font color="white" face="Tahona">
		<div align="center">
			<h1>League of Legends</h1>
		</div>
		<?php
		mysql_connect('localhost', 'helferfa', 'chicca97') or die(mysql_error());
		mysql_select_db('helferfa') or die(mysql_error());

		$sql = "SELECT * FROM Champions";
		$query = mysql_query($sql) or die(mysql_error());

		//echo '<table>';
		//echo '<th><td>Champions</td><td>Rolle</td></th>';
		echo '<div align="center">';
		$i = 0;
		while($fetch = mysql_fetch_assoc($query))
		{
			if ($i == 7) {
				echo '</div><div align="center">';
				$i = 0;
			}
				//echo '<tr>';

			//echo '<img src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/' . $fetch['Name'] . '.png">';
			echo '<a href="http://gameinfo.euw.leagueoflegends.com/de/game-info/champions/' . strtolower ($fetch['Name']) . '"><img src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/' . $fetch['Name'] . '.png" width="120" height="120" border="0" alt="Home"></a>';
					//echo '<td>' . $fetch['Rolle'] . '</td>';
				//echo '</tr>';
			$i++;

		}
		echo '</div>';
		//echo '</table>';

		?>
	</font>
</body>
</html>