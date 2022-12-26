<?php require 'header.php';

$slider=$baglanti->prepare("SELECT * from slider where id=:id ");

$slider->execute(array(
    'id'=>$_GET['id']
));

$slidercek=$slider->fetch(PDO::FETCH_ASSOC)

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
                    <label for="exampleInputEmail1"></label>
                    <img style="width: 300px; height: 175px;" src="resimler/slider/<?php echo $slidercek['resim'] ?>">
                  </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                    <form action="islem/islem.php" method="POST">

                  </div>

                  <input  type="hidden" name="id" value='<?php echo $slidercek['id'] ?>'>
                <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slidercek['baslik'] ?>" placeholder="Lütfen Başlık Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slidercek['aciklama'] ?>" placeholder="Lütfen Açıklama Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slidercek['link'] ?>" placeholder="Lütfen Link Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Buton İsim</label>
                    <input name="button" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slidercek['button'] ?>" placeholder="Lütfen Button İsmi Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $slidercek['sira'] ?>" placeholder="Lütfen Sıra Numarasını Giriniz">
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
                  <button name="sliderduzenle" type="submit" class="btn btn-primary">Değiştir</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
