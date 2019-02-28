<?php
	function yearCheck($year)
	{
			if ($year % 4 == 0) {
		return $yearStatus = 'Этот год високосный';
		} else {
		return $yearStatus = 'Этот год не високосный';
		}
	}


?>

<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Проверить високосный ли год. Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999


	</p>
</div>
<div class="taskBlock">
	<form method="POST" action="7.php">
		<label>Введите нужный год</label><br>
		<input type="number" name="text" id="inputYear"><br>
		<input type="submit" name="sub" value="Посчитать" id="subYear">
	</form>
	<p>
		<?php if (!empty($_POST)): ?>
			<?php echo yearCheck($_POST['text']) ?>
		<?php endif ?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>