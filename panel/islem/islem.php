<?php require 'baglanti.php';

session_start();

if (isset($_POST['gonder'])) {




        $uploads_dir = '../resimler/urun';
        @$tmp_name = $_FILES['fav'] ["tmp_name"];
        @$name = $_FILES['fav'] ["name"];

        $sayi1=rand(20000,30000);
        $sayi2=rand(20000,30000);
        $sayi3=rand(20000,30000);
        $sayilar=$sayi1.$sayi2.$sayi3;
        $resimyolu=$sayilar.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
   $kaydet=$baglanti->prepare("UPDATE ayar SET
fav=:fav,
 baslik=:baslik,
 aciklama=:aciklama,
 keyword=:keyword
    WHERE ayarid=2");

$update=$kaydet->execute(array(

'fav'=>$resimyolu,
    'baslik'=>$_POST['baslik'],
    'aciklama'=>$_POST['aciklama'],
    'keyword'=>$_POST['keyword'] ));

if ($update) {
   Header("Location:../ayarlar.php?durum=Ba?ar?l?");
}

else {
    Header("Location:../ayarlar.php?durum=Ba?ar?s?z");
}


}
if (isset($_POST['logoa'])) {




        $uploads_dir = '../resimler/urun';
        @$tmp_name = $_FILES['logoa'] ["tmp_name"];
        @$name = $_FILES['logoa'] ["name"];

        $sayi1=rand(20000,30000);
        $sayi2=rand(20000,30000);
        $sayi3=rand(20000,30000);
        $sayilar=$sayi1.$sayi2.$sayi3;
        $resimyolu=$sayilar.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
   $kaydet=$baglanti->prepare("UPDATE ayar SET
logoa=:logoa
    WHERE ayarid=2");

$update=$kaydet->execute(array(

'logoa'=>$resimyolu
   ));

if ($update) {
   Header("Location:../logoa.php?durum=Ba?ar?l?");
}

else {
    Header("Location:../logoa.php?durum=Ba?ar?s?z");
}


}

if(isset($_POST['sponsorkaydet'])) {


    $uploads_dir = '../resimler/urun';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("INSERT INTO sponsor SET
            baslik=:baslik,
            aciklama=:aciklama,
            emlaktipi=:emlaktipi,
            sira=:sira,
            resim=:resim");

    $insert=$kaydet->execute(array(

        'baslik'=>$_POST['baslik'],
        'aciklama'=>$_POST['aciklama'],
        'emlaktipi'=>$_POST['emlaktipi'],

        'sira'=>$_POST['sira'],

        'resim'=>$resimyolu ));



    if ($insert) {
        Header("Location:../sponsor.php?durum=Ba?ar?l?");
     }

     else {
         Header("Location:../sponsor.php?durum=Ba?ar?s?z");
     }

    }

    if(isset($_POST['sponsorduzenle'])) {

        if ($_FILES['resim'] ["size"]>0) {


            $uploads_dir = '../resimler/urun';
            @$tmp_name = $_FILES['resim'] ["tmp_name"];
            @$name = $_FILES['resim'] ["name"];

            $sayi1=rand(20000,30000);
            $sayi2=rand(20000,30000);
            $sayi3=rand(20000,30000);
            $sayilar=$sayi1.$sayi2.$sayi3;
            $resimyolu=$sayilar.$name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

            $kaydet=$baglanti->prepare("UPDATE sponsor SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      emlaktipi=:emlaktipi,
                      sira=:sira,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

            $insert=$kaydet->execute(array(

              'baslik'=>$_POST['baslik'],
              'aciklama'=>$_POST['aciklama'],
              'emlaktipi'=>$_POST['emlaktipi'],

              'sira'=>$_POST['sira'],

              'resim'=>$resimyolu ));



            if ($insert) {
                Header("Location:../sponsor.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../sponsor.php?durum=Ba?ar?s?z");
             }


        }

        else {


            $duzenle=$baglanti->prepare("UPDATE  sponsor SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      emlaktipi=:emlaktipi,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

            $insert=$duzenle->execute(array(

              'baslik'=>$_POST['baslik'],
              'aciklama'=>$_POST['aciklama'],
              'emlaktipi'=>$_POST['emlaktipi'],


            'sira'=>$_POST['sira'] ));



            if ($insert) {
                Header("Location:../sponsor.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../sponsor.php?durum=Ba?ar?s?z");
             }

            }
        }
        
        if (isset($_POST['sponsorsil'])){


            $sil=$_POST['resim'];
            unlink("../resimler/urun/$sil");

            $sil=$baglanti->prepare("DELETE from sponsor where id=:id ");

            $sil->execute(array(
                'id'=>$_POST['id']
            ));
            if ($sil) {
                Header("Location:../sponsor.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../sponsor.php?durum=Ba?ar?s?z");
             }


        }
        if(isset($_POST['galerikaydet'])) {


            $uploads_dir = '../resimler/urun';
            @$tmp_name = $_FILES['resim'] ["tmp_name"];
            @$name = $_FILES['resim'] ["name"];
            
            $sayi1=rand(20000,30000);
            $sayi2=rand(20000,30000);
            $sayi3=rand(20000,30000);
            $sayilar=$sayi1.$sayi2.$sayi3;
            $resimyolu=$sayilar.$name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
            
            $kaydet=$baglanti->prepare("INSERT INTO gallery SET
                    baslik=:baslik,
                    aciklama=:aciklama,
                    emlaktipi=:emlaktipi,
                    sira=:sira,
                    resim=:resim");
            
            $insert=$kaydet->execute(array(
            
                'baslik'=>$_POST['baslik'],
                'aciklama'=>$_POST['aciklama'],
                'emlaktipi'=>$_POST['emlaktipi'],
            
                'sira'=>$_POST['sira'],
            
                'resim'=>$resimyolu ));
            
            
            
            if ($insert) {
                Header("Location:../galeri.php?durum=Ba?ar?l?");
             }
            
             else {
                 Header("Location:../galeri.php?durum=Ba?ar?s?z");
             }
            
            }
            
            if(isset($_POST['galeriduzenle'])) {
            
                if ($_FILES['resim'] ["size"]>0) {
            
            
                    $uploads_dir = '../resimler/urun';
                    @$tmp_name = $_FILES['resim'] ["tmp_name"];
                    @$name = $_FILES['resim'] ["name"];
            
                    $sayi1=rand(20000,30000);
                    $sayi2=rand(20000,30000);
                    $sayi3=rand(20000,30000);
                    $sayilar=$sayi1.$sayi2.$sayi3;
                    $resimyolu=$sayilar.$name;
                    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
            
                    $kaydet=$baglanti->prepare("UPDATE gallery SET
                      baslik=:baslik,
                              aciklama=:aciklama,
                              emlaktipi=:emlaktipi,
                              sira=:sira,
                    resim=:resim
                    WHERE id={$_POST['id']}
                    ");
            
                    $insert=$kaydet->execute(array(
            
                      'baslik'=>$_POST['baslik'],
                      'aciklama'=>$_POST['aciklama'],
                      'emlaktipi'=>$_POST['emlaktipi'],
            
                      'sira'=>$_POST['sira'],
            
                      'resim'=>$resimyolu ));
            
            
            
                    if ($insert) {
                        Header("Location:../galeri.php?durum=Ba?ar?l?");
                     }
            
                     else {
                         Header("Location:../galeri.php?durum=Ba?ar?s?z");
                     }
            
            
                }
            
                else {
            
            
                    $duzenle=$baglanti->prepare("UPDATE  gallery SET
                      baslik=:baslik,
                              aciklama=:aciklama,
                              emlaktipi=:emlaktipi,
                              sira=:sira
                WHERE id={$_POST['id']}
                ");
            
                    $insert=$duzenle->execute(array(
            
                      'baslik'=>$_POST['baslik'],
                      'aciklama'=>$_POST['aciklama'],
                      'emlaktipi'=>$_POST['emlaktipi'],
            
            
                    'sira'=>$_POST['sira'] ));
            
            
            
                    if ($insert) {
                        Header("Location:../galeri.php?durum=Ba?ar?l?");
                     }
            
                     else {
                         Header("Location:../galeri.php?durum=Ba?ar?s?z");
                     }
            
                    }
                }
                
                if (isset($_POST['galerisil'])){
            
            
                    $sil=$_POST['resim'];
                    unlink("../resimler/urun/$sil");
            
                    $sil=$baglanti->prepare("DELETE from gallery where id=:id ");
            
                    $sil->execute(array(
                        'id'=>$_POST['id']
                    ));
                    if ($sil) {
                        Header("Location:../galeri.php?durum=Ba?ar?l?");
                     }
            
                     else {
                         Header("Location:../galeri.php?durum=Ba?ar?s?z");
                     }
            
            
                }

if (isset($_POST['iletissimkaydet'])) {



    $kaydet=$baglanti->prepare("UPDATE ayar SET
 email=:email,
adres=:adres,
 telefon=:telefon
    WHERE ayarid=2");

$update=$kaydet->execute(array(


    'email'=>$_POST['email'],
'adres'=>$_POST['adres'],
    'telefon'=>$_POST['telefon'] ));

if ($update) {
   Header("Location:../iletissim.php?durum=Ba?ar?l?");
}

else {
    Header("Location:../iletissim.php?durum=Ba?ar?s?z");
}


}

if (isset($_POST['sosyalkaydet'])) {



    $kaydet=$baglanti->prepare("UPDATE ayar SET
 facebook=:facebook,
 instagram=:instagram,
 twitter=:twitter,
 youtube=:youtube
    WHERE ayarid=2");

$update=$kaydet->execute(array(


    'facebook'=>$_POST['facebook'],
    'instagram'=>$_POST['instagram'],
      'twitter'=>$_POST['twitter'],
  'youtube'=>$_POST['youtube'] ));

if ($update) {
   Header("Location:../sosyalmedya.php?durum=Ba?ar?l?");
}

else {
    Header("Location:../sosyalmedya.php?durum=Ba?ar?s?z");
}


}
if(isset($_POST['projekaydet'])) {



    $kaydet=$baglanti->prepare("INSERT INTO proje SET
    baslik=:baslik,
    aciklama=:aciklama
  ");

    $insert=$kaydet->execute(array(

        'baslik' =>$_POST['baslik'],
        'aciklama' =>$_POST['aciklama']
        ));



    if ($insert) {
        Header("Location:../proje.php?durum=Ba?ar?l?");
     }

     else {
         Header("Location:../proje.php?durum=Ba?ar?s?z");
     }

    }
    if(isset($_POST['projeduzenle'])) {



        $kaydet=$baglanti->prepare("UPDATE proje SET
        baslik=:baslik,
        aciklama=:aciklama
        WHERE id={$_POST['id']}
        ");

        $insert=$kaydet->execute(array(


            'baslik' => $_POST['baslik'],
            'aciklama' =>$_POST['aciklama']));



        if ($insert) {
            Header("Location:../proje.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../proje.php?durum=Ba?ar?s?z");
         }


    }



    if (isset($_POST['projesil'])){


        $sil=$_POST['resim'];


        $sil=$baglanti->prepare("DELETE from proje where id=:id ");

        $sil->execute(array(
            'id'=>$_POST['id']
        ));
        if ($sil) {
            Header("Location:../proje.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../proje.php?durum=Ba?ar?s?z");
         }


    }

if (isset($_POST['logokaydet'])) {

  $uploads_dir = '../resimler/urun';
  @$tmp_name = $_FILES['fav'] ["tmp_name"];
  @$name = $_FILES['fav'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

  $uploads_dir = '../resimler/urun';
  @$tmp_name = $_FILES['resim'] ["tmp_name"];
  @$name = $_FILES['resim'] ["name"];

  $sayi1=rand(20000,30000);
  $sayi2=rand(20000,30000);
  $sayi3=rand(20000,30000);
  $sayilar=$sayi1.$sayi2.$sayi3;
  $resimyolu=$sayilar.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



  $kaydet=$baglanti->prepare("INSERT INTO takim SET
 fav=:fav,
 resim=:resim,
 resim2=:resim2
    WHERE ayarid=2");

$update=$kaydet->execute(array(


    'fav'=>$_POST['fav'],
    'resim'=>$_POST['resim'],
      'resim2'=>$_POST['resim2'] ));

if ($update) {
   Header("Location:../takim.php?durum=Ba?ar?l?");
}

else {
    Header("Location:../takim.php?durum=Ba?ar?s?z");
}


}


if(isset($_POST['urunkaydet'])) {


    $uploads_dir = '../resimler/urun';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("INSERT INTO emlak SET
    baslik=:baslik,
            aciklama=:aciklama,
            sira=:sira,
            resim=:resim");

    $insert=$kaydet->execute(array(

        'baslik'=>$_POST['baslik'],
        'aciklama'=>$_POST['aciklama'],

        'sira'=>$_POST['sira'],

        'resim'=>$resimyolu ));



    if ($insert) {
        Header("Location:../urun.php?durum=Ba?ar?l?");
     }

     else {
         Header("Location:../urun.php?durum=Ba?ar?s?z");
     }

    }

    if(isset($_POST['urunduzenle'])) {

        if ($_FILES['resim'] ["size"]>0) {


            $uploads_dir = '../resimler/urun';
            @$tmp_name = $_FILES['resim'] ["tmp_name"];
            @$name = $_FILES['resim'] ["name"];

            $sayi1=rand(20000,30000);
            $sayi2=rand(20000,30000);
            $sayi3=rand(20000,30000);
            $sayilar=$sayi1.$sayi2.$sayi3;
            $resimyolu=$sayilar.$name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

            $kaydet=$baglanti->prepare("UPDATE emlak SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

            $insert=$kaydet->execute(array(

              'baslik'=>$_POST['baslik'],
              'aciklama'=>$_POST['aciklama'],

              'sira'=>$_POST['sira'],

              'resim'=>$resimyolu ));



            if ($insert) {
                Header("Location:../urun.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../urun.php?durum=Ba?ar?s?z");
             }


        }

        else {


            $duzenle=$baglanti->prepare("UPDATE  emlak SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

            $insert=$duzenle->execute(array(

              'baslik'=>$_POST['baslik'],
              'aciklama'=>$_POST['aciklama'],


            'sira'=>$_POST['sira'] ));



            if ($insert) {
                Header("Location:../urun.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../urun.php?durum=Ba?ar?s?z");
             }

            }
        }
        if (isset($_POST['urunsil'])){


            $sil=$_POST['resim'];
            unlink("../resimler/urun/$sil");

            $sil=$baglanti->prepare("DELETE from emlak where id=:id ");

            $sil->execute(array(
                'id'=>$_POST['id']
            ));
            if ($sil) {
                Header("Location:../urun.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../urun.php?durum=Ba?ar?s?z");
             }


        }

        if(isset($_POST['arsakaydet'])) {


            $uploads_dir = '../resimler/urun';
            @$tmp_name = $_FILES['resim'] ["tmp_name"];
            @$name = $_FILES['resim'] ["name"];

            $sayi1=rand(20000,30000);
            $sayi2=rand(20000,30000);
            $sayi3=rand(20000,30000);
            $sayilar=$sayi1.$sayi2.$sayi3;
            $resimyolu=$sayilar.$name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

            $kaydet=$baglanti->prepare("INSERT INTO arsa SET
            baslik=:baslik,
                    aciklama=:aciklama,
                    arsatipi=:arsatipi,
                  metre=:metre,
                    fiyat=:fiyat,
                    ada=:ada,
                    parsel=:parsel,
                    kredi=:kredi,
                    takas=:takas,
                    sira=:sira,
                    tapu=:tapu,
                    resim=:resim");

            $insert=$kaydet->execute(array(

                'baslik'=>$_POST['baslik'],
                'aciklama'=>$_POST['aciklama'],
                'arsatipi'=>$_POST['arsatipi'],
                'metre'=>$_POST['metre'],
                'fiyat'=>$_POST['fiyat'],
                'ada'=>$_POST['ada'],
                'parsel'=>$_POST['parsel'],
                'kredi'=>$_POST['kredi'],
                'takas'=>$_POST['takas'],
                'sira'=>$_POST['sira'],
                'tapu'=>$_POST['tapu'],



                'resim'=>$resimyolu ));



            if ($insert) {
                Header("Location:../arsa.php?durum=Ba?ar?l?");
             }

             else {
                 Header("Location:../arsa.php?durum=Ba?ar?s?z");
             }

            }

            if(isset($_POST['arsaduzenle'])) {

                if ($_FILES['resim'] ["size"]>0) {


                    $uploads_dir = '../resimler/urun';
                    @$tmp_name = $_FILES['resim'] ["tmp_name"];
                    @$name = $_FILES['resim'] ["name"];

                    $sayi1=rand(20000,30000);
                    $sayi2=rand(20000,30000);
                    $sayi3=rand(20000,30000);
                    $sayilar=$sayi1.$sayi2.$sayi3;
                    $resimyolu=$sayilar.$name;
                    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

                    $kaydet=$baglanti->prepare("UPDATE arsa SET
                      baslik=:baslik,
                              aciklama=:aciklama,
                              arsatipi=:arsatipi,
                              metre=:metre,
                              fiyat=:fiyat,
                              ada=:ada,
                              parsel=:parsel,
                              kredi=:kredi,
                              takas=:takas,
                              sira=:sira,
                              tapu=:tapu,
                              resim=:resim
                    WHERE id={$_POST['id']}
                    ");

                    $insert=$kaydet->execute(array(

                      'baslik'=>$_POST['baslik'],
                      'aciklama'=>$_POST['aciklama'],
                      'arsatipi'=>$_POST['arsatipi'],
                      'metre'=>$_POST['metre'],
                      'fiyat'=>$_POST['fiyat'],
                      'ada'=>$_POST['ada'],
                      'parsel'=>$_POST['parsel'],
                      'kredi'=>$_POST['kredi'],
                      'takas'=>$_POST['takas'],
                      'sira'=>$_POST['sira'],
                      'tapu'=>$_POST['tapu'],



                      'resim'=>$resimyolu ));



                    if ($insert) {
                        Header("Location:../arsa.php?durum=Ba?ar?l?");
                     }

                     else {
                         Header("Location:../arsa.php?durum=Ba?ar?s?z");
                     }


                }

                else {


                    $duzenle=$baglanti->prepare("UPDATE  arsa SET
                           baslik=:baslik,
                              aciklama=:aciklama,
                              arsatipi=:arsatipi,
                              metre=:metre,
                              fiyat=:fiyat,
                              ada=:ada,
                              parsel=:parsel,
                              kredi=:kredi,
                              takas=:takas,
                              sira=:sira,
                              tapu=:tapu
                WHERE id={$_POST['id']}
                ");

                    $insert=$duzenle->execute(array(

                      'baslik'=>$_POST['baslik'],
                      'aciklama'=>$_POST['aciklama'],
                      'arsatipi'=>$_POST['arsatipi'],
                      'metre'=>$_POST['metre'],
                      'fiyat'=>$_POST['fiyat'],
                      'ada'=>$_POST['ada'],
                      'parsel'=>$_POST['parsel'],
                      'kredi'=>$_POST['kredi'],
                      'takas'=>$_POST['takas'],
                      'sira'=>$_POST['sira'],
                      'tapu'=>$_POST['tapu']



                       ));



                    if ($insert) {
                        Header("Location:../arsa.php?durum=Ba?ar?l?");
                     }

                     else {
                         Header("Location:../arsa.php?durum=Ba?ar?s?z");
                     }

                    }
                }
                if (isset($_POST['arsasil'])){


                    $sil=$_POST['resim'];
                    unlink("../resimler/urun/$sil");

                    $sil=$baglanti->prepare("DELETE from arsa where id=:id ");

                    $sil->execute(array(
                        'id'=>$_POST['id']
                    ));
                    if ($sil) {
                        Header("Location:../arsa.php?durum=Ba?ar?l?");
                     }

                     else {
                         Header("Location:../arsa.php?durum=Ba?ar?s?z");
                     }


                }

if(isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../resimler/slider';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet=$baglanti->prepare("INSERT INTO slider SET
    baslik=:baslik,
    aciklama=:aciklama,
    link=:link,
    button=:button,
    sira=:sira,
    resim=:resim");

    $insert=$kaydet->execute(array(

        'baslik' =>$_POST['baslik'],
        'aciklama' =>$_POST['aciklama'],
        'link' =>$_POST['link'],
        'button' =>$_POST['button'],
        'sira' => $_POST['sira'],
        'resim' =>$resimyolu));



    if ($insert) {
        Header("Location:../slider.php?durum=Ba?ar?l?");
     }

     else {
         Header("Location:../slider.php?durum=Ba?ar?s?z");
     }

    }

    if(isset($_POST['sliderduzenle'])) {

    if ($_FILES['resim'] ["size"]>0) {


        $uploads_dir = '../resimler/slider';
        @$tmp_name = $_FILES['resim'] ["tmp_name"];
        @$name = $_FILES['resim'] ["name"];

        $sayi1=rand(20000,30000);
        $sayi2=rand(20000,30000);
        $sayi3=rand(20000,30000);
        $sayilar=$sayi1.$sayi2.$sayi3;
        $resimyolu=$sayilar.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet=$baglanti->prepare("UPDATE slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira,
        resim=:resim
        WHERE id={$_POST['id']}
        ");

        $insert=$kaydet->execute(array(

            'baslik' =>$_POST['baslik'],
            'aciklama' =>$_POST['aciklama'],
            'link' =>$_POST['link'],
            'button' =>$_POST['button'],
            'sira' => $_POST['sira'],
            'resim' =>$resimyolu));



        if ($insert) {
            Header("Location:../slider.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../slider.php?durum=Ba?ar?s?z");
         }


    }

    else {


        $duzenle=$baglanti->prepare("UPDATE  slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira
    WHERE id={$_POST['id']}
    ");

        $insert=$duzenle->execute(array(

            'baslik' =>$_POST['baslik'],
            'aciklama' =>$_POST['aciklama'],
            'link' =>$_POST['link'],
            'button' =>$_POST['button'],
            'sira' => $_POST['sira'] ));



        if ($insert) {
            Header("Location:../slider.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../slider.php?durum=Ba?ar?s?z");
         }

        }
    }
    if (isset($_POST['slidersil'])){


        $sil=$_POST['resim'];
        unlink("../resimler/slider/$sil");

        $sil=$baglanti->prepare("DELETE from slider where id=:id ");

        $sil->execute(array(
            'id'=>$_POST['id']
        ));
        if ($sil) {
            Header("Location:../slider.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../slider.php?durum=Ba?ar?s?z");
         }


    }


if (isset($_POST['kullanicigiris'])) {
    $ad= htmlspecialchars($_POST['ad']) ;
    $sifre= htmlspecialchars($_POST['sifre']) ;

   // $update=$kaydet->execute(array(

        if ($ad && $sifre) {
            $kullanicisor=$baglanti->prepare("SELECT * from kullanici   where kad=:ad and sifre=:sifre");
          $kullanicisor->execute(array(
          'ad'=>$ad,
          'sifre'=>$sifre));
          $say=$kullanicisor->rowCount();


          if ($say >0) {
           $_SESSION['ad']=$ad;
            header('Location:../index.php');
          }else{


          header('Location:../../index.php?durum=Ba?ar?s?z');
          } }



 }








if(isset($_POST['kullanicikaydet'])) {




    $kaydet=$baglanti->prepare("INSERT INTO kullanici SET
        adsoyad=:adsoyad,
        kad=:kad,
        sifre=:sifre");

    $insert=$kaydet->execute(array(

            'adsoyad' =>$_POST['adsoyad'],
            'kad' =>$_POST['kad'],

            'sifre' =>$_POST['sifre']));



    if ($insert) {
        Header("Location:../kullanici.php?durum=Ba?ar?l?");
     }

     else {
         Header("Location:../kullanici.php?durum=Ba?ar?s?z");
     }

    }

    if (isset($_POST['kullanicisil'])){




        $sil=$baglanti->prepare("DELETE from kullanici where id=:id ");

        $sil->execute(array(
            'id'=>$_POST['id']
        ));
        if ($sil) {
            Header("Location:../kullanici.php?durum=Ba?ar?l?");
         }

         else {
             Header("Location:../kullanici.php?durum=Ba?ar?s?z");
         }


    }
if (isset($_POST['mesajkaydet'])) {
  $kaydet=$baglanti->prepare("INSERT INTO iletisim SET
  baslik=:baslik,
          email=:email,
          konu=:konu,
          mesaj=:mesaj");

  $insert=$kaydet->execute(array(

      'baslik'=>$_POST['baslik'],
      'email'=>$_POST['email'],
      'konu'=>$_POST['konu'],
      'mesaj'=>$_POST['mesaj']));



  if ($insert) {
      Header("Location:../../index.php?durum=Ba?ar?l?");
   }

   else {
       Header("Location:../../index.php?durum=Ba?ar?s?z");
   }

 }
 if (isset($_POST['iletisimsil'])){




     $sil=$baglanti->prepare("DELETE from iletisim where id=:id ");

     $sil->execute(array(
         'id'=>$_POST['id']
     ));
     if ($sil) {
         Header("Location:../iletisim.php?durum=Ba?ar?l?");
      }

      else {
          Header("Location:../ileitisim.php?durum=Ba?ar?s?z");
      }


 }
 if (isset($_POST['message'])) {
    $kaydet=$baglanti->prepare("INSERT INTO iletisim SET
    baslik=:baslik,
            email=:email,
            konu=:konu,
            mesaj=:mesaj");
  
    $insert=$kaydet->execute(array(
  
        'baslik'=>$_POST['baslik'],
        'email'=>$_POST['email'],
        'konu'=>$_POST['konu'],
        'mesaj'=>$_POST['mesaj']));
  
  
  
    if ($insert) {
        Header("Location:../../index.php?durum=Ba?ar?l?");
     }
  
     else {
         Header("Location:../../index.php?durum=Ba?ar?s?z");
     }
  
   }
   if (isset($_POST['iletisimsil'])){
  
  
  
  
       $sil=$baglanti->prepare("DELETE from iletisim where id=:id ");
  
       $sil->execute(array(
           'id'=>$_POST['id']
       ));
       if ($sil) {
           Header("Location:../iletisim.php?durum=Ba?ar?l?");
        }
  
        else {
            Header("Location:../ileitisim.php?durum=Ba?ar?s?z");
        }
  
  
   }
 if (isset($_POST['cokluresimsil'])){
     $gelenid=$_POST['urun_id'];
     $sil=$_POST['resim'];
     unlink("../resimler/cokluresim/$sil");

     $sil=$baglanti->prepare("DELETE from cokluresim where id=:id ");

     $sil->execute(array(
         'id'=>$_POST['id']
     ));
     if ($sil) {
         Header("Location:../cokluresim.php?id=$gelenid?durum=Ba?ar?l?");
      }

      else {
          Header("Location:../cokluresim.php?id=$gelenid?durum=Ba?ar?s?z");
      }


 }

 if (isset($_POST['basvurukaydet'])) {
   $kaydet=$baglanti->prepare("INSERT INTO basvuru SET
   baslik=:baslik,
           email=:email,
           konu=:konu,
           mesaj=:mesaj");

   $insert=$kaydet->execute(array(

       'baslik'=>$_POST['baslik'],
       'email'=>$_POST['email'],
       'konu'=>$_POST['konu'],
       'mesaj'=>$_POST['mesaj']));



   if ($insert) {
       Header("Location:../../basvuru.php?durum=Ba?ar?l?");
    }

    else {
        Header("Location:../../basvuru.php?durum=Ba?ar?s?z");
    }

  }
  if (isset($_POST['basvurusil'])){




      $sil=$baglanti->prepare("DELETE from basvuru where id=:id ");

      $sil->execute(array(
          'id'=>$_POST['id']
      ));
      if ($sil) {
          Header("Location:../basvuru.php?durum=Ba?ar?l?");
       }

       else {
           Header("Location:../basvuru.php?durum=Ba?ar?s?z");
       }


  }
  if(isset($_POST['takimekle'])) {


      $uploads_dir = '../resimler/takim';
      @$tmp_name = $_FILES['resim'] ["tmp_name"];
      @$name = $_FILES['resim'] ["name"];

      $sayi1=rand(20000,30000);
      $sayi2=rand(20000,30000);
      $sayi3=rand(20000,30000);
      $sayilar=$sayi1.$sayi2.$sayi3;
      $resimyolu=$sayilar.$name;
      @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

      $kaydet=$baglanti->prepare("INSERT INTO takim SET
      sira=:sira,
      resim=:resim");

      $insert=$kaydet->execute(array(


          'sira' => $_POST['sira'],
          'resim' =>$resimyolu));



      if ($insert) {
          Header("Location:../takim.php?durum=Ba?ar?l?");
       }

       else {
           Header("Location:../takim.php?durum=Ba?ar?s?z");
       }

      }

      if(isset($_POST['takimduzenle'])) {

      if ($_FILES['resim'] ["size"]>0) {


          $uploads_dir = '../resimler/takim';
          @$tmp_name = $_FILES['resim'] ["tmp_name"];
          @$name = $_FILES['resim'] ["name"];

          $sayi1=rand(20000,30000);
          $sayi2=rand(20000,30000);
          $sayi3=rand(20000,30000);
          $sayilar=$sayi1.$sayi2.$sayi3;
          $resimyolu=$sayilar.$name;
          @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

          $kaydet=$baglanti->prepare("UPDATE takim SET
          sira=:sira,
          resim=:resim
          WHERE id={$_POST['id']}
          ");

          $insert=$kaydet->execute(array(


              'sira' => $_POST['sira'],
              'resim' =>$resimyolu));



          if ($insert) {
              Header("Location:../takim.php?durum=Ba?ar?l?");
           }

           else {
               Header("Location:../takim.php?durum=Ba?ar?s?z");
           }


      }

      else {


          $duzenle=$baglanti->prepare("UPDATE  takim SET
          sira=:sira
      WHERE id={$_POST['id']}
      ");

          $insert=$duzenle->execute(array(


              'sira' => $_POST['sira'] ));



          if ($insert) {
              Header("Location:../takim.php?durum=Ba?ar?l?");
           }

           else {
               Header("Location:../takim.php?durum=Ba?ar?s?z");
           }

          }
      }
      if (isset($_POST['takimsil'])){


          $sil=$_POST['resim'];
          unlink("../resimler/takim/$sil");

          $sil=$baglanti->prepare("DELETE from takim where id=:id ");

          $sil->execute(array(
              'id'=>$_POST['id']
          ));
          if ($sil) {
              Header("Location:../takim.php?durum=Ba?ar?l?");
           }

           else {
               Header("Location:../takim.php?durum=Ba?ar?s?z");
           }


      }

?>