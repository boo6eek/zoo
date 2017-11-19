<?php

    require "mysqli.php";

    $food_id = $_POST['food_id'];
    $date_before = $_POST["data_before"];
    $date_after = $_POST["data_after"];

    $select = SQL_select("
            
                SELECT food.name 'Тип пищи', feeding.date 'Дата', SUM(feeding.quantity_food) as 'Количество пищи'
                FROM food, feeding
                WHERE feeding.food_id = food.food_id and feeding.food_id = $food_id
                and DATE(feeding.date) BETWEEN '$date_before' AND '$date_after'
                GROUP BY feeding.date, food.name
                
             
           ");
    require "view.php";
?>

