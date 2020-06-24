<div class="right">
    <h1>До нового года:</h1>
    <div id="newYearTimer">
        <script src="js/timer.js"></script>
    </div>
    <button id="open-button">Информация</button>
    <div class="modal-overlay closed" id="modal-overlay"></div>
    <div class="modal closed" id="modal">    
    <div class="modal-guts">
    <p>
        Означает конец текущего года.
    </p>
    <button id="close-button">Закрыть</button>
    </div>
    </div>            
    <script>
        
        var modal = document.getElementById("modal"),
            modalOverlay = document.getElementById("modal-overlay"),
            closeButton = document.getElementById("close-button"),
            openButton = document.getElementById("open-button");
        
           

        closeButton.onclick = function(){
            modal.classList.toggle("closed");
            modalOverlay.classList.toggle("closed");
            
        };
            
        openButton.onclick = function(){
            modal.classList.toggle("closed");
            modalOverlay.classList.toggle("closed");
        };
        
    </script>
    <h1>Перечень автомобилей</h1>
    <p>В данном разделе Вы можете выбрать подходящую вам модель автомобиля. Для этого выберите интерисующую Вас марку автомобиля в меню слева.</p>
 
                 
    <img src="img/many_auto.png" width="100%" height="80%" alt="Много автомобилей" title="Много автомобилей" style="margin-right:40px;" />
               

</div>