<?php



?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
	<p>
		Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел. Рекомендую использовать  функцию fmod для определения "делится число" или "не делится"

	</p>
</div>
<div class="taskBlock">
	<?php 


$divider = 5;
$sum = 0;
?>
<?php for ($i=20; $i <= 45; $i++): ?>
	<?php $dividend = fmod($i, $divider); ?>
	<?php if ($dividend == 0): ?>
		<ul>
			<li>
				<?php echo $i ?> делится на 5.
			</li>
		</ul>	
		<?php $sum=$sum + $i;?>
	<?php endif ?>
<?php endfor ?>


	
	<p>
		Сумма равна: <?php echo $sum ?>
	</p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?> 