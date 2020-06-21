<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Автосалон</title>
  <link rel="stylesheet" href="styles/style.css" type="text/css" />
  <link rel="shortcut icon" href="img/car.ico" type="image/x-icon">
</head>

<body>
    
    <?php include ("blocks/head.php");?>

        <div id="content">
        <?php 
        if (isset($_GET['carname'])) {
            include ("content/cars.php");
        } else if (isset($_GET['info'])) {
            $info = $_GET['info'];
        } else {
            include ("content/main.php");
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