<?php include 'english/header.php'; ?>
<?php include 'english/slider.php'; ?>
  <main id="main">
<head><link rel="stylesheet" type="text/css" href="css/popup.css"></head>
<!-- Pop-Up Başlangıç -->
<div id="popup"> 
    <div id="dialog" class="window mt-4"><img id="close--popup" class="close agree my-1 mr-2" width="20px" height="20px" src="img/cancel4.svg"> 
    <div class="web">New Youtube Video is Online!</div> 
      <div id="popup_icerik"> 
        <img class="px-2" style="border-radius: 20px" width="100%" height="auto" src="img/youtube1.jpg" /> 
      </div> 
      <div class="pop__btn"> <button type="button" class="btn btn-success btn-sm"><a href="https://youtu.be/6fRloRrv--8" class="text-white" target="_blank">    WATCH NOW!    </a></button></div> 
    </div> 
    <div id="mask"></div> 
  </div>
<!-- Pop-Up Bitiş -->

    <?php include "english/hakkimizda.php"; ?>

  <?php include "english/projeler.php"; ?>
  <?php include "english/ActionSkillsFacts.php"; ?>
  <?php include "english/takim.php"; ?>
   <?php include "english/galeri.php"; ?>



    <?php include "english/sponsorlar.php"; ?>
       <?php include "english/bizeUlasin.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="js/popup.js"></script>
 <?php include "english/footer.php"; ?>