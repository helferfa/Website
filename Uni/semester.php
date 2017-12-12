<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	$sem = (!isset($_GET["semester"])) ? "" : $_GET["semester"];
	?>
	
</head>
<style> 

	body { background-image: url("http://cdn30.us1.fansshare.com/image/backgroundimage/hd-wallpapers-black-background-hd-image-website-for-website-527805647.jpg");}

	table {
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		width: 640px;
		border-collapse:
		collapse; border-spacing: 0;
	}
	td, th {
		border: 1px solid transparent; /* No more visible border */
		height: 30px;
		transition: all 0.3s; /* Simple transition for hover effect */
	}
	th {
		background-color: #4CAF50; /* Darken header a bit */
		font-weight: bold;
	}
	td {
		background: #FAFAFA;
		text-align: center;
		padding: 10px 10px 10px 20px;
	}
	/* Cells in even rows (2,4,6...) are one color */
	tr:nth-child(even) td { background: #F1F1F1; } 
	/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
	tr:nth-child(odd) td { background: #FEFEFE; } 
	/*tr td:hover { background: #f2f2f2; color: #FFF; } /* Hover cell effect! */

	a {
		color: white;	
	}
</style>
<body>
	<?php
	echo '<div align="center">';
	mysql_connect('localhost', 'helferfa', 'chicca97') or die(mysql_error());
	mysql_select_db('helferfa') or die(mysql_error());

	$sql = "SELECT * FROM Semester WHERE Semester = $sem";
	$query = mysql_query($sql) or die(mysql_error());


	echo '<table>';
	echo '<tr>';
	echo '<td> Fächer </td>';
	for ($i=1; $i < 13; $i++) { 
		echo '<td> Woche ' . $i . '  </td>';
	}
	echo '<td> ∑ </td>';
	echo '</tr>';
	while($fetch = mysql_fetch_array($query))
	{
		echo '<tr>';

		echo '<th>' . $fetch['Kuerzel'] . '</th>';
		for ($i=1; $i < 13; $i++) { 
			echo '<td>' . $fetch['Woche ' . $i] . '</td>';
		}
		echo '<td>' .$fetch['Summe'] . '</td>';
		echo '</tr>';
	}
	echo '</table>';

	echo '<br>';
	switch($sem) {
		case 1: echo '<img src="Stundenplan1.PNG" alt="Stundenplan fehlt!">'; break;
		case 2: echo '<img src="Stundenplan2.PNG"> alt="Fehler"'; break;
		case 3: echo '<img src="Stundenplan3.PNG"> alt="Fehlfer"'; break;
	}
	echo '</div>';	
	?>
	<div align="center">
		<a href="/Uni/index.php">zurueck</a>
	</div>


</body>
</html>