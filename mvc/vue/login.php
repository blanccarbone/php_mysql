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
if (connexion() == true) {

}else{

}
?>