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
                echo "<figure class=\"car-figure\">
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
                echo "<figure id=\"add_icon\">
                <a href=\"index.php?manid={$man_id}&act=addcar\"><img src=\"img/add.png\"></a>
                </figure>";
            }
            
        ?>
        <table class="pagination">
            <tr>
                <td><button class="button-navigate" id="button-navigate-left"><<</button></td>
                <td><button class="button-navigate" id="button-navigate-leftone"><</button></td>
                <td><div id="navigation">
                <td><button class="button-navigate" id="button-navigate-1" value="1">1</button></td>
                <td><button class="button-navigate" id="button-navigate-2" value="2">2</button></td>
                <td><button class="button-navigate" id="button-navigate-3" value="3">3</button></td>
                <td><button class="button-navigate" id="button-navigate-4" value="4">4</button></td>
                <td><button class="button-navigate" id="button-navigate-5" value="5">5</button></td>
                </div></td>
                <td><button class="button-navigate" id="button-navigate-rightone">></button></td>
                <td><button class="button-navigate" id="button-navigate-right">>></button></td>
            </tr>
        </table>
        <script src="js/page_selector.js"></script>
    </div>
</div>