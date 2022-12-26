<!--==========================
     Portfolio Section
   ============================-->
<section id="portfolio" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">Gallery</h3>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-2021">2021</li>
          <li data-filter=".filter-2020">2020</li>
          <li data-filter=".filter-2018">2018</li>
          <li data-filter=".filter-teknofest">Teknofest</li>
          <li data-filter=".filter-gypfikirmaratonu">GYP Ideas Marathon</li>
          <li data-filter=".filter-tübi">Tubitak</li>

        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
      <?php
      $galeri = $baglanti->prepare("SELECT * from gallery order by sira ASC");

      $galeri->execute();

      while ($galericek = $galeri->fetch(PDO::FETCH_ASSOC)) {



      ?>
        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $galericek['emlaktipi'] ?> wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="panel/resimler/urun/<?php echo $galericek['resim'] ?>" class="img-fluid" alt="">
              <a href="panel/resimler/urun/<?php echo $galericek['resim'] ?>" data-lightbox="portfolio" data-title="<?php echo $sponsorcek['baslik'] ?>" class="link-preview" title="Ön İzleme"><i class="ion ion-eye"></i></a>
              <a href="<?php echo $ayarcek['instagram'] ?>" target="_blank" class="link-details" title="Daha Fazlası"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="#"><?php echo $galericek['baslik'] ?></a></h4>
              <p><?php echo $galericek['aciklama'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</section><!-- #portfolio -->