<?php require 'header.php';

$emlak=$baglanti->prepare("SELECT * from emlak where id=:id ");

$emlak->execute(array(
    'id'=>$_GET['id']
));

$emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)

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
                    <img style="width: 300px; height: 175px;" src="resimler/urun/<?php echo $emlakcek['resim'] ?>">
                  </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                    <form action="islem/islem.php" method="POST">

                  </div>

                  <input  type="hidden" name="id" value='<?php echo $emlakcek['id'] ?>'>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $emlakcek['baslik'] ?>" placeholder="Lütfen İlan Başlık Giriniz">
                    </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Açıklama</label>
                      <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $emlakcek['aciklama'] ?>" placeholder="Lütfen İlan Açıklama Giriniz">
                    </div>




                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Sıra</label>
                                          <input name="sira" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $emlakcek['sira'] ?>" placeholder="Lütfen Sıra Giriniz">
                                        </div>





<input type="hidden" name="id" value="<?php echo $emlakcek['id']; ?>"

                </div>






                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="urunduzenle" type="submit" class="btn btn-primary">Değiştir</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
