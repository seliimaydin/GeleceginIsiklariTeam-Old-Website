<?php require 'header.php' ?>
<head>
  <link rel="stylesheet" type="text/css" href="dropzone.css">
  <script src="dropzone.js" type="text/javascript"></script>

</head>
<!-- Main content -->
<section class="content">



</section>        <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Çoklu resim</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->

      <form action="cokluresimyukle.php" method="post" enctype="multipart/form-data"  class="dropzone">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      </form>


<div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>resim</th>

                      <th></th>

                  </thead>
                  <tbody>

<?php


$cokluresim=$baglanti->prepare("SELECT * from cokluresim where urun_id=:urun_id ");


$cokluresim->execute(array(


  'urun_id'=>$_GET['id']
));

while ($cokluresimcek=$cokluresim->fetch(PDO::FETCH_ASSOC)) {

 ?>

                    <tr>
                      <td><img style="width: 300px; height: 170px" src="resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>"></td>
                    <td></td>
                             <td style="float:right">

<form action="islem/islem.php" method="POST">
<input type="hidden" name="id" value="<?php echo $cokluresimcek['id'] ?>">
<input type="hidden" name="resim" value="<?php echo $cokluresimcek['resim'] ?>">
<input type="hidden" name="urun_id" value="<?php echo $cokluresimcek['urun_id'] ?>">
  <button name="cokluresimsil" class="btn btn-danger">Sil</button>
</form>

                             </td>

                    </tr>
<?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>






      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require 'footer.php' ?>
