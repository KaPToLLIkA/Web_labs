<?php
    

    $name = trim(strip_tags($_POST["name"]));
    $img_ref = trim(strip_tags($_POST["img_ref"]));
    $desc = trim(strip_tags($_POST["desc"]));
    
    $man_id = $_GET['manid'];
    echo "<div class=\"right\">";
    if(!empty($desc) AND !empty($name) AND !empty($img_ref)) {
        $query = "INSERT INTO `car`(`name`, `img_ref`, `desc`, `manufacturer_id`) VALUES ('$name', '$img_ref', '$desc', '$man_id');";
        $res = mysqli_query($mysql, $query);
       
        echo "<h3>Успешно добавлено. <br><a href=\"../index.php?manid=$man_id\">Вернуться назад.</a></h3>";
    } else {
        echo "<h3>Ошибка добавления. <br><a href=\"../index.php?manid=$man_id&act=addcar\">Вернуться назад.</a></h3>";
    }
    echo "</div>";
?>