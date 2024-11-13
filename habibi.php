so jungs anbei seht ihr was ich damals im info LK gemacht haben viel spass  (kein plan was wir gemacht haben)

<html>
<head><title>habibi</title></head>
<body>
<?

	$server="localhost";
	$database="habibi test";
	$user="root";
	$password="";
	$mysqli=mysqli_connect($server, $user, $password, $database);

	echo "<body style='background-color:lightgrey'><br>";
	echo "<center><font size=10><font color='#FF0600'>Formel 1 Fahrer 2023</font size></font color></center>";
	echo "<Form action=seite1.php><br><center><input type=submit name=senden value=Eingabe></center></FORM>";
	echo "<Form action=seite2.php><input type=submit name=senden value=Korrektur> <input type=submit name=senden value=Loeschen></center><br>";


	if(isset($_GET['senden'])) {
		$senden = $_GET['senden'];
			}
				else {
							$senden="";
		};

		$result = mysqli_query($mysqli, "SELECT * FROM fahrer");

		while($res = mysqli_fetch_array($result))
			{	$fnr = $res['Fahrernummer'];
				$fname = $res['FahrerName'];
				$siege = $res['Rennsiege'];
				echo $fnr." ".$fname." ".$siege."      Loeschen?
							<input type='checkbox' name='Loesch[]' value=".$fnr."><br>";
				echo "Korrektur: <input type='checkbox' name='Box[]' value='".$fnr."'><br>";
		}
while($res = mysqli_fetch_array($result))
{
				if ($senden == 'speichern')
				{echo 'Fahrer wurde erfolgreich hinzugefuegt.';

					$fnr = $res['Fahrernummer'];
					$fname = $_GET['FahrerName'];
					$siege = $_GET['Rennsiege'];
					$abfrage = "INSERT INTO 'fahrer'('Fahrernummer','Fahrername','Rennsiege')VALUES('".$fnr."','".$fname."','".$siege."')";
					echo $abfrage;
					echo '<br>';
					mysqli_query($mysqli,$abfrage);
				}
};


		echo "</Form>";
			echo "<Form action=seite1.php><br><center></Form>";
?>
</div>
</body>
</html>

<?php echo'<Form action=index.php><br>';

$server="localhost";
$database="habibi test";
$user="root";
$password="";
$mysqli = mysqli_connect($server, $user, $password, $database);

echo "<body style='background-color:lightgrey'><br>";
echo "<center><font size=10><font color='#FF0600'>Fahrer bearbeiten</font size></font color></center>";

	if(isset($_GET['senden']))
			{	$senden = $_GET['senden'];
}
else
{
				$senden="";
};

if ($senden=='Korrektur')
	{ if (isset($_GET['Box']))
{


$box = $_GET['Box'];
	echo "<Form action='seite2.php'>";
		foreach ($box as $fnr){
			$abfrage = "Select * from fahrer where Fahrernummer=".$fnr;
			$ergebnis = mysqli_query($mysqli,$abfrage);
			$row = mysqli_fetch_object($ergebnis);
			$fname = $row->FahrerName; $siege = $row->Rennsiege; $fnr= $row->Fahrernummer;
			echo "<input type=hidden name=s[".$fnr."][0] value'".$fnr."'>";

				echo"Fahrernummer:<Input type='text'name=s[".$fnr."][1] value='".$fnr."'>
			    	 Fahrername:<Input type='text'name=s[".$fnr."][2] value='".$fname."'>
			    	 Rennsiege:<Input type='text'name=s[".$fnr."][3] value='".$siege."'><br>";
				 	echo"<Input type=submit value=speichern></FORM>"; 	}

	}

}
else
{
	if($senden != 'Loeschen')
	{
	$sp=$_GET['s'];

	foreach($sp as $row)
		{
		$abfrage="Update fahrer SET Fahrername='".$row[2]."', Rennsiege='".$row[3]."', where Fahrernummer=".$row[1];
			echo $abfrage."<br>";
			mysqli_query($mysqli, $abfrage);
		}
	}
	else
	{	$sp=$_GET['Loesch'];
		if(isset($_GET['Loesch'])){
			echo"Es wird gelöscht";
			foreach($sp as $row){
				$abfrage="DELETE FROM fahrer WHERE Fahrernummer=".$row;
				echo $abfrage."<br>";
				mysqli_query($mysqli, $abfrage);
				}
			}
	}
}



