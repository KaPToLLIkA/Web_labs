<div class="right">
    <h1>
        <?php 
        if(isset($_GET['manid'])) {
            $man_id = $_GET['manid'];
            $query = "SELECT manufacturer.manufacturer FROM manufacturer WHERE id = $man_id";
            $res = mysqli_query($mysql, $query);
            while($row = mysqli_fetch_row($res)) {
                echo "$row[0]";
            }
        }
        ?>

    </h1>
	<div class="thumb">
        <?php
            $query = "SELECT `name`, img_ref, `desc`, `idcar` FROM car WHERE manufacturer_id = $man_id";
            $res = mysqli_query($mysql, $query);
            
            while($row = mysqli_fetch_row($res)) {
                echo "<figure>
                <img src=\"{$row[1]}\"/>
                <figcaption>
                    {$row[0]}
                    <br>
                    {$row[2]}
                    <br>
                    <a href=\"index.php?manid={$man_id}&carid={$row[3]}&act=editcar\"><img src=\"img/84380.png\"></a>
                    <a href=\"index.php?manid={$man_id}&carid={$row[3]}&act=deletecar\"><img src=\"img/trash.jpg\"></a>
                </figcaption>
                </figure>";
            }
            echo "<figure>
            <a href=\"index.php?manid={$man_id}&act=addcar\"><img src=\"img/add.png\"></a>
            </figure>";
        ?>
    </div>
</div>