<!--==========================
      Services Section
    ============================-->
    <head><meta charset="utf-8"></head>
    
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Projelerimiz</h3>
          </header>

        <div class="row">
          <?php
        $proje=$baglanti->prepare("SELECT * from proje");

        $proje->execute();

        while ($projecek=$proje->fetch(PDO::FETCH_ASSOC)) {



                  ?>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"></div>
            <h4 class="title"><a href=""><?php echo $projecek['baslik'] ?></a></h4>
            <p class="description"><?php echo $projecek['aciklama'] ?></p>


      </div>
    <?php } ?>
    </section><!-- #services -->