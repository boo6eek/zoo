<?php

    require "mysqli.php";

    $data_add = $_POST["data_add"];
    $student_id = $_POST['student_id'];
    $animal_id = $_POST['animal_id'];
    $food_id = $_POST['food_id'];
    $quantity_food = $_POST["quantity_food"];

    $select = SQL_insert ("
                
                
                    INSERT INTO feeding (date, student_id, animal_id, food_id, quantity_food)
                    VALUES ('$data_add', $student_id, $animal_id, $food_id, $quantity_food);
                    
                 
               ");
    echo '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Запись добавлена!</strong></div>';
?>

