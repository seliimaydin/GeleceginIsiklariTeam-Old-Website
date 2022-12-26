 <!--==========================
      Team Section
      ============================-->
      <style>
      /*==================== GOOGLE FONTS ====================*/
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

      /*==================== VARIABLES CSS ====================*/
      :root {
        --header-height: 3rem;

        /*========== Colors ==========*/
        /* Change favorite color */
        --hue-color: 230;
        /*Purple 250 - Green 142 - Blue 230 - Pink 340*/

        /* HSL color mode */
        --first-color: hsl(var(--hue-color), 69%, 61%);
        --first-color-second: hsl(var(--hue-color), 69%, 61%);
        --first-color-alt: hsl(var(--hue-color), 57%, 53%);
        --first-color-lighter: hsl(var(--hue-color), 92%, 85%);
        --title-color: hsl(var(--hue-color), 8%, 15%);
        --text-color: hsl(var(--hue-color), 8%, 45%);
        --text-color-light: hsl(var(--hue-color), 8%, 65%);
        --input-color: hsl(var(--hue-color), 70%, 96%);
        --body-color: hsl(var(--hue-color), 60%, 99%);
        --container-color: #fff;
        --scroll-bar-color: hsl(var(--hue-color), 12%, 90%);
        --scroll-thumb-color: hsl(var(--hue-color), 12%, 80%);

        /*========== Font and typography ==========*/
        --body-font: 'Poppins', sans-serif;
        ;

        /* .5rem = 8px, 1rem = 16px, 1.5rem = 24px ... */
        --big-font-size: 2rem;
        --h1-font-size: 1.5rem;
        --h2-font-size: 1.25rem;
        --h3-font-size: 1.125rem;
        --normal-font-size: .983rem;
        --small-font-size: .813rem;
        --smaller-font-size: .75rem;

        /*========== Font weight ==========*/
        --font-medium: 500;
        --font-semi-bold: 600;

        /*========== Margenes Bottom ==========*/
        /* .25rem = 4px, .5rem = 8px, .75rem = 12px ... */
        --mb-0-25: .25rem;
        --mb-0-5: .5rem;
        --mb-0-75: .75rem;
        --mb-1: 1rem;
        --mb-1-5: 1.5rem;
        --mb-2: 2rem;
        --mb-2-5: 2.5rem;
        --mb-3: 3rem;

        /*========== z index ==========*/
        --z-tooltip: 10;
        --z-fixed: 100;
        --z-modal: 1000;
      }

      /* Font size for large devices */
      @media screen and (min-width: 968px) {
        :root {
          --big-font-size: 3rem;
          --h1-font-size: 2.25rem;
          --h2-font-size: 1.5rem;
          --h3-font-size: 1.25rem;
          --normal-font-size: 1rem;
          --small-font-size: .875rem;
          --smaller-font-size: .813rem;
        }
      }



      h1,
      h2,
      h3,
      h4 {
        color: var(--title-color);
        font-weight: var(--font-semi-bold);
      }



      a {
        text-decoration: none;
      }



      /*==================== BUTTONS ====================*/
      .button {
        display: inline-block;
        background-color: var(--first-color);
        color: #fff;
        padding: 1rem;
        border-radius: .5rem;
        font-weight: var(--font-medium);
      }

      .button:hover {
        background-color: var(--first-color-alt);
      }

      .button__icon {
        font-size: 1.25rem;
        margin-left: var(--mb-0-5);
        transition: .3s;
      }

      .button--flex {
        display: inline-flex;
        align-items: center;
      }

      .button--small {
        padding: .75rem 1rem;
      }

      .button--link {
        padding: 0;
        background-color: transparent;
        color: var(--first-color);
      }

      .button--link:hover {
        background-color: transparent;
        color: var(--first-color-alt);
      }

      /*==================== ABOUT ====================*/


      /*==================== SERVICES ====================*/


      .services__button {
        cursor: pointer;
        font-size: var(--small-font-size);
        margin-top: 1.5rem;
      }

      .services__button:hover .button__icon {
        transform: translateX(.25rem);
      }



    </style>
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Takım</h3>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/huseyin.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hüseyin Rahmi Yıldırım</h4>
                  <span>Kurucu Danışman</span>
                  <div class="social">
                    <a target="_blank" href="https://twitter.com/hrahmiyldrm"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.instagram.com/huseyin_rahmi_yldrm/"><i class="fa fa-instagram"></i></a>
                    <span class="button button--flex button--small button--link services__button">
                      <a href="kisiler/huseyin.php">Daha Fazlası
                        <i class="fa fa-arrow-right button__icon"></i></a> 
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="member">
                <img src="img/aydin.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Selim Aydın</h4>
                    <span>Kurucu Takım Lideri</span>
                    <div class="social">

                      <a target="_blank" href="https://www.linkedin.com/in/selimaydın/"><i class="fa fa-linkedin"></i></a>
                      <a target="_blank" href="https://github.com/selimaydinn"><i class="fa fa-github"></i></a>
                      <a target="_blank" href="https://www.instagram.com/selimaydinresmi/"><i class="fa fa-instagram"></i></a>
                      <a target="_blank" href="mailto:selimaydinresmi@gmail.com?subject=feedback"><i class="fa fa-envelope"></i></a>
                      <span class="button button--flex button--small button--link services__button">
                        <a href="kisiler/selim.php">Daha Fazlası
                          <i class="fa fa-arrow-right button__icon"></i></a> 
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                  <img src="img/php.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Bahri Uranlı</h4>
                      <span>Full-Stack Web Geliştirici</span>
                      <div class="social">
                        <a target="_blank" href="https://twitter.com/Bahri48044266"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/bahri.urnl/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://github.com/Bahri-Uranli"><i class="fa fa-github"></i></a>
                        <span class="button button--flex button--small button--link services__button">
                          <a href="kisiler/bahri.php">Daha Fazlası
                            <i class="fa fa-arrow-right button__icon"></i></a> 
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="member">
                    <img src="img/haydarr.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Haydar Eraslan</h4>
                        <span>Java Geliştirici</span>
                        <div class="social">
                          <a target="_blank" href="https://www.instagram.com/32_hydr_32/"><i class="fa fa-instagram"></i></a>
                          <span class="button button--flex button--small button--link services__button">
                            <a href="kisiler/haydar.php">Daha Fazlası
                              <i class="fa fa-arrow-right button__icon"></i></a> 
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s"> 
                    <div class="member"> 
                      <img src="img/vector1.jpg" class="img-fluid" alt=""> 
                      <div class="member-info"> 
                        <div class="member-info-content"> 
                          <h4>Harun Yiğit</h4> 
                          <span>Yazılımcı</span> 
                          <div class="social"> 
                            <a target="_blank" href="https://www.instagram.com/harunyigiitt/"><i class="fa fa-instagram"></i></a> 
                            <a target="_blank" href="mailto:harun.yigit.58.ist@gmail.com?subject=feedback"><i class="fa fa-envelope"></i></a> 
                            <span class="button button--flex button--small button--link services__button"> 
                              <a href="kisiler/harun.php">Daha Fazlası 
                                <i class="fa fa-arrow-right button__icon"></i></a>  
                              </span> 
                            </div> 
                          </div> 
                        </div> 
                      </div> 
                    </div>

                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                      <img src="img/resull.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Resul Arslan Tatlı</h4>
                          <span>Oyun Geliştirici</span>
                          <div class="social">
                            <a target="_blank" href="https://www.instagram.com/arslan0_x/?hl=tr"><i class="fa fa-instagram"></i></a>
                            <span class="button button--flex button--small button--link services__button">
                              <a href="kisiler/resul.php">Daha Fazlası
                                <i class="fa fa-arrow-right button__icon"></i></a> 
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="member">
                        <img src="img/ufuk.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Ufuk Kemik</h4>
                            <span>Tasarım</span>
                            <div class="social">
                              <a target="_blank" href="https://www.instagram.com/ufuk_kemik0/"><i class="fa fa-instagram"></i></a>
                              <span class="button button--flex button--small button--link services__button">
                                <a href="kisiler/ufuk.php">Daha Fazlası
                                  <i class="fa fa-arrow-right button__icon"></i></a> 
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                      <img src="img/vector2.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Murat Mehmet Daldal</h4>
                          <span>3D Geliştirici</span>
                          <div class="social">
                             
                            <span class="button button--flex button--small button--link services__button">
                              <a href="kisiler/murat.php">Daha Fazlası
                                <i class="fa fa-arrow-right button__icon"></i></a> 
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    </div>

                  </div>
                </section><!-- #team -->
