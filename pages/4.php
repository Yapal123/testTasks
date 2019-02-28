
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и поменять их местами.


	</p>
</div>
<div class="taskBlock">
	
	<p>
		Первичный массив:
		<ul>
	<?php 
		$array  = [];
		
		for ($i=0; $i <=10 ; $i++) { 
			$array[] = rand(0,100);?>
			<li><?php echo $array[$i] ?></li>
		<?php } ?>
		</ul>
		<?php 
		$min = min($array);
		$max = max($array);
		?>
		Минимальный элемент - <?php echo $min ?>
		Максимальный элемент - <?php echo $max ?>
		<?php 
		$minElement = array_search($min, $array);
		$maxElement = array_search($max, $array);
		
		$array[$minElement] = $max." - Здесь был минимальный элемент";
		$array[$maxElement] = $min." - Здесь был максимальный элемент";
		?>
		<br>
		Измененный массив:
		<ul>
		<?php for ($i=0; $i <=10 ; $i++): ?>
			<li><?php echo $array[$i] ?></li>
		<?php endfor ?>
		</ul>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>