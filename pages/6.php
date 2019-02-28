<?php 

function trafLighter($minutes)
{
	
    $greenArray = ['0','1','2','5','6','7'];
    if (in_array($minutes, $greenArray)) {
    	return $color = 'Зеленый';
    } else return $color = 'Красный';
}


$time = $_POST['text'];
$minutes = substr($time,-1);


?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, которая по введенному числу определяла какого цвета сейчас горит сигнал. Введенное число означает количество минут, прошедших с начала часа.


	</p>
</div>
<div class="taskBlock">
	<form method="POST" action="6.php">
		Введите нужное время:
		<input type="number" name="text" id="time">
		<input type="submit" name="sub" value="Посчитать" id="subLight">
	</form>
	<p id="colorLight">
		<?php if (!empty($_POST)):?>
			<?php echo "На ".$_POST['text']." минуте будет "?>
			<span id="color"><?php echo trafLighter($minutes) ?></span> свет
		<?php endif ?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>