echo "<Form action='index.php'><input type=submit value=Zurueck></center></FORM>";


<?php
echo'<Form action=index-2.php><br>';

$server="localhost";
$database="habibi test";
$user="root";
$password="";
$mysqli = mysqli_connect($server, $user, $password, $database);

echo "<Form action='index.php'><input type=submit value=Zurück></FORM>";


if(isset($_GET['senden'])) {
	$senden = $_GET['senden'];
}
	else {
	$senden="";
};
if ($senden=='Korrektur') {
	if (isset($_GET['Box'])){
		$box = $_GET['Box'];
		echo "<Form action='seite2-2.php'>";
		foreach ($box as $id){
			$abfrage = "Select * from team where T_ID=".$id;
			$ergebnis = mysqli_query($mysqli,$abfrage);
			$row = mysqli_fetch_object($ergebnis);
			$Prüfung_Nr = $row->Prüfung_Nr; $Farbe = $row->Farbe; $Grad= $row->Grad;
			echo "<input type=hidden name=s[".$id."][0] value='".$id."'>";

			echo"TeamName:<Input type='text'name=s[".$id."][1] value='".$name."'>
			     Chassis:<Input type='text'name=s[".$id."][2] value='".$chassis."'>
			     Motor-Lieferant:<Input type='text'name=s[".$id."][3] value='".$motor."'>
           seit:<Input type='text'name=s[".$id."][4] value='".$seit_jahr."'><br>";
			        echo"<Input type=submit value=speichern></FORM>";
		}

	}

}
else
{
	if($senden != 'Loeschen')
	{
	$sp=$_GET['s'];

	foreach($sp as $row)
		{
		$abfrage="Update team SET TeamName='".$row[1]."', Chassis='".$row[2]."', Motor-Lieferant='".$row[3]."', seit='".$row[4]."' where ID='".$row[0]"';

		mysqli_query($mysqli, $abfrage);
		}
	}
	else
	{	$sp=$_GET['Loesch'];
		if(isset($_GET['Loesch'])){

			foreach($sp as $row){
				$abfrage="DELETE FROM team WHERE id=".$row;

				mysqli_query($mysqli, $abfrage);
				}
			}
	}
}


?>


<html>
<body>
<?

	$server="localhost";
	$database="shein test";
	$user="root";
	$password="";
	$mysqli = mysqli_connect($server, $user, $password, $database);


  echo "<body style='background-color:lightgrey'><br>";
	echo "<center><font size=10><font color='#FF0600'>Formel 1 Teams 2023</font size></font color></center>";
  echo "<Form action=seite2-2.php><input type=submit name=senden value=Korrektur><input type=submit name=senden value=Loeschen><br>";

	echo "<Form action=seite1-2.php><br><center><input type=submit name=senden value=Eingabe></center></Form>";


  if(isset($_GET['senden'])) {
    	$senden = $_GET['senden'];
    	}
    	else {
    	$senden="";
    	};


            	if ($senden == 'speichern'){
                echo'Drin';

		$name =$_GET['TeamName'];
		$chassis =$_GET['Chassis'];
		$motor = $_GET['Motor-Lieferant'];
    $seit_jahr = $_GET['seit'];
		$abfrage = "INSERT INTO 'team' ('TeamName', 'Chassis', 'Motro-Lieferant', 'seit')	VALUES('".$name."','".$chassis."','".$motor."','".$seit_jahr."')";
            		echo $abfrage;
            		echo'<br>';
		mysqli_query($mysqli,$abfrage);
	}


	$result = mysqli_query($mysqli, "SELECT * FROM team");

	while($res = mysqli_fetch_array($result)) {
		$id= $res['T_ID'];
		$name = $res['TeamName'];
    $chassis =$res['Chassis'];
		$motor = $res['Motor-Lieferant'];
		$seit_jahr = $res['seit'];
  echo $name." ".$chassis." ".$motor." ".$seit_jahr." 		Loeschen?
							<input type='checkbox' name='Loesch[]' value=".$id.">";
	echo " Korrektur: <input type='checkbox' name='Box[]' value='".$id."'><br>";
	}
	echo "</Form>";
	echo "<Form action=seite1-2.php><br><center><input type=submit name=senden value=Eingabe></center></Form>";

	?>

</div>
</body>
</html>