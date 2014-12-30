<form method="post" action="index.php" class="form-horizontal">
    <fieldset>
        <!-- Form Name -->
        <h3 class="text-center">Login</h3>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>
            <div class="col-md-4">
                <input id="flog" name="flog" type="text" placeholder="Login" class="form-control input-md" required="">
                <span class="help-block"></span>
            </div>
        </div>
        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput"></label>
            <div class="col-md-4">
                <input id="fpass" name="fpass" type="password" placeholder="password" required="" class="form-control input-md">
                <span class="help-block"></span>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Button</button>
            </div>
        </div>
    </fieldset>
</form>


<?php

if (isset($_POST['flog']) AND isset($_POST['fpass'])) {
    $connexionA = new Connexion($_POST['flog'], $_POST['fpass']);
    echo ($connexionA->stateSession());
}




?>


<form class="form-horizontal" method="post" action="index.php">
    <fieldset>

        <!-- Form Name -->
        <legend>Nombre à afficher</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
            <div class="col-md-4">
                <select id="selectbasic" name="choix" class="form-control">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton"  class="btn btn-primary btn-block">Button</button>
            </div>
        </div>

    </fieldset>
</form>









