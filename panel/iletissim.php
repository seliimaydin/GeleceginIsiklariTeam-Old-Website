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
                    <label for="exampleInputEmail1">Adres</label>
                    <input name="adres" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['adres'] ?>" placeholder="Adresini girin girin">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['email'] ?>" placeholder="Email adresini girin girin">
                  </div>



                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon Numarası</label>
                    <input name="telefon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['telefon'] ?>" placeholder="Telefon numarası girin">
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




                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="iletissimkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
