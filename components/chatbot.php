<?php function chatbot(){ ?>

    <input id="check-chatbot" type="checkbox" style="display:none">

    <label id="btn-chatbot" for="check-chatbot">
        <span class="icon-chat"></span>
    </label>

    <div id="chatbot">
        <div class="header">
            <div class="row">
                <div class="col-8">
                    <img src="dist/img/logo.png">
                    <h4>Asistente</h4>
                </div>
                <div class="col-4">
                    <label for="check-chatbot">
                        <span class="icon-x"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="body">
           <div class="row p-0" id="AllMessage">
           </div>
           <div class="row" id="MessageUser">
           </div>
        </div>
    </div>

<?php
}
?>