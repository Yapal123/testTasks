<?php

if (!empty($_POST)) {
	$str = $_POST['text'];
	$normalStr = str_replace(' ', '', $str);
	$total = 0;

		if (is_numeric($normalStr)) {
			$numberArray = str_split($normalStr);

			$total = array_sum($numberArray);
			
		} else{
			$total =  'Пожалуйста, введите корретные числа';
		}
}





?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6
По желанию можете сделать проверку на корректность введения данных пользователем.

	</p>
	
</div>
<div class="taskBlock">
	<form method="POST" action="1.php">
		<input type="text" name="text">
		<input type="submit" name="sub" value="Посчитать">
	</form>
	<p>
		<?php if ($_POST['text']): ?>
			<?php echo "Вы ввели - ".$_POST['text'].'<br>Сумма этой строки - '.$total; ?>
		<?php endif ?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>