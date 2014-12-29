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
                <select id="selectbasic" name="ok"  class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
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










