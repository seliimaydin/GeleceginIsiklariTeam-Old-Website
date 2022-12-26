<?php require 'header.php'; 
$hakkimizda=$baglanti->prepare("SELECT * from ayar  where id=?");

$hakkimizda->execute(array(0));

$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);
?>

    <!-- Main content -->
    <section> <class="content">
      <div class="row">

          </div>
        </section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hakkımızda Ayarları</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->









              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['baslik'] ?>" placeholder="Lütfen sitenizin baslığını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['aciklama'] ?>" placeholder="Lütfen sitenizin açıklamasını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Misyon</label>
                    <input name="misyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['misyon'] ?>" placeholder="Lütfen sitenizin anahtar kelimesini giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Vizyon</label>
                    <input name="vizyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['vizyon'] ?>" placeholder="Lütfen sitenizin baslığını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Yapılan Projeler</label>
                    <input name="pro" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['yapilan'] ?>" placeholder="Lütfen sitenizin açıklamasını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">İşçiler</label>
                    <input name="isci" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['isci'] ?>" placeholder="Lütfen sitenizin anahtar kelimesini giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Suanki Projeler</label>
                    <input name="suanki" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['suankipro'] ?>" placeholder="Lütfen sitenizin baslığını giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Şehir</label>
                    <input name="sehir" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['sehir'] ?>" placeholder="Lütfen sitenizin açıklamasını giriniz">
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
                  <button name="hakkimizda" type="sumbit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
