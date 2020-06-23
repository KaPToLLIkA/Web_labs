<?
    if(isset($_GET['manid'])) {
        $man_id = $_GET['manid'];
    }

    
?>


<div class="right">
    <form method="POST" action="../index.php<?echo"?manid=$man_id";?>&act=addcar&proc=1">
        <div>
        <h1>Добавить автомобиль</h1>


        </div>
        
        <div>
        <br>
            <label for="name">Название</label>

            <input type="text" name="name" required>
        </div>

        <div>
        <br>
            <label for="img_ref">Ссылка на изображение</label>

            <input type="text" name="img_ref" required>
        </div>

        <div>
        <br>
            <label for="desc">Описание</label>

            <textarea name="desc" placeholder="Ваше описание" cols="60" rows="10" required></textarea>
        </div>

        
        <button type="submit">Применить</button>
    </form>
</div>
