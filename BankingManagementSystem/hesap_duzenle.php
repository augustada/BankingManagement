<?php
require_once("baglan.php");
            
  if (isset($_POST['hesap_isim'],$_POST['miktar'],$_POST['birim'],$_POST['hesap_tipi']) & isset($_GET['hesap_id'])) {

    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING));
    $hesap_tipi = trim(filter_input(INPUT_POST, 'hesap_tipi', FILTER_SANITIZE_STRING));
    $hesap_isim = trim(filter_input(INPUT_POST, 'hesap_isim', FILTER_SANITIZE_STRING));
    $miktar = trim(filter_input(INPUT_POST, 'miktar', FILTER_SANITIZE_STRING));
    $birim = trim(filter_input(INPUT_POST, 'birim', FILTER_SANITIZE_STRING));


    if (empty($hesap_tipi) || empty($hesap_isim)  || empty($birim)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }
    else{ 
  $sorgu=$baglan->prepare("UPDATE hesap set hesap_tipi=:hesap_tipi, username=:username, mail=:mail, hesap_isim=:hesap_isim, miktar=:miktar,birim=:birim where hesap_id=:hesap_id");
  $sonuc=$sorgu->execute(array(
    'hesap_id' => $_GET['hesap_id'],
    'hesap_tipi' => $_POST['hesap_tipi'],
    'hesap_isim' => $_POST['hesap_isim'],
    'miktar' => $_POST['miktar'],
    'username' => $_POST['username'],
    'mail' => $_POST['mail'],
    'birim' => $_POST['birim']
  ));
  if ($sonuc) {

    echo "<script type='text/javascript'>alert('Kayıt Başarılı!');</script>";
    header("location:hesap_islem.php");    

  } else {

    echo "<script type='text/javascript'>alert('Try Again!');</script>";    
  }
}
}
?>