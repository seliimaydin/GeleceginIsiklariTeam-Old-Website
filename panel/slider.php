<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
        <!-- /.card-header -->

            <!-- /.card -->


              <!-- /.card-header -->


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

              <!-- /.card-header -->

              <!-- /.card-body -->

            <!-- /.card -->

            <div class="card">



              <!-- /.card-header -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mesajlar</h3>

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
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Resim</th>
                      <th>Başlık</th>
                      <th>Açıklama</th>
                      <th>Buton Adı</th>
                      <th>Sıra</th>
                      <th></th>
                      <th style="float:right"><a href="sliderekle.php"><button style="width: 150px" class="btn btn-primary">Slider Ekle</button></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $slider=$baglanti->prepare("SELECT * from slider ");

                    $slider->execute();

                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {



                    ?>

                    <tr>
                      <td><img style="width: 300px; height: 175px;" src="resimler/slider/<?php echo $slidercek['resim'] ?>"></td>
                      <td><?php echo $slidercek['baslik'] ?></td>
                      <td><?php echo $slidercek['aciklama'] ?></td>
                      <td><?php echo $slidercek['button'] ?></td>
                      <td><?php echo $slidercek['sira'] ?></td>
                      <td></td>
                      <td style="float:right">

          <form action="islem/islem.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $slidercek['id'] ?>">
          <input type="hidden" name="resim" value="<?php echo $slidercek['resim'] ?>">
          <button name="slidersil" class="btn btn-danger">Sil</button>

          </form>

          </td>
                      <td style="float:right"><a href="sliderduzenle.php?id=<?php echo $slidercek['id'] ?>"><button class="btn btn-success">Düzenle</button></a></td>


                    </tr>
<?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require'footer.php'; ?>
