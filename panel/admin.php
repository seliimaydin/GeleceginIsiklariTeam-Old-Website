<?php require 'header.php';

?>

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
                    <label for="exampleInputEmail1">Kullanıcı Adı Soyadı</label>
                    <input name="adsoyad" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $kullanicicek['adsoyad'] ?>" placeholder="Lütfen Adminin Adını Soyadını Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input name="kad" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $kullanicicek['kad'] ?>" placeholder="Lütfen Adminin Kullanıcı Adını  Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Şifre</label>
                    <input name="sifre" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $kullanicicek['sifre'] ?>" placeholder="Lütfen Adminin Şifresini Giriniz">
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
                  <button name="kullanicikaydet" type="sumbit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
