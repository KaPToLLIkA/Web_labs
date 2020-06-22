<?
    session_start();
    include ("../config.php");
    include ("passwordlib.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass_hash = password_hash($password, PASSWORD_BCRYPT);
    
    $query = "SELECT `password`, `role_idrole` FROM user WHERE email = '$email';";
    $res = mysqli_query($mysql, $query);

    if(mysqli_num_rows($res) != 0) {
        $row = mysqli_fetch_row($res);
        
        $_SESSION["email"]=$email;
        $_SESSION["role_id"]=$row[1];

        if(password_verify($password, $row[0])) {
            $_SESSION["auth"]=true;     
            echo "Успешная авторизация.<br><a href=\"../index.php\">Назад.</a>";
        } else {
            $_SESSION["auth"]=false;
            echo "Неверный пароль.<br><a href=\"../index.php?act=login\">Повторить.</a>";
        }
    } else {
        $_SESSION["auth"]=false;
        echo "Незарегистрированный пользователь.<br><a href=\"../index.php?act=register\">Регистрация.</a>";
    }
    

?>