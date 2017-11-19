<?php

    require "mysqli.php";

    $student_id = $_POST['student_id'];
    $date_before = $_POST["data_before"];
    $date_after = $_POST["data_after"];

    $select = SQL_select("
        
            SELECT animal.name as 'Вид животного', student.name as 'Имя студента', COUNT(animal.animal_id) as 'Количество кормлений'
            FROM animal, feeding, student
            WHERE feeding.animal_id = animal.animal_id
                and student.student_id = feeding.student_id and feeding.student_id=$student_id
                and DATE(feeding.date) BETWEEN '$date_before' AND '$date_after'
            GROUP BY animal.name, student.name
         
       ");
    require "view.php";
?>


