<?php
//Connect
try {
    $connect = mysqli_connect('localhost', 'root', '', 'db_web_phuot', 3306);
} catch (Exception $e) {
    echo "Couldn't connect DB !";
}
