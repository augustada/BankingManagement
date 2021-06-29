<?php
if (isset($_GET["hesap_id"])) {
	include("baglan.php");
	$sorgu=$baglan->prepare('DELETE FROM hesap WHERE hesap_id=?');
	$sonuc=$sorgu->execute([$_GET['hesap_id']]);
	if($sonuc){
                echo " <script type='text/javascript'>
        alert('Veri basariyla silindi');
        </script>";
		header("refresh:0.1; url=hesap_islem.php"); 
	}
	else
		echo("Kayıt silinemedi.");
	}

?>