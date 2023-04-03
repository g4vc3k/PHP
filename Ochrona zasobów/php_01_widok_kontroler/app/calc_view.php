<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator zużycia prądu</title>
</head>
<body>

    <h4>Kalkulator zużycia prądu</h4>
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="get">
	<label for="id_moc">Pobór mocy w watach: </label>
	<input id="id_moc" type="text" name="moc" value="<?php if(isset($moc)) {print($moc);} ?>" /><br />
    
	<label for="id_czas">Czas w godzinach: </label>
	<input id="id_czas" type="text" name="czas" value="<?php if(isset($czas)) {print($czas);} ?>" /><br />
    
    <label for="id_cena">Cena prądu za 1kWh: </label>
    <input id="id_cena" type="text" name="cena" value="<?php if(isset($cena)) {print($cena);} ?>" /><br />
    

    <input type="submit" value="Oblicz" />
</form>	

    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    
    <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button pure-button-active">Inna strona</a>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>


</body>
</html>