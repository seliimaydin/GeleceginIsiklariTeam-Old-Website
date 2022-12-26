<?php require 'header.php'; ?>

<!-- Main content -->
<section>
    <class="content">
        <div class="row">

        </div>
</section>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Site Ayarları</h3>
    </div>
    <?php

    if (@$_GET['durum'] == "ok") { ?>

        <b style="color:green;">İşlem Başarılı...</b>

    <?php } elseif (@$_GET['durum'] == "no") { ?>

        <b style="color:red;">İşlem Başarısız...</b>

    <?php }

    ?>

    <!-- /.card-header -->
    <!-- form start -->
    <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Resim</label>
                <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlık Giriniz">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Açıklama Giriniz">
            </div>


            <div class="form-group">
                <label>Filtreleme</label>
                <select name="emlaktipi" class="form-control select2" style="width: 100%;">
                    <option value="filter-2021" selected="selected ">2021</option>
                    <option value="filter-2020" selected="selected ">2020</option>
                     <option value="filter-2018" selected="selected ">2018</option>
                    <option value="filter-teknofest">Teknofest</option>
                    <option value="filter-gypfikirmaratonu">GYP Fikir Maratonu</option>
                    <option value="filter-tübi">Tübitak</option>
                    <option value="filter-proje">Kod Adı A.Y.İ.T.O</option>
                    <option value="filter-su">Kod Adı Su</option>
                    <option value="filter-buzz">Kod Adı Buzz</option>
                    <option value="filter-hali">Kod Adı Halı</option>

                </select>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input name="sira" type="number" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Sıra Giriniz">
            </div>












        </div>




        <?php

        if ($_GET['durum'] == "Başarılı") { ?>

            <h4 style="color:green; margin-left:10px">Başarılı</h4>

        <?php
        } elseif ($_GET['durum'] == "Başarısız") { ?>
            <h4 style="color:red; margin-left:10px">Başarısız</h4 <?php
                                                                }
                                                                    ?> <!-- /.card-body -->

            <div class="card-footer">
                <button name="galerikaydet" type="submit" class="btn btn-primary">Gönder</button>
            </div>
    </form>
</div>
</section>


</div>

</div>

<!-- /.content-wrapper -->
<?php require 'footer.php'; ?>