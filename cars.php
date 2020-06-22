<div class="right">
    <h1>
        <?php 
        if(isset($_GET['manid'])) {
            $man_id = $_GET['manid'];
            $query = "SELECT manufacturer.manufacturer FROM manufacturer WHERE id = $man_id";
            $res = mysqli_query($mysql, $query);
            while($row = mysqli_fetch_row($res)) {
                echo "$row[0]";
            }
        }
        ?>

    </h1>
	<div class="thumb">
        <?php
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
            $can_edit_car = false;
            $can_delete_car = false;
            $can_add_car = false;

            foreach($permissions as $permission) {
                if (!(strpos($permission, "edit car") === false)) {
                    $can_edit_car = true;
                }
                
                if (!(strpos($permission, "delete car") === false)) {
                    $can_delete_car = true;
                }

                if (!(strpos($permission, "add car") === false)) {
                    $can_add_car = true;
                }
            }

            $query = "SELECT `name`, img_ref, `desc`, `idcar` FROM car WHERE manufacturer_id = $man_id";
            $res = mysqli_query($mysql, $query);
            
            while($row = mysqli_fetch_row($res)) {
                echo "<figure>
                <img src=\"{$row[1]}\"/>
                <figcaption>
                    {$row[0]}
                    <br>
                    {$row[2]}
                    <br>";
                if($can_edit_car) {
                    echo "<a href=\"index.php?manid={$man_id}&carid={$row[3]}&act=editcar\"><img src=\"img/84380.png\"></a>";
                }
                if($can_delete_car) {
                    echo "<a href=\"index.php?manid={$man_id}&carid={$row[3]}&act=deletecar\"><img src=\"img/trash.jpg\"></a>";
                }
                echo"</figcaption></figure>";
            }
            if($can_add_car) {
                echo "<figure>
                <a href=\"index.php?manid={$man_id}&act=addcar\"><img src=\"img/add.png\"></a>
                </figure>";
            }
            
        ?>
    </div>
</div>