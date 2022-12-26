<?php
include 'islem/baglanti.php';
if (!empty($_FILES)) {


	$uploads_dir = 'resimler/cokluresim';

	@$tmp_name = $_FILES['file']["tmp_name"];

	@$name = $_FILES['file']["name"];

	$sayi1=rand(20000,30000);
	$sayi2=rand(20000,30000);
	$sayi3=rand(20000,30000);
	$sayilar=$sayi1.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


	$kaydet=$baglanti->prepare("INSERT INTO cokluresim SET
		urun_id=:urun_id,

		resim=:resim

		");

	$insert=$kaydet->execute(array(
		'urun_id' =>$_POST['id'],

		'resim' => $resimyolu

	));

}

 


?>
