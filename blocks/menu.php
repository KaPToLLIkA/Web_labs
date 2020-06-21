

<?php
$car_array = array(
    "audi" => "AUDI",
    "bmw" => "BMW",
    "ford" => "FORD")

?>

<div class="left">
    <div id="left-menu">
        <div class="block-nad-menu"></div>
            <div class="block-menu">
                <ul>
                <?php
                foreach ($car_array as $urr => $name)
                {
                    echo "<li><a href=\"../index.php?carname=$urr\">
                    <img src=\"../img/$urr.png\" width=\"15\" height=\"15\" alt=\"Пример\"> $name</a>";
                
                    
                }
                ?>
                </ul>
            </div>
        <div class="block-pod-menu"></div>
    </div>
</div>


