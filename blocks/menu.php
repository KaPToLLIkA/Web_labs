<div class="left">
    <div id="left-menu">
        <div class="block-nad-menu"></div>
            <div class="block-menu">
                <ul>
                <?php
                $query = "SELECT id, manufacturer, icon_ref FROM manufacturer;";
                $res = mysqli_query($mysql, $query);
                while ($row = mysqli_fetch_row($res)) {
                    echo "<li><a href=\"../index.php?carid={$row[0]}\">
                    <img src=\"{$row[2]}\" width=\"15\" height=\"15\" alt=\"Пример\"> {$row[1]}</a>";
                }
                ?>
                </ul>
            </div>
        <div class="block-pod-menu"></div>
    </div>
</div>


