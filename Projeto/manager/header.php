<div class="container-fluid">
  <div class="row">
    <!--Titulo-->
    <div class="col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-2">
      <h1 style="textcolor:fff">
          WSM Backups
      </h1>
    </div>
    <!--/Titulo-->
    <!--Wecolme user-->
    <div class="col-sm-1 col-md-1">
      <br>
      <p>Welcome, <b><?php echo ucfirst($_SESSION['user']);?></b> !</p>
    </div>
    <!--/Welcome user-->
    <!--Logout-->
    <div class="col-sm-1 col-md-1">
      <br>
      <form action="logout.php">
        <button type="submit" class="btn btn-default btn-md" name="button">Logout</button>
      </form>
    </div>
    <!--/Logout-->
    <!--Linha-->
    <div class="col-sm-12 col-md-12">
      <hr>
      <br>
    </div>
    <!--/Linha-->
</div>
