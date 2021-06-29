<?php
require_once("baglan.php");

$kur_listesi = array(
    "TRY" => 1.0,
    "EUR" => 9.28,
    "USD" => 7.56,
    "GBP" => 10.11,
    "CHF" => 8.41,
    "CAD" => 5.81,
    "AUD" => 5.74,
    "JPY" => 0.073
);

if (isset($_POST['tutar'], $_POST['gonderici_hesap_id'], $_POST['alici_hesap_id'])) {
    $alici_hesap_id = trim(filter_input(INPUT_POST, 'alici_hesap_id', FILTER_SANITIZE_STRING));
    $tutar = trim(filter_input(INPUT_POST, 'tutar', FILTER_SANITIZE_STRING));
    $gonderici_hesap_id= trim(filter_input(INPUT_POST, 'gonderici_hesap_id', FILTER_SANITIZE_STRING));
    ///
    
    if ($alici_hesap_id != $gonderici_hesap_id) {

        $sorgu = $baglan->prepare("SELECT * from hesap  where hesap_id=:hesap_id");
        $sorgu->execute(["hesap_id" => $gonderici_hesap_id]);
        $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
        $gonderici_miktar = $sonuc['miktar'] - $tutar;
        $gonderici_birim = $sonuc['birim'];
    
        $sorgu = $baglan->prepare("SELECT * from hesap  where hesap_id=:hesap_id");
        $sorgu->execute(["hesap_id" => $alici_hesap_id]);
        $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
        $alici_birim = $sonuc['birim'];
        $alici_miktar = $sonuc["miktar"] + ($tutar / $kur_listesi[$alici_birim]) * $kur_listesi[$gonderici_birim];

        if ($gonderici_miktar >= 0) {
            $sorgu = $baglan->prepare("UPDATE hesap set miktar=:miktar where hesap_id=:hesap_id");
            $sorgu->execute(["hesap_id" => $gonderici_hesap_id, "miktar" => $gonderici_miktar]);

            $sorgu = $baglan->prepare("UPDATE hesap set miktar=:miktar where hesap_id=:hesap_id");
            $sorgu->execute(["hesap_id" => $alici_hesap_id, "miktar" => $alici_miktar]);
    
            header("location:hesap_islem.php");
        } else {
            echo "<script type='text/javascript'>alert('Yetersiz bakiye!');</script>";
            Header("Refresh: 0.1; url=hesap_islem.php");
        }
    } else {
        echo "<script type='text/javascript'>alert('Alici ve gönderici aynı olamaz!');</script>";
        Header("Refresh: 0.1; url=hesap_islem.php");
    }
} else {
    echo "<script type='text/javascript'>alert('Try Again!');</script>";
    Header("Refresh: 0.1; url=hesap_islem.php");
}
