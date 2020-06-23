<?
session_start();
if(isset($_GET['act'])) {
    if(strcmp($_GET['act'], "logout") == 0) {
        include ("backend/logout.php");
        header("Location: index.php");
    }
}

?>
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
  <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>


    <?
        include ("config.php");

        if(isset($_GET['act'])) {
            if(strcmp($_GET['act'], "logout") == 0) {
                include ("backend/logout.php");
            }
        }
    ?>
    

    <?php include ("blocks/head.php");?>

        <div id="content">
        <?php
        if (isset($_GET['act'])) {
            switch($_GET['act']) {
            case "editcar":
                
                if (isset($_GET['proc'])) {
                    if ($_GET['proc'] == '1') {
                        include ("backend/editcarform.php");
                    }
                } else {
                    include ("forms/editcar.php");
                }
            break;
            case "addcar":
                
                if (isset($_GET['proc'])) {
                    if ($_GET['proc'] == '1') {
                        include ("backend/addcarform.php");
                    }
                } else {
                    include ("forms/addcar.php");
                }
            break;
            case "deletecar":
                include ("backend/deletecar.php");
            break;
            case "login":
                
                if (isset($_GET['proc'])) {
                    if ($_GET['proc'] == '1') {
                        include ("backend/authform.php");
                    }
                } else {
                    include ("forms/login.php");
                }
            break;
            case "register":
                if (isset($_GET['proc'])) {
                    if ($_GET['proc'] == '1') {
                        include ("backend/registerform.php");
                    }
                } else {
                    include ("forms/register.php");
                }
            break;
            case "logout":
                
                include ("forms/login.php");
            break;
            case "office":
                
                include ("content/office.php");
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