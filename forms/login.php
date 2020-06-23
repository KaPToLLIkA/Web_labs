<div class="right">
    <form method="POST" action="../index.php?proc=1&act=login">
        <div>
        <h1>Вход</h1>


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
            <label for="password">Пароль</label>

            <input type="password" name="password" required>
        </div>

        
        <button type="submit">Войти</button>
    </form>
</div>
