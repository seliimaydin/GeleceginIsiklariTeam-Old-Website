<?php require 'header.php'; ?>

    <!-- Main content -->
    <section> <class="content">
      <div class="row">

          </div>
        </section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

                    <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                      <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">favicon</label>
                          <input name="fav" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                        </div>
                                      <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resim</label>
                            <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                          </div>
                                        <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Resim</label>
                              <input name="resim2" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                            </div>




                  </div>







                <?php

if ($_GET['durum']=="Başarılı") { ?>

  <h4 style="color:green; margin-left:10px">Başarılı</h4>

  <?php
}
elseif($_GET['durum']=="Başarısız"){?>
  <h4 style="color:red; margin-left:10px">Başarısız</h4
<?php
}
?>




                <div class="card-footer">
                  <button name="logokaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
