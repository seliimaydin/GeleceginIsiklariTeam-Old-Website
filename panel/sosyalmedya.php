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
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input name="facebook" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['facebook'] ?>" placeholder="Site Twitter adresini girin">
                  </div>
                  <form role="form-group">

                    <label for="exampleInputEmail1">Instagram</label>
                    <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['instagram'] ?>" placeholder="Site İnstagram adresini girin">

                    <form role="form-group">
                      <label for="exampleInputEmail1">Youtube</label>
                      <input name="youtube" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['youtube'] ?>" placeholder="Site youtube adresini girin">

                                          <form role="form-group">
                                            <label for="exampleInputEmail1">Linkedin</label>
                                            <input name="twitter" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['twitter'] ?>" placeholder="Site linkedin adresini girin">


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
                  <button name="sosyalkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
