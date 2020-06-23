<?
    if (isset($_GET['r']) || isset($_GET['e'])) {
        $new_role = $_GET['r'];
        $user = $_GET['e'];

        $query = "UPDATE `user` SET `role_idrole` = '$new_role' WHERE `email` = '$user';";

        mysqli_query($mysql, $query);
    }
?>


<div class="right">
    <h1>
        <?
        if(isset($_SESSION['email'])) {
            echo "{$_SESSION['email']}";
            $query = "SELECT `name` FROM `user` WHERE `email` = '{$_SESSION['email']}';";
            $res = mysqli_query($mysql, $query);
            while($row = mysqli_fetch_row($res)) { 
                echo " // $row[0]";
            }

        } else {
            echo "Профиль";
        }
        


        ?>
    </h1>
    <p>Это ваш личный кабинет. Тут отображаются доступные действия, ваша почта и ваше имя.</p>
        <?
        $permissions = array();
        if(isset($_SESSION["auth"]) AND isset($_SESSION["role_id"])) {
            $role_id = $_SESSION["role_id"];
            $authorized = $_SESSION["auth"];

            if ($authorized) {
                $query = "SELECT permission.name FROM role 
                INNER JOIN role_has_permission ON role.idrole = role_has_permission.role_idrole
                INNER JOIN permission ON role_has_permission.permission_idpermission = permission.idpermission
                WHERE role.idrole = '$role_id';";

                $res = mysqli_query($mysql, $query);
                while($row = mysqli_fetch_row($res)) { 
                    $permissions[] = $row[0];
                }
                
            }

        }
        $can_see_all_users = false;
        $can_set_role = false;
       

        foreach($permissions as $permission) {
            if (!(strpos($permission, "see all users") === false)) {
                $can_see_all_users = true;
            }
            
            if (!(strpos($permission, "set role") === false)) {
                $can_set_role = true;
            }
        }
        
        if ($can_see_all_users) {
            echo "<p>Вы администратор и можете видеть всех пользователей.</p>";
            if ($can_set_role)
            echo "<p>А так же можете устанавливать для них роли.</p>";
            $query = "SELECT `email`, `user`.`name`, `role`.`name` FROM `user` 
            INNER JOIN `role` ON role.idrole = user.role_idrole;";

            $res = mysqli_query($mysql, $query);
            echo "<table><tr><td>EMAIL</td><td>USER</td><td>ROLE</td></tr>";
            while($row = mysqli_fetch_row($res)) {
                
                if ($can_set_role) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>
                    <a href=\"../index.php?act=office&r=1&e=$row[0]\"><p>↑Admin↑</p></a>
                    </td><td>
                    <a href=\"../index.php?act=office&r=3&e=$row[0]\"><p>Moderator</p></a>
                    </td><td>
                    <a href=\"../index.php?act=office&r=2&e=$row[0]\"><p>↓User↓</p></a>
                    </td></tr>";
                } else {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                }
            }
            echo "</table>";

        }


        ?>
</div>