<?php require 'panel/islem/baglanti.php';

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197696108-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197696108-1');
</script>
  <meta charset="utf-8">
<title>Geleceğin Işıkları | 2021</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="title" content="<?php echo $ayarcek['keyword'] ?>">
  <meta content="<?php echo $ayarcek['keyword'] ?>" name="description">

  <!-- Favicons -->
  <link href="panel/resimler/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
  <link href="panel/resimler/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">

        <h1><a href="index_en.php#intro" class="scrollto"><?php echo $ayarcek['baslik']; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index_en.php#intro">Home</a></li>
          <li><a href="index_en.php#about">About us</a></li>
          
          <li class="menu-has-children"><a href="index_en.php#team">Team</a>
           <li><a href="index_en.php#portfolio">Gallery</a></li>
          </li>

          <!--  <li class="menu-has-children"><a href="">Drop Down</a>
          <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
        </li> -->
        <li><a href="index_en.php#contact">Contact us</a></li>
      <li><a href="index.php" active><img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/tr.png" alt="Türkçe"></a></li>            <li><a href="index_en.php"><img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="İngilizce"></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <body>
