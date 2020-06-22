<div class="right">
    <form method="POST" action="../backend/registerform.php">
        <div>
        <label>Регистрация</label>


        </div>
        
        <div>
            <label for="name">Ваше имя</label>

            <input type="text" name="name" required>
        </div>

        <div>
            <label for="email">Почта</label>

            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password1">Пароль</label>

            <input type="password" name="password1" required>
        </div>

        <div>
            <label for="password2">Повторите пароль</label>

            <input type="password" name="password2" required>
        </div>



        <button type="submit">Зарегистрироваться</button>
    </form>
</div>
