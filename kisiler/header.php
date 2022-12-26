<?php require '../panel/islem/baglanti.php';

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);


$kisisor=$baglanti->prepare("SELECT * FROM kisiler where kisiler_id=:id");
$kisisor->execute(array(
  'id' => 1
));
$kisicek=$kisisor->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../panel/resimler/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
  <link href="../panel/resimler/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="english/css/swiper-bundle.min.css">
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="../english/css/style.css">

    
</head>
<body>
    <style>
    body {
  background: #fff;
  color: #666666;
  font-family: "Open Sans", sans-serif;
}

a {
  color: 	#18d26e;
  transition: 0.5s;
}

a:hover, a:active, a:focus {
  color: 	#576ee9;
  outline: none;
  text-decoration: none;
}

p {
  padding: 0;
  margin: 0 0 30px 0;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Montserrat", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}

/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: 	#18d26e;
  color: #fff;
  display: inline-block;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 50%;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}

.back-to-top i {
  padding-top: 12px;
  color: #fff;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
  padding: 30px 0;
  height: 92px;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
  background: rgba(0, 0, 0, 0.9);
  padding: 20px 0;
  height: 72px;
  transition: all 0.5s;
}

#header.header-scrolled {
  background: rgba(0, 0, 0, 0.9);
  padding: 20px 0;
  height: 72px;
  transition: all 0.5s;
}

#header #logo {
  float: left;
}

@media (min-width: 1024px) {
  #header #logo {
    padding-left: 60px;
  }
}

#header #logo h1 {
  font-size: 34px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
}

#header #logo h1 a, #header #logo h1 a:hover {
  color: #fff;
  padding-left: 10px;
  border-left: 4px solid 	#18d26e;
}

#header #logo img {
  padding: 0;
  margin: 0;
}

@media (max-width: 768px) {
  #header #logo h1 {
    font-size: 28px;
  }
  #header #logo img {
    max-height: 40px;
  }
}

/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
#intro {
  display: table;
  width: 100%;
  height: 100vh;
  background: #000;
}

#intro .carousel-item {
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#intro .carousel-item::before {
  content: '';
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#intro .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#intro .carousel-content {
  text-align: center;
}

#intro h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

@media (max-width: 768px) {
  #intro h2 {
    font-size: 28px;
  }
}

#intro p {
  width: 80%;
  margin: 0 auto 30px auto;
  color: #fff;
}

@media (min-width: 1024px) {
  #intro p {
    width: 60%;
  }
}

#intro .carousel-fade .carousel-inner .carousel-item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}

#intro .carousel-fade .carousel-inner .carousel-item,
#intro .carousel-fade .carousel-inner .active.carousel-item-left,
#intro .carousel-fade .carousel-inner .active.carousel-item-right {
  opacity: 1;
}

#intro .carousel-fade .carousel-inner .active,
#intro .carousel-fade .carousel-inner .carousel-item-next.carousel-item-left,
#intro .carousel-fade .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

#intro .carousel-fade .carousel-inner .carousel-item-next,
#intro .carousel-fade .carousel-inner .carousel-item-prev,
#intro .carousel-fade .carousel-inner .active.carousel-item-left,
#intro .carousel-fade .carousel-inner .active.carousel-item-right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

#intro .carousel-control-prev, #intro .carousel-control-next {
  width: 10%;
}

@media (min-width: 1024px) {
  #intro .carousel-control-prev, #intro .carousel-control-next {
    width: 5%;
  }
}

#intro .carousel-control-next-icon, #intro .carousel-control-prev-icon {
  background: none;
  font-size: 32px;
  line-height: 1;
}

#intro .carousel-indicators li {
  cursor: pointer;
}

#intro .btn-get-started {
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
  background: 	#18d26e;
}

#intro .btn-get-started:hover {
  background: #fff;
  color: 	#18d26e;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Nav Menu Essentials */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}



/* Nav Meu Container */
#nav-menu-container {
  float: right;
  margin: 0;
}

@media (min-width: 1024px) {
  #nav-menu-container {
    padding-right: 60px;
  }
}

@media (max-width: 768px) {
  #nav-menu-container {
    display: none;
  }
}

/* Nav Meu Styling */
.nav-menu a {
  padding: 0 8px 10px 8px;
  text-decoration: none;
  display: inline-block;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  font-size: 13px;
  text-transform: uppercase;
  outline: none;
}

.nav-menu li:hover > a, .nav-menu > .menu-active > a {
  color: 	#18d26e;
}

.nav-menu > li {
  margin-left: 10px;
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color: #333;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
}

.nav-menu ul li:hover > a {
  color: 	#18d26e;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 20px 20px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

@media (max-width: 768px) {
  #mobile-nav-toggle {
    display: inline;
  }
}

/* Mobile Nav Styling */
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(0, 0, 0, 0.8);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 13px;
  text-transform: uppercase;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
  font-weight: 700;
  font-family: "Montserrat", sans-serif;
}

#mobile-nav ul li a:hover {
  color: #fff;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: 	#18d26e;
}

#mobile-nav ul .menu-has-children li a {
  text-transform: none;
}

#mobile-nav ul .menu-item-active {
  color: 	#18d26e;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(0, 0, 0, 0.7);
  display: none;
}

/* Mobile Nav body classes */
body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}

    </style>

    <!--==================== HEADER ====================-->
    <!-- <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Bahri</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i>Services
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>

                </div>
            </div>
        </nav>
    </header> -->
    <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">

        <h1><a href="../index.php#intro" class="scrollto"><?php echo $ayarcek['baslik']; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>    <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php#intro">ANASAYFA</a></li>
          <li><a href="../index.php#about">HAKKIMIZDA</a></li>
          <li class="menu-has-children"><a href="../index.php#team">Takımımız</a>
            
          </li>
          <li><a href="../index.php#portfolio">Galeri</a></li>

          <!--  <li class="menu-has-children"><a href="">Drop Down</a>
          <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
        </li> -->
        <li><a href="../index.php#contact">İletişim</a></li>
      <li><a href="../index.php" active><img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/tr.png" alt="Türkçe"></a></li>            <li><a href="../index_en.php"><img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="İngilizce"></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->