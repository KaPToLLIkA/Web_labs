<div class="right">
    <form method="POST" action="../backend/authform.php">
        <div>
        <label>Вход</label>


        </div>
        
        <div>
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
            <label for="password">Пароль</label>

            <input type="password" name="password" required>
        </div>

        
        <button type="submit">Войти</button>
    </form>
</div>
