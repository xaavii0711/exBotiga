<?php
    foreach($_POST as $key => $value) {
        if ($key == "user") {
            echo $value."\n<br>";
        }
        if ($value == "on") {
            echo $key."\n<br>";
        }
    }
?>