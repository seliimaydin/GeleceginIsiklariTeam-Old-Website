<?php
try {
    $baglanti = new PDO('mysql:host=localhost;dbname=gıwebsitesi1.2', 'root','123456789');




} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>