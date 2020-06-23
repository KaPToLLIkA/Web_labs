<?php


    $desc = trim(strip_tags($_POST["desc"]));
    $car_id = $_GET['carid'];
    $man_id = $_GET['manid'];

    echo "<div class=\"right\">";
    if(!empty($desc)) {
        $query = "UPDATE car SET `desc`='$desc' WHERE idcar = $car_id";
        $res = mysqli_query($mysql, $query);
       
        echo "<h3>Успешно изменено. <br><a href=\"../index.php?manid=$man_id\">Вернуться назад.</a></h3>";
    } else {
        echo "<h3>Ошибка изменения. <br><a href=\"../index.php?manid=$man_id&carid=$car_id\">Вернуться назад.</a></h3>";
    }
    echo "</div>";
?>