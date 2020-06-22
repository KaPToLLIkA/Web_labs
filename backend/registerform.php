<?
    session_start();
    include ("../config.php");
    include ("passwordlib.php");

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    

    $_SESSION["email"]=$email;
    $_SESSION["role_id"]=2;

    if(strcmp($password1, $password2) == 0) {
        $pass_hash = password_hash($password1, PASSWORD_BCRYPT);
        $query = "SELECT `password`, `role_idrole` FROM user WHERE email = '$email';";
        $res = mysqli_query($mysql, $query);

        if(mysqli_num_rows($res) != 0) {
            echo "Ошибка регистрации. Пользователь существует.<br><a href=\"../index.php?act=login\">Войти.</a>";
            $_SESSION["auth"]=false;
        } else {
            $query = "INSERT INTO `user`(`email`, `password`, `name`, `role_idrole`) 
            VALUES ('$email', '$pass_hash', '$name', '2');";
            $res = mysqli_query($mysql, $query);

            if($res) {
                $_SESSION["auth"]=true;
                echo "Успешная регистрация.<br><a href=\"../index.php\">Назад.</a>";
            } else {
                echo "Ошибка регистрации.<br><a href=\"../index.php?act=register\">Повторить.</a>";
                $_SESSION["auth"]=false;
            }
        }
    } else {
        $_SESSION["auth"]=false;
        echo "Пароли не совпадают.<br><a href=\"../index.php?act=register\">Повторить.</a>";
    }


?>