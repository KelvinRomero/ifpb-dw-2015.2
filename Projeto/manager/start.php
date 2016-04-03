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
    <div class="col-sm-6 col-sm-offset-4 col-md-6 col-md-offset-4">
      <?php echo $dir_err_msg; ?>
        <form class="form" action="makeBKP.php" method="post">
          <h4>Selecione os diretórios</h4>
          <div id="folders">

          </div>
          <br>
          <h4>Selecione o destino</h4>
          <input type="radio" name="bkptype" value="bkpnow" required> Download now!</input><br>
          <input type="radio" name="bkptype" value="schedule" disabled> Schedule</input><br>
          <input type="radio" name="bkptype" value="cloud" disabled> Cloud</input><br>
          <br>
          <button class="btn btn-default btn-md" type="checkbox" name="bkpnow">Next!</button>
        </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
  $("document").ready(function(){
    var url = "srcdirs.php";
    $.get(url, function(dirList){
      dirList.forEach(function(dir){
        $('#folders').append('<input type="checkbox" name="dirs[]" value="'+dir+'">'+dir+'<br>');
      })
    });
  });
</script>
