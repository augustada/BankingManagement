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
    <title>Hesap İşlemleri - ozbank</title>
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
                    <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>Harcamalar</span></a></li>
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
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="index.php"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Hesap İşlemleri Sayfası </h3>
                    <div id="next-button" class="button-row d-flex"><button class="btn btn btn-primary ml-auto js-btn-next" data-toggle="modal" data-target="#transfer" type="button" title="Next">Havale/EFT İşlemleri</button></div>
                    <section>
                        <div id="multple-step-form-n" class="container overflow-hidden" style="margin-top: 0px;height:500px; margin-bottom: 10px;padding-bottom: 300px;padding-top: 57px;">
                            <div id="progress-bar-button" class="multisteps-form">
                                <div class="row">
                                    <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                                        <div class="multisteps-form__progress"><a class="btn multisteps-form__progress-btn js-active" role="button" title="User Info">Hesap </a><a class="btn multisteps-form__progress-btn" role="button" title="Hesap ">Kullanıcı </a><a class="btn multisteps-form__progress-btn" role="button" title="Kullanıcı ">Şifre &nbsp;</a></div>
                                    </div>
                                </div>
                            </div>
                            <div id="multistep-start-row" class="row">
                                <div id="multistep-start-column" class="col-12 col-lg-8 m-auto">
                                    <form action="hesap_islem.php" method="POST" id="main-form" class="multisteps-form__form">
                                        <div id="single-form-next" class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                                            <h3 class="text-center multisteps-form__title">Yeni Hesap Aç</h3>
                                            <div id="form-content" class="multisteps-form__content">
                                                <div id="input-grp-single-2" class="form-row mt-4">
                                                    <div class="col-12"><input class="form-control multisteps-form__input" type="text" name="hesap_isim" placeholder="Hesap İsmi Giriniz"></div>
                                                </div>
                                                <div id="input-grp-double" class="form-row mt-4">
                                                    <div class="col-12 col-sm-6"><input class="form-control multisteps-form__input" type="text" name="miktar" placeholder="Miktar Giriniz "></div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0"><select name="birim" class="form-control">
                                                            <option value="TRY">TRY</option>
                                                            <option value="USD">USD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="GBP">GBP</option>
                                                            <option value="CHF">CHF</option>
                                                            <option value="CAD">CAD</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="JPY">JPY</option>
                                                        </select></div>
                                                </div>
                                                <div id="input-grp-single" class="form-row mt-4">
                                                    <select name="hesap_tipi" class="form-control">
                                                        <option value="Nakit">Nakit</option>
                                                        <option value="Kart">Kart</option>
                                                    </select>
                                                </div>
                                                <div id="next-button" class="button-row d-flex mt-4"><button class="btn btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button></div>
                                            </div>
                                        </div>
                                        <div id="single-form-next-prev" class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                            <h3 class="text-center multisteps-form__title">Yeni Hesap Aç</h3>
                                            <div id="form-content-1" class="multisteps-form__content">
                                                <div id="input-grp-double-1" class="form-row mt-4">
                                                    <?php

                                                    include("baglan.php");
                                                    $sorgu = $baglan->prepare("SELECT * FROM uye where username= :username");
                                                    $sorgu->execute(['username' => $username]);
                                                    while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                                        $id = $sonuc['id'];
                                                        $username = $sonuc['username'];
                                                        $mail = $sonuc['mail'];
                                                        $password = $sonuc['password'];
                                                        $password_repeat = $sonuc['password_repeat'];
                                                    ?>
                                                        <div class="col-12 col-sm-6"><label>Username:</label><input class="form-control multisteps-form__input" type="text" value="<?php echo $username; ?>" name="username" readonly></div>
                                                        <div class="col-12 col-sm-6 mt-4 mt-sm-0"><label>Email:</label><input class="form-control multisteps-form__input" type="text" value="<?php echo $mail; ?>" name="mail" readonly></div>

                                                </div>
                                                <div id="next-prev-buttons" class="button-row d-flex mt-4"><button class="btn btn btn-primary js-btn-prev" type="button" title="Prev">Back</button><button class="btn btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button></div>
                                            </div>
                                        </div>
                                        <div id="single-form-next-prev-1" class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                            <h3 class="text-center multisteps-form__title">Yeni Hesap Aç</h3>
                                            <div id="form-content-2" class="multisteps-form__content">
                                                <div id="input-grp-double-2" class="form-row mt-4">
                                                    <div class="col-12 col-sm-6"><label>Şifreniz:</label><input class="form-control multisteps-form__input" type="password" value="<?php echo $password; ?>" name="password" readonly></div>
                                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0"><label>Şifre Tekrar:</label><input class="form-control multisteps-form__input" type="password" value="<?php echo $password_repeat; ?>" name="password_repeat" readonly></div>
                                                <?php } ?>
                                                </div>
                                                <div id="next-prev-buttons-1" class="button-row d-flex mt-4"><button class="btn btn btn-primary js-btn-prev" type="button" title="Prev">Back</button><button class="btn btn btn-primary ml-auto js-btn-next" type="submit" title="Submit">Submit</button></div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Havale/EFT işlemleri -->
                <div class="modal fade" id="transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Havale/EFT</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="transfer.php" method="POST">

                                    <label>Gönderen Hesap Seçiniz:</label>
                                    <select name="gonderici_hesap_id" class="form-control">
                                        <?php
                                        $sorgu = $baglan->prepare("SELECT * FROM hesap");
                                        $sorgu->execute();
                                        while ($sonuc2 = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                            $sonuc2['birim']
                                        ?>

                                            <option value="<?php echo $sonuc2['hesap_id'];  ?>"> <?php echo $sonuc2['hesap_isim']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <label>Alıcı Hesap Seçiniz:</label>
                                    <select name="alici_hesap_id" class="form-control">
                                        <?php
                                        $sorgu = $baglan->prepare("SELECT * FROM hesap");
                                        $sorgu->execute();
                                        while ($sonuc2 = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                            <option value="<?php echo $sonuc2['hesap_id']; ?>"> <?php echo $sonuc2['hesap_isim']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <label>Tutar Giriniz:</label>
                                    <input class="form-control" type="text" name="tutar" id="tutar" required>
                                    <br>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary pull-left mx-4" type="button" data-dismiss="modal">İptal
                                </button>
                                <a href="transfer.php?"><button class="btn btn-danger pull-right mx-4" type="submit">Gönder</button></a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-12 col-lg-8 m-auto">
                        <div id="single-form-next" class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                            <h3 class="text-center multisteps-form__title">Hesaplar</h3>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Hesap İsim</th>
                                            <th>Hesap Tipi</th>
                                            <th>Miktar</th>
                                            <th>Para Birimi</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Email</strong></td>
                                            <td><strong>Hesap İsim</strong></td>
                                            <td><strong>Hesap Tipi</strong></td>
                                            <td><strong>Miktar</strong></td>
                                            <td><strong>Para Birimi</strong></td>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $sorgu = $baglan->prepare("SELECT * FROM hesap");
                                        $sorgu->execute();

                                        while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                            $hesap_id = $sonuc['hesap_id'];
                                            $username = $sonuc['username'];
                                            $mail = $sonuc['mail'];
                                            $hesap_isim = $sonuc['hesap_isim'];
                                            $hesap_tipi = $sonuc['hesap_tipi'];
                                            $miktar = $sonuc['miktar'];
                                            $birim = $sonuc['birim'];
                                        ?>

                                            <tr>
                                                <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><?= $sonuc["username"] ?></td>
                                                <td><?= $sonuc["mail"] ?></td>
                                                <td><?= $sonuc["hesap_isim"] ?></td>
                                                <td><?= $sonuc["hesap_tipi"] ?></td>
                                                <td><?= $sonuc["miktar"] ?></td>
                                                <td><?= $sonuc["birim"] ?></td>
                                                <td><span><input class="btn btn-primary" type="button" data-toggle="modal" data-target="#hesap_duzenle<?= $sonuc["hesap_id"] ?>" value="Duzenle"></span></td>
                                                <td><span><input class="btn btn-primary" data-toggle="modal" data-target="<?php echo ($miktar == 0 ? '#sil' . $sonuc["hesap_id"] : '') ?>" type="submit" value="Sil"></span></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $sorgu = $baglan->prepare("SELECT * FROM hesap");
            $sorgu->execute();

            while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                $hesap_id = $sonuc['hesap_id'];
                $username = $sonuc['username'];
                $mail = $sonuc['mail'];
                $hesap_isim = $sonuc['hesap_isim'];
                $hesap_tipi = $sonuc['hesap_tipi'];
                $miktar = $sonuc['miktar'];
                $birim = $sonuc['birim'];
            ?>
                <!-- Duzenle Modal -->
                <div class="modal fade" id="hesap_duzenle<?= $sonuc["hesap_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Kullanici Duzenleme Islemleri</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="hesap_duzenle.php?hesap_id=<?= $sonuc["hesap_id"] ?>" method="POST">
                                    <label>Kullanici Adiniz:</label>
                                    <input class="form-control" type="text" class="field left" readonly="readonly" value="<?php echo $username; ?>" name="username" required>
                                    <br>
                                    <label>Mail:</label>
                                    <input class="form-control" type="email" value="<?php echo $mail; ?>" name="mail" readonly>
                                    <br>
                                    <label>Miktar:</label>
                                    <input class="form-control" type="text" value="<?php echo $miktar; ?>" name="miktar" required>
                                    <br>
                                    <label>Hesap İsmi:</label>
                                    <input class="form-control" type="text" value="<?php echo $hesap_isim; ?>" name="hesap_isim" required>
                                    <br>
                                    <label>Para Birimi:</label>
                                    <select name="birim" class="form-control">
                                        <option value="TRY" <?php if ($birim == 'TRY') echo 'selected' ?>>TRY</option>
                                        <option value="USD" <?php if ($birim == 'USD') echo 'selected' ?>>USD</option>
                                        <option value="EUR" <?php if ($birim == 'EUR') echo 'selected' ?>>EUR</option>
                                        <option value="GBP" <?php if ($birim == 'GBP') echo 'selected' ?>>GBP</option>
                                        <option value="CHF" <?php if ($birim == 'CHF') echo 'selected' ?>>CHF</option>
                                        <option value="CAD" <?php if ($birim == 'CAD') echo 'selected' ?>>CAD</option>
                                        <option value="AUD" <?php if ($birim == 'AUD') echo 'selected' ?>>AUD</option>
                                        <option value="JPY" <?php if ($birim == 'JPY') echo 'selected' ?>>JPY</option>
                                    </select>
                                    <br>
                                    <label>Hesap Seçimi:</label>
                                    <select name="hesap_tipi" class="form-control">
                                        <option value="Nakit" <?php if ($hesap_tipi == 'Nakit') echo 'selected' ?>>Nakit</option>
                                        <option value="Kart" <?php if ($hesap_tipi == 'Kart') echo 'selected' ?>>Kart</option>
                                    </select>
                                    <br>
                                    <a href="hesap_duzenle.php?hesap_id=<?= $sonuc["hesap_id"] ?>"><button type="submit" class="btn btn-success ">Duzenle</button></a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sil Modal-->
                <div class="modal fade" id="sil<?= $sonuc["hesap_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body"> <b><?= $sonuc['hesap_isim'] ?></b> 'Adlı hesabı silmek istediğinizden emin misiniz?</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary pull-left mx-4" type="button" data-dismiss="modal">İptal
                                </button>
                                <a class="btn btn-danger pull-right mx-4" href="sil.php?hesap_id=<?= $sonuc["hesap_id"] ?>">Sil</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © ozbank 2020</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>

<?php
require_once("baglan.php");

if (isset($_POST['hesap_tipi'], $_POST['hesap_isim'], $_POST['miktar'], $_POST['birim'])) {

    $hesap_tipi = trim(filter_input(INPUT_POST, 'hesap_tipi', FILTER_SANITIZE_STRING));
    $hesap_isim = trim(filter_input(INPUT_POST, 'hesap_isim', FILTER_SANITIZE_STRING));
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING));
    $miktar = trim(filter_input(INPUT_POST, 'miktar', FILTER_SANITIZE_STRING));
    $birim = trim(filter_input(INPUT_POST, 'birim', FILTER_SANITIZE_STRING));

    if (empty($hesap_tipi) || empty($hesap_isim) || empty($birim)) {
        echo "<script type='text/javascript'>alert('Lütfen Formu Eksiksiz Doldurun!');</script>";
        Header("Refresh: 0.1; url=hesap_islem.php");
    } else {
        $hesap_isim = $_POST['hesap_isim'];
        $sorgu = $baglan->prepare('SELECT hesap_id FROM hesap WHERE hesap_isim = ?');
        $sonuc = array($hesap_isim);
        $sorgu->execute($sonuc);
        if ($sorgu->rowCount()) {
            echo ("<script type='text/javascript'>alert('Zaten kayitli bir hesap ismi girdiniz!');</script>");
            header("Refresh: 0.1; url=hesap_islem.php");
        } else {
            $sorgu = $baglan->prepare("INSERT INTO hesap ( hesap_tipi, hesap_isim,  miktar, birim, username, password, password_repeat, mail) VALUES( :hesap_tipi, :hesap_isim, :miktar, :birim, :username, :password, :password_repeat, :mail)");
            $sonuc = $sorgu->execute(array(
                'hesap_tipi' => $_POST['hesap_tipi'],
                'hesap_isim' => $_POST['hesap_isim'],
                'miktar' => $_POST['miktar'],
                'birim' => $_POST['birim'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'password_repeat' => $_POST['password_repeat'],
                'mail' => $_POST['mail']
            ));

            if ($sonuc) {

                echo "<script type='text/javascript'>alert('Kayıt Başarılı!');</script>";
                Header("Refresh: 0.1; url=hesap_islem.php");
            } else {

                echo "<script type='text/javascript'>alert('Hata Oluştu!');</script>";
                Header("Refresh: 0.1; url=hesap_islem.php");
            }
        }
    }
}
?>