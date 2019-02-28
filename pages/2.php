<?php 
if (!empty($_POST)) {
	$str = $_POST['str'];
	$find = $_POST['num'];

	$normalStr = str_replace(' ', '', $str);
	$normalFind = str_replace(' ', '', $find);



	


}



?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Вам нужно разработать программу, которая считала бы количество вхождений какой-нибудь выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза


	</p>
</div>
<div class="taskBlock">
	<form method="POST" action="2.php">
		<label>Введите строку:</label>
		<input type="text" name="str"><br>
		<label>Введите число, которое будете искать в строке;</label>
		<input type="text" name="num"><br>
		<input type="submit" name="sub" value="Посчитать">
	</form>
	<?php if (!empty($_POST)): ?>
		
	
		<?php if (is_numeric($normalStr) and is_numeric($normalFind) == true):?>
	<p>
		Вы ввели <?php echo $normalStr ?> и в ней хотите найти <?php echo $normalFind ?><br>
		<?php 
		$numberArray = str_split($normalStr);
		$i = 0; 
		foreach ($numberArray as $element) {
			if ($element == $normalFind) {
				$i++;
			} else continue;

		}
		?>
		Вы нашли <?php echo $normalFind." ".$i ?> раз в вашей строке
		<?php else: ?>
		<p>
			Введите корректную строку.
		</p> 
	<?php endif ?>
	<?php endif ?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>