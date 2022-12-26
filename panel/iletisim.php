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
                      <th>Başlık</th>
                      <th>Email</th>
                      <th>Konu</th>
                      <th>Mesaj</th>
<th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $iletisim=$baglanti->prepare("SELECT * from iletisim order by id DESC ");

                    $iletisim->execute();

                    while ($iletisimcek=$iletisim->fetch(PDO::FETCH_ASSOC)) {



                    ?>

                    <tr>
                      <td><?php echo $iletisimcek['baslik'] ?></td>
                      <td><?php echo $iletisimcek['email'] ?></td>
                      <td><?php echo $iletisimcek['konu'] ?></td>
                      <td><?php echo $iletisimcek['mesaj'] ?></td>
<td></td>

<td style="float:right">

<form action="islem/islem.php" method="POST">
<input type="hidden" name="id" value="<?php echo $iletisimcek['id'] ?>">

<button name="iletisimsil" class="btn btn-danger">Sil</button>

</form>
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
