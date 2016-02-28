<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10 col-md-10">
      <h1 style="textcolor:fff">
        <?php if($_GET['pg'] == "start") {?>
          WSM Backups
          <?php } else {
            echo ucfirst($_GET['pg']);
          } ?>
      </h1>
    </div>
    <div class="col-sm-2 col-md-2">
      <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
    </div>
    <div class="col-sm-12 col-md-12">
      <hr>
      <br>
    </div>
  </div>
</div>
