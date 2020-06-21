
<?php include ("arrays.php");?>

<div class="right">
    <h1>
        <?php 
        if(isset($_GET['carname'])) {
            $car_name = $_GET['carname'];
            echo $car_name;
        }
        ?>

    </h1>
	<div class="thumb">
        <?php
            if (strcasecmp($car_name, "AUDI") == 0) {
                $cars = $audi_cars;
            } else if (strcasecmp($car_name, "BMW") == 0) {
                $cars = $bmw_cars;
            } else if (strcasecmp($car_name, "FORD") == 0) {
                $cars = $ford_cars;
            }
            
            foreach($cars as $car) {
                echo "<figure>
                    <img src=\"../img/{$car["img"]}\" width=\"50%\" height=\"50%\"  />
                    <figcaption>{$car["text"]}</figcaption>
                </figure>\n";


            }
        
        ?>
    </div>
</div>