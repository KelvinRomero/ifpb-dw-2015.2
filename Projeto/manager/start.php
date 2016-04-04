<?php
include('header.php');
if(!isset($_SESSION['dir_err_msg'])){
  $dir_err_msg = "";
}else {
  $dir_err_msg = $_SESSION['dir_err_msg'];
}
?>
<div class="container-fluid">
  <div class="row">
    <form action="makeBKP.php" method="post">
      <div class="form">
        <!--Coluna 1-->
        <div class="col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-2">
          <?php echo $dir_err_msg; ?>
          <!--Diretórios padrão-->
          <div class="form-group" id="folders">
            <h2>I want this...</h2>
          </div>
          <!--/Diretórios padrão-->
          <div class="form-group">
            <div id="alert" class="alert alert-danger" role="alert">
              Esse diretório não existe!
            </div>
          </div>
          <!--Adicionadr diretórios-->
          <div class="form-group">
            <div class="col-sm-6 col-md-6">
            <input autofocus type="text" class="form-control" id="newpath" placeholder="add another path">
            </div>
            <div class="col-sm-2 col-md-2">
              <button type="button" class="btn btn-default" id="addpath" aria-label="Left Align">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </input>
            </div>
            <div class="col-sm-2 col-md-2">
              <button onclick="removeAllPaths()" type="button" class="btn btn-default" id="addpath" aria-label="Left Align">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                Remove all!
              </input>
            </div>
          </div>
          <br><br>
          <!--/Adicionadr diretórios-->
        </div>
        <!--/Coluna 1-->

        <!--Coluna 2-->
        <div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2">
          <!--Tipo de backup-->
          <div class="form-group">
            <h2>And im going to...</h2>
            <input type="radio" name="bkptype" value="bkpnow" required> Download now!</input><br>
            <input type="radio" name="bkptype" value="schedule" disabled> Schedule...</input><br>
            <input type="radio" name="bkptype" value="cloud" disabled> Send to cloud!</input><br>
          </div>
          <!--/Tipo de backup-->
          <button class="btn btn-default btn-md" type="checkbox" name="bkpnow">Go!</button>
        </div>
        <!--/Coluna 2-->
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/local.js"></script>
