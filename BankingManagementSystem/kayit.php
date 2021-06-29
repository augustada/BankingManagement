<?php
require_once("baglan.php");

if (isset($_POST['isim'], $_POST['tutar'], $_POST['kategori'])) {

    $isim = trim(filter_input(INPUT_POST, 'isim', FILTER_SANITIZE_STRING));
    $tutar = trim(filter_input(INPUT_POST, 'tutar', FILTER_SANITIZE_STRING));
    $kategori = trim(filter_input(INPUT_POST, 'kategori', FILTER_SANITIZE_STRING));

    if (empty($isim) || empty($tutar) || empty($kategori)) {
        echo "<script type='text/javascript'>alert('Lütfen Formu Eksiksiz Doldurun!');</script>";
        Header("Refresh: 0.1; url=table.php");
    } else {
        $sorgu = $baglan->prepare("INSERT INTO harcama ( isim, tutar, durum, kategori) VALUES( :isim, :tutar, :durum, :kategori)");
        $sonuc = $sorgu->execute(array(
            'isim' => $_POST['isim'],
            'tutar' => $_POST['tutar'],
            'durum' => $_POST['durum'],
            'kategori' => $_POST['kategori']
        ));

        if ($sonuc) {

            echo "<script type='text/javascript'>alert('Kayıt Başarılı!');</script>";
            Header("Refresh: 0.1; url=table.php");
        } else {

            echo "<script type='text/javascript'>alert('Hata Oluştu!');</script>";
            Header("Refresh: 0.1; url=table.php");
        }
    }
}
?>