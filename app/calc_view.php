<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

<h3>Kalkulator Kredytowy</h2>

<?php if (!isset($op)) $op = "3%" ?>
<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<fieldset>
		<label for="id_x">Kwota: </label>
                <input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>"/>
                <br />
                <label for="id_y">Czas spłaty (w latach) </label>
                <input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>"/>
                <br />
               
                <label for="id_op">Oprocentowanie: </label>
                <select name="op">
		<option value="3%" <?php if ($op == '3%')  print('selected'); ?>>3%</option>
		<option value="5%" <?php if ($op == '5%')  print('selected'); ?>>5%</option>
		<option value="7%" <?php if ($op == '7%')  print('selected'); ?>>7%</option>
		<option value="10%" <?php if ($op == '10%')  print('selected'); ?>>10%</option>
                </select>
                <br />			
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>

</div>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>