<?
    if(isset($_GET['manid'])) {
        $man_id = $_GET['manid'];
    }

    
?>


<div class="right">
    <form method="POST" action="../backend/addcarform.php<?echo"?manid=$man_id";?>">
        <div>
        <label>Добавить автомобиль</label>


        </div>
        
        <div>
            <label for="name">Название</label>

            <input type="text" name="name" required>
        </div>

        <div>
            <label for="img_ref">Ссылка на изображение</label>

            <input type="text" name="img_ref" required>
        </div>

        <div>
            <label for="desc">Описание</label>

            <textarea name="desc" placeholder="Ваше описание" cols="60" rows="10" required></textarea>
        </div>

        
        <button type="submit">Применить</button>
    </form>
</div>
