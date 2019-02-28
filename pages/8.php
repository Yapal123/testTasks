<?php 
$card = $_POST['text'];

switch ($card) {
	case 6:
		$cardName = 'Шестерка';
		break;
	case 7:
		$cardName = 'Семерка';
		break;
	case 8:
		$cardName = 'Восьмёрка';
		break;
	case 9:
		$cardName = 'Девятка';
		break;
	case 10:
		$cardName = 'Десятка';
		break;
	case 11:
		$cardName = 'Валет';
		break;
	case 12:
		$cardName = 'Дама';
		break;
	case 13:
		$cardName = 'Король';
		break;
	case 14:
		$cardName = 'Туз';
		break;
	


	
	default:
		$cardName = '';
		break;
	
}
?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>

		Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14 Порядковые номера остальных карт соответствуют их названиям("семерка", "восьмерка" и т. д.). Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру, который будет вводит пользователь.


	</p>
</div>
<div class="taskBlock">
	<form method="POST" action="8.php">
		<input type="number" name="text">
		<input type="submit" name="sub" value="Посчитать">
	</form>
	<p>
		<?php if (!empty($_POST['text'])): ?>
			<?php if ($cardName =='' ): ?>
				Введите правильне число карты (от 6 до 14).
			<?php else: ?>
				Достоинство карты под номером <?php echo $_POST['text']." - это ".$cardName ?>
			<?php endif ?>
		<?php endif ?>
		
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>