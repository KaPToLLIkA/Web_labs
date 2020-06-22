<?
    if(isset($_GET['manid']) AND isset($_GET['carid'])) {
        $man_id = $_GET['manid'];
        $car_id = $_GET['carid'];
    }

    $query = "SELECT `desc` FROM car WHERE idcar = $car_id";
    $res = mysqli_query($mysql, $query);
    $row = mysqli_fetch_row($res);
?>


<div class="right">
    <form method="POST" action="../backend/editcarform.php<?echo"?manid=$man_id&carid=$car_id";?>">
        <div>
        <label>Изменить информацию о машине</label>


        </div>
        
        <div>
            <label for="desc">Описание</label>

            <textarea name="desc" placeholder="<?echo "$rows[0]"?>" cols="60" rows="10" required></textarea>
            
        </div>
        <button type="submit">Применить</button>
    </form>
</div>
