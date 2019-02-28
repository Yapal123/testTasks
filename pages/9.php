<?php 
function getYear($year)
{
    $start = 1924;
    if ($year < $start) return false;
    return array(
        "Крысы",
        "Быка",
        "Тигра",
        "Кролика",
        "Дракона",
        "Змеи",
        "Лошади",
        "Козы/Овцы",
        "Обезьяны",
        "Петуха",
        "Собаки",
        "Свиньи"
    )[($year - $start) % 12];
}



?>

<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/header.php'; ?>
<div class="questBlock">
    <p>
        Составить программу, которая бы по заданному числу будет выводить его название по китайскому календарю. Заданное число не может быть меньше 1924

    </p>
</div>
<div class="taskBlock">
    <form method="POST" action="9.php">
        <label>Ввидите год</label>
        <input type="number" name="year" id="inputChin"><br><br>
        <input type="submit" name="sub" value="Посчитать" id="subChin">
    </form>
    <p>
        <?php if (!empty($_POST)): ?>
            <?php echo $_POST['year']." - это год ".getYear($_POST['year']) ?>
        <?php endif ?>
    </p>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/layouts/footer.php'; ?>
