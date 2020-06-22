<?php
    include ("../config.php");


    $desc = trim(strip_tags($_POST["desc"]));
    $car_id = $_GET['carid'];
    $man_id = $_GET['manid'];

    if(!empty($desc)) {
        $query = "UPDATE car SET `desc`='$desc' WHERE idcar = $car_id";
        $res = mysqli_query($mysql, $query);
       
        echo "Успешно изменено. <br><a href=\"../index.php?manid=$man_id\">Вернуться назад.</a>";
    } else {
        echo "Ошибка изменения. <br><a href=\"../index.php?manid=$man_id&carid=$car_id\">Вернуться назад.</a>";
    }
?>