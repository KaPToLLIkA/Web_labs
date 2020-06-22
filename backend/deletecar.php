
<div class="right">
<?php

    $car_id = $_GET['carid'];
    $man_id = $_GET['manid'];

    $query = "DELETE FROM car WHERE idcar = $car_id";
    $res = mysqli_query($mysql, $query);
    
    if($res) {
        echo "Успешно удалено. <br><a href=\"../index.php?manid=$man_id\">Вернуться назад.</a>";
    } else {
        echo "Ошибка удаления. <br><a href=\"../index.php?manid=$man_id\">Вернуться назад.</a>";
    }
?>
</div>