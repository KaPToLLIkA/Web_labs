<div id="basic">
     
	 
    <div id="head-site">
        <a href="#">
		<img src="../img/logo.png" width="10%" height="7%" alt="Логотип автосалона" title="Логотип автосалона" /></a>
		<img src="../img/auto_logo.png" width="22%" height="15%" alt="Автосалон" title="Автосалон"/></a>
			
           
			
			
    <div id="menu-top">
        <div class="bg-1">
            <ul>
            <?
                
                if (isset($_SESSION["auth"])) {
                    $authorized = $_SESSION["auth"];
                    if ($authorized) {
                        
                        if(isset($_SESSION['email'])) {
                            echo "<li><a href=\"../index.php?act=office\">{$_SESSION['email']}</a></li>";
                        } else {
                            echo "<li><a href=\"../index.php?act=office\">Профиль</a></li>";
                        }
                        
                        echo "<li><a href=\"../index.php?act=logout\">Выйти</a></li>";
                    } else {
                        echo "<li><a href=\"../index.php?act=login\">Войти</a></li>
                        <li><a href=\"../index.php?act=register\">Регистрация</a></li>";
                    }
                } else {
                    echo "<li><a href=\"../index.php?act=login\">Войти</a></li>
                    <li><a href=\"../index.php?act=register\">Регистрация</a></li>";
                }
            
            ?>

            
            <li><a href="../index.php?info=about">О нас</a></li>
            <li><a href="../index.php">Перечень автомобилей</a></li>
            <li class="none-bg"><a href="../index.php?info=contacts">Контактная информация</a></li>
            </ul>
        </div> 	
        <div class="bg-2"></div>
    </div>
</div>