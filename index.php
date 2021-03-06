<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Автосалон</title>

  <?php 
        if (isset($_GET['manid'])) {
            echo "<link rel=\"stylesheet\" href=\"styles/cars.css\" type=\"text/css\" />";
        } else if (isset($_GET['info'])) {
            echo "<link rel=\"stylesheet\" href=\"styles/about_us_style.css\" type=\"text/css\" />";
        } else {
            echo "<link rel=\"stylesheet\" href=\"styles/style.css\" type=\"text/css\" />";
        }

    ?>

    <link rel="stylesheet" href="styles/formstyle.css" type="text/css" />

  <link rel="shortcut icon" href="img/car.ico" type="image/x-icon">
</head>

<body>
    <?
        include ("config.php");
    ?>


    <?php include ("blocks/head.php");?>

        <div id="content">
        <?php
        if (isset($_GET['act'])) {
            switch($_GET['act']) {
            case "editcar":
                include ("forms/editcar.php");
            break;
            case "addcar":
                include ("forms/addcar.php");
            break;
            case "deletecar":
                include ("backend/deletecar.php");
            break;
            case "login":
                include ("forms/login.php");
            break;
            case "register":
                include ("forms/register.php");
            break;
            }

        } else {
            if (isset($_GET['info'])) {
                $info = $_GET['info'];
            } else if (isset($_GET['manid'])) {
                include ("cars.php");
            } else {
                include ("content/main.php");
            }
        }

        

        ?>
            
            
             
            <!-- Левое меню - левый блок блок -->
            <?php
            
            
            if (strcasecmp($info, "about") == 0) {
                include ("content/about.php");
            } else if (strcasecmp($info, "contacts") == 0) {
                include ("content/contacts.php");
            } else {
                include ("blocks/menu.php");
            }
            

            ?>
			
			<div class="myclr"></div>
         
            <!-- Подвал -->
            <?php include ("blocks/footer.php");?>
         
        </div>
</body>
</html>