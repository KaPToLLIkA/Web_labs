

<?php
$car_array = array(
    "audi" => "AUDI",
    "bmw" => "BMW",
    "ford" => "FORD")

?>
<span>
            <ul>
               <?php
               foreach ($car_array as $urr => $name)
               {
                   
                   echo "<li><a href=\"../index.php?car&name=$urr\"><img src=\"..img/$urr.png\" width="15" height="15" alt="Пример">$name</a>"
               }
               ?>
            </ul>
</span>


