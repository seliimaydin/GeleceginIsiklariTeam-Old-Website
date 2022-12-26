<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
            <style media="screen">
            img.ftrb{
              height: 130px;
              width: 221px;
            }
          </style>
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>
              <img class="ftrb" src="img/footerlogo.png" alt="">
            </h3>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>İletişime Geçin</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">İletişim</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfuTyW1NaHiCDaougAA1uFzSaJp57xlaBYWhbz8qWCdaM-k0w/viewform">Başvuru Yap</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Sponsorluk</a></li>
      <!--        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Bilgilerimiz</h4>
            <p>

              <strong>Telefon:</strong> <?php echo $ayarcek['telefon'] ?><br>
              <strong>E-posta:</strong> <a href="mailto:<?php echo $ayarcek['email'] ?>?subject=feedback"><?php echo $ayarcek['email'] ?></a><br>
            </p>

            <div class="social-links">
                <a target="_blank" href="<?php echo $ayarcek['twitter'] ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
              <a target="_blank" href="<?php echo $ayarcek['facebook'] ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="<?php echo $ayarcek['youtube'] ?>" class="facebook"><i class="fa fa-youtube"></i></a>
              <a target="_blank" href="<?php echo $ayarcek['instagram'] ?>" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" href="https://www.facebook.com/geleceginisiklaritakimi" class="linkedin"><i class="fa fa-facebook"></i></a>
            </div>

          </div>



        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2021 <strong>Geleceğin Işıkları</strong>. Tüm hakları gizlidir. Sitedeki hiçbir materyali izinsiz başka yerde kullanılamaz. 
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->

      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
