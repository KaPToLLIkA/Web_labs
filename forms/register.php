<div class="right">
    <form method="POST" action="../index.php?proc=1&act=register">
        <div>
        <h1>Регистрация</h1>


        </div>
        
        <div>
            <br>
            <label for="name">Ваше имя</label>

            <input type="text" name="name" required>
        </div>

        <div>
            <br>
            <label for="email">Почта</label>
            <?
            if(isset($_SESSION["email"])) {

                echo "<input type=\"email\" name=\"email\" value=\"{$_SESSION["email"]}\" required>";
            } else {
                echo "<input type=\"email\" name=\"email\" required>";
            }
            ?>
        </div>

        <div>
            <br>
            <label for="password1">Пароль</label>

            <input type="password" name="password1" required>
        </div>

        <div>
            <br>
            <label for="password2">Повторите пароль</label>

            <input type="password" name="password2" required>
        </div>



        <button type="submit">Зарегистрироваться</button>
    </form>
</div>
