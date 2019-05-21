<?php
    $conection = mysqli_connect(
        'localhost',
        'root',
        '',
        'task-app'
    );

    if($conection){
        echo 'la base de datos srve';
    }
?>