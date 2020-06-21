<div class="right">
    <h1>
        <?php 
        if(isset($_GET['carid'])) {
            $car_id = $_GET['carid'];
            $query = "SELECT manufacturer.manufacturer FROM manufacturer WHERE id = $car_id";
            $res = mysqli_query($mysql, $query);
            while($row = mysqli_fetch_row($res)) {
                echo "$row[0]";
            }
        }
        ?>

    </h1>
	<div class="thumb">
        <?php
            $query = "SELECT `name`, img_ref, `desc` FROM car WHERE manufacturer_id = $car_id";
            $res = mysqli_query($mysql, $query);
            
            while($row = mysqli_fetch_row($res)) {
                echo "<figure>
                <img src=\"{$row[1]}\"/>
                <figcaption>{$row[0]}<br>{$row[2]}</figcaption>
                </figure>";
            }
        
        ?>
    </div>
</div>