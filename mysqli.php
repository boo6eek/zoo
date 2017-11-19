<?php

    function SQL_connect () {
        $server = "127.0.0.1";
        $user_name = "root";
        $password = "";
        $DB_name = "zoo";

        $mysqli = new mysqli($server, $user_name, $password, $DB_name);

        if ($mysqli->connect_errno) {
            echo "Ошибка: " . $mysqli->connect_error . "\n";
            exit;
        }

        $mysqli->set_charset("utf8");

        return $mysqli;
    }

    function SQL_select ($select) {
        if (!$result = SQL_connect()->query($select)) {
            echo "Ошибка: " . SQL_connect()->error . "\n";
            exit;
        }

        if ($result->num_rows === 0) {
            echo '<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Нет данных!</strong></div>';
            exit;
        }

        while ($actor = $result->fetch_assoc()) {
            $result_assoc[] = $actor;
        }

        return $result_assoc;
    }
    function SQL_insert ($insert) {
        if (!$result = SQL_connect()->query($insert)) {
            echo "Ошибка: " . SQL_connect()->error . "\n";
            exit;
        }

    }
?>