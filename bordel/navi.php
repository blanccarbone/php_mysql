<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <title>php mysql pour les nuls</title>
  <script type="text/javascript" src="js/bootstrap.js"></script>    
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PhP_MySQL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <?php 
            if (isset($_SESSION['session_ouverte'])) {
              if ($_SESSION['session_ouverte']) {
                echo '<li><a href="logout.php">logout</a></li>';
              }else{
                echo '<li><a href="login.php">login</a></li>';              
              }
            }else{
              echo '<li><a href="login.php">login</a></li>';
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <?php 
    if (isset($_SESSION['session_ouverte'])) {
      if ($_SESSION["session_ouverte"]){
        echo '<div class="alert alert-success" role="alert">Vous êtes connecté</div>';
      }
    }else{
    }
    ?>