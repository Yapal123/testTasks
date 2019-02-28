<?php 
$name = $_POST['name'];
$secName = $_POST['secName'];
$fathName = $_POST['fathName'];


$normalName = str_replace(' ', '', $name);
$normalSecName = str_replace(' ', '', $secName);
$normalFathName = str_replace(' ', '', $fathName);

preg_match_all('#.{1}#uis', $normalSecName,$out1);
$sName = array_shift($out1['0']);

preg_match_all('#.{1}#uis', $normalFathName,$out2);
$fName = array_shift($out2['0']);


?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Ваши задание будет создание сокращенного варианта ФИО, т. е. вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.

	</p>
</div>
<div class="taskBlock">
	<form method="POST" action="5.php">
		<label>Имя</label><br>
		<input type="text" name="name" id="name"><br>
		<label>Фамилия</label><br>
		<input type="text" name="secName" id="secName"><br>
		<label>Отчество</label><br>
		<input type="text" name="fathName" id="fathName"><br><br>
		<input type="submit" name="sub" value="Показать" id="sub">
	</form>
	<p>
		<?php if (!empty($_POST)):?>	
		Ваше имя: <?php echo $normalName." ".$normalSecName." ".$normalFathName ?>
		<br>
		Сокращенно: <?php echo $normalName." ".$sName.". ".$fName."."?>
		<?php endif?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>