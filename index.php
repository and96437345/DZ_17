<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Написать ф-ию, которая выводит на экран набор из checkbox'ов.
Содержимое(текст) передать через параметры. -->

    <?php
        function checkbox($arr) {
            foreach ($arr as $text) {
                echo '<input type="checkbox" name="scales"/><label for="scales">' . $text . '</label><br>';
            }
        }
        checkbox(['HTML', 'CSS', 'JavaScript', 'PHP']);
    ?>
    
</body>
</html>
