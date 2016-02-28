<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <form class="form-group" action="" method="post">
        <ul class="list-group">
          <?php for ($i=0; $i < 5; $i++) { ?>
            <li class="list-group-item">
              <input type="checkbox" name="name" value="">
                <?php echo "/etc/$i"; ?>
              </input>
            </li>
          <?php } ?>
        </ul
      </form>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <h4>Destino</h4>
    </div>
    <div class="col-md-1">
      <button type="button" class="btn btn-default" name="destino">
        <span class="glyphicon glyphicon-circle-arrow-right"></span>
      </button>
    </div>
  </div>
</div>
