<?php
include "baglan.php";
session_start();
ob_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Harcamalar - ozbank</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-credit-card"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ozbank</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Genel Bakış</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="table.php"><i class="fas fa-table"></i><span>Harcamalar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="hesap_islem.php"><i class="fas fa-window-maximize"></i><span>Hesap İşlemleri</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo ($username) ?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row register-form" style="height: 611px;font-family: Nunito, sans-serif;">
                    <div class="col" style="height: 500px;">
                        <div class="row register-form" style="width: -13px;">
                            <div class="col-md-8 offset-md-2" style="height: 500px;">
                                <form action="kayit.php" method="POST" class="custom-form" style="width: 550px;height: 500px;font-family: Nunito, sans-serif;">
                                    <h1>Gelir Ekle</h1>
                                    <input class="form-control" type="hidden" value="Gelir" name="durum" required>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Gelir Adı: </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="isim"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Tutar Giriniz: </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tutar"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Kategori Seçiniz: </label>
                                        </div>
                                        <div class="col-sm-4 input-column">
                                            <select name="kategori" class="form-control">
                                                <option value="Market">Market</option>
                                                <option value="Sağlık">Sağlık</option>
                                                <option value="Akaryakıt">Akaryakıt</option>
                                                <option value="Ulaşım">Ulaşım</option>
                                                <option value="Eğlence">Eğlence</option>
                                                <option value="Restorant">Restoran</option>
                                                <option value="Hediye">Hediye</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3" required><label class="form-check-label" for="formCheck-3">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="submit" style="background: var(--blue);">Onayla</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 56px;">
                        <div class="row register-form" style="height: 500px;width: 10px;">
                            <div class="col-md-8 offset-md-2" style="height: 500px;width: 3px;">
                                <form action="kayit.php" method="POST" class="custom-form" style="width: 550px;height: 500px;font-family: Nunito, sans-serif;">
                                    <h1>Gider Ekle</h1>
                                    <input class="form-control" type="hidden" value="Gider" name="durum" required>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Gider Adı: </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="isim"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Tutar Giriniz: </label></div>
                                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tutar"></div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Kategori Seçiniz: </label></div>
                                        <div class="col-sm-4 input-column"><select name="kategori" class="form-control">
                                                <option value="Market">Market</option>
                                                <option value="Sağlık">Sağlık</option>
                                                <option value="Akaryakıt">Akaryakıt</option>
                                                <option value="Ulaşım">Ulaşım</option>
                                                <option value="Eğlence">Eğlence</option>
                                                <option value="Restorant">Restoran</option>
                                                <option value="Hediye">Hediye</option>
                                            </select></div>

                                    </div>

                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4" required><label class="form-check-label" for="formCheck-4">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="submit" style="background: var(--blue);">Onayla</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Hareketler</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Döküm Bilgisi</p>
                        </div>
                        <div class="card-body">
                            <form action="table.php" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label><input data-date-format="dd.mm.yyyy" name="tarih1" id="tarih1" class="form-control" type="date"></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="dataTables_length" id="dataTable_filter"><label><input data-date-format="dd.mm.yyyy" name="tarih2" id="tarih2" class="form-control" type="date"></label></div>
                                </div>
                                <div class="col-md-18">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><button class="btn btn btn-primary ml-auto js-btn-next" type="submit">Ara</button></div>
                                </div>
                            </div>
                            </form>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Harcama İsmi</th>
                                            <th>Tutar</th>
                                            <th>Harcama Tipi</th>
                                            <th>Tarih</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Harcama İsmi</strong></td>
                                            <td><strong>Tutar</strong></td>
                                            <td><strong>Harcama Tipi</strong></td>
                                            <td><strong>Tarih</strong></td>
                                            <td><strong>Kategori</strong></td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            if(isset($_POST["tarih1"],$_POST["tarih2"])){
                                                if($_POST["tarih1"] > $_POST["tarih2"]){
                                                    echo " Başlangıç Tarihi Bitiş Tarihinden Büyük Olamaz. ";
                                                    }else{
                                                $sorgu = $baglan->prepare("SELECT * FROM harcama WHERE tarih >= ? and tarih <= ? order by tarih asc");
                                                $sorgu->execute(array($_POST["tarih1"], $_POST["tarih2"]));
        
                                                while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                                    $isim = $sonuc['isim'];
                                                    $tutar = $sonuc['tutar'];
                                                    $durum = $sonuc['durum'];
                                                    $tarih = $sonuc['tarih'];
                                                    $kategori = $sonuc['kategori'];
                                        ?>
                                            <tr>
                                                <td><?= $sonuc["isim"] ?></td>
                                                <td><?= $sonuc["durum"] == 'Gelir' ?  "+" . $sonuc["tutar"] . " TL"   : "-" . $sonuc["tutar"] . " TL" ?></td>
                                                <td><?= $sonuc["durum"] ?></td>
                                                <td><?= $sonuc["tarih"] ?></td>
                                                <td><?= $sonuc["kategori"] ?></td>
                                            </tr>
                                        <?php }}}
                                        else{
                                            $sorgu = $baglan->prepare("SELECT * FROM harcama order by tarih desc");
                                                $sorgu->execute();
        
                                                while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                                    $isim = $sonuc['isim'];
                                                    $tutar = $sonuc['tutar'];
                                                    $durum = $sonuc['durum'];
                                                    $tarih = $sonuc['tarih'];
                                                    $kategori = $sonuc['kategori'];
                                        ?>
                                         <tr>
                                                <td><?= $sonuc["isim"] ?></td>
                                                <td><?= $sonuc["durum"] == 'Gelir' ?  "+" . $sonuc["tutar"] . " TL"   : "-" . $sonuc["tutar"] . " TL" ?></td>
                                                <td><?= $sonuc["durum"] ?></td>
                                                <td><?= $sonuc["tarih"] ?></td>
                                                <td><?= $sonuc["kategori"] ?></td>
                                            </tr>
                                            <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © ozbank 2020</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>

