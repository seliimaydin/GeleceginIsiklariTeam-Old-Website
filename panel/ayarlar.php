<?php require 'header.php';
$ayar=$baglanti->prepare("SELECT * from ayar where ayarid=?");

$ayar->execute(array(2));


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









              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Favicon</label>
                    <input name="fav" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['baslik'] ?>" placeholder="Lütfen sitenizin baslığını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['aciklama'] ?>" placeholder="Lütfen sitenizin açıklamasını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelime</label>
                    <input name="keyword" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['keyword'] ?>" placeholder="Lütfen sitenizin anahtar kelimesini giriniz">
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
                  <button name="gonder" type="sumbit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
