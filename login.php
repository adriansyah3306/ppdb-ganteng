<?php
session_start();
include("con_db/connection.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB SMK MADYA</title>
    <!--[if IE 8]>
    <link href="style_ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" />
</head>

<body>

    <!-- Begin section tz-introduce-univesity -->
    <section class="tz-introduce-univesity">
        <!-- Start class tzWrap -->
        <div class="tzWrap">

            <div class="container" id="fc">
                <div class="row">

                    <div class="tz-map-us">
                        <h3><a href="#">FORM LOGIN PPDB ONLINE</a></h3>
                        Anda Memasuki Panel Dashboard, Silahkan Login Terlebih Dahulu. Halaman Login Khusus Admin
                        <br>
                        
                        <hr />

                        <?php
                        if (isset($_POST['tblogin'])) {
                            $username = str_replace("'", "`", $_POST['username']);
                            $password = str_replace("'", "`", $_POST['password']);;
                            $enc_ps = sha1($password);
                            $enc_ps2 = md5($enc_ps);
                            $tpl_data = mysqli_fetch_row(mysqli_query($conn, "Select id_siswa, username, password, status_user from tb_siswa where username='$username' and password='$enc_ps2'"));

                            $fi_id = $tpl_data[0];
                            $fi_us = $tpl_data[1];
                            $fi_ps = $tpl_data[2];
                            $fi_st = $tpl_data[3];
                            if ($username == $fi_us && $enc_ps2 == $fi_ps) {
                                $_SESSION['fi_id'] = $fi_id;
                                $_SESSION['fi_us'] = $fi_us;
                                $_SESSION['fi_ps'] = $fi_ps;
                                $_SESSION['fi_st'] = $fi_st;
                        ?>
                                <script type="text/javascript">
                                    window.location = "siswa/index.php";
                                </script>
                                <?php
                            } else {
                                $tpl_data_ad = mysqli_fetch_row(mysqli_query($conn, "Select id_admin, username, password, status from tb_admin where username='$username' and password='$enc_ps2'"));
                                $fi_id = $tpl_data_ad[0];
                                $fi_us = $tpl_data_ad[1];
                                $fi_ps = $tpl_data_ad[2];
                                $fi_st = $tpl_data_ad[3];
                                if ($username == $fi_us && $enc_ps2 == $fi_ps && $fi_st == "Admin") {
                                    $_SESSION['fi_id'] = $fi_id;
                                    $_SESSION['fi_us'] = $fi_us;
                                    $_SESSION['fi_ps'] = $fi_ps;
                                    $_SESSION['fi_st'] = $fi_st;

                                ?>
                                    <script type="text/javascript">
                                        window.location = "admin/index.php";
                                    </script>
                                <?php
                                } elseif ($username == $fi_us && $enc_ps2 == $fi_ps && $fi_st == "Kepsek") {
                                    $_SESSION['fi_id'] = $fi_id;
                                    $_SESSION['fi_us'] = $fi_us;
                                    $_SESSION['fi_ps'] = $fi_ps;
                                    $_SESSION['fi_st'] = $fi_st;

                                ?>
                                    <script type="text/javascript">
                                        window.location = "kepsek/index.php";
                                    </script>
                                <?php
                                } elseif ($username == $fi_us && $enc_ps2 == $fi_ps && $fi_st == "Bendahara") {
                                    $_SESSION['fi_id'] = $fi_id;
                                    $_SESSION['fi_us'] = $fi_us;
                                    $_SESSION['fi_ps'] = $fi_ps;
                                    $_SESSION['fi_st'] = $fi_st;

                                ?>
                                    <script type="text/javascript">
                                        window.location = "bendahara/index.php";
                                    </script>
                                <?php
                                } elseif ($username == $fi_us && $enc_ps2 == $fi_ps && $fi_st == "Wawancara") {
                                    $_SESSION['fi_id'] = $fi_id;
                                    $_SESSION['fi_us'] = $fi_us;
                                    $_SESSION['fi_ps'] = $fi_ps;
                                    $_SESSION['fi_st'] = $fi_st;

                                ?>
                                    <script type="text/javascript">
                                        window.location = "wawancara/index.php";
                                    </script>
                                <?php
                                } else {
                                ?>
                                    <div class="tz-portfolio-project">
                                        <a href="#">Error !! Anda Gagal Login Username dan Password Yang Anda Inputkan Tidak Terdaftar.</a>
                                    </div>
                            <?php
                                }
                            }
                        }
                        if (isset($_SESSION['fi_id']) && isset($_SESSION['fi_us']) && isset($_SESSION['fi_ps'])) {
                            ?>
                            <div class="tz-portfolio-project" style="color: white">
                                <br /><i class="tz-color-2 fa fa-warning"></i> SESSION LOGIN ANDA MASIH DALAM POSISI AKTIF. <br />
                                Klik Tombol Di Bawah Ini Bila Ingin Ke <br />
                                <a href="check_session" style="color: black"><input type="submit" name="" value="PANEL DASHBOARD"></a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <form class="tz-map-form" method="post" action="login" enctype="multipart/form-data">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>USERNAME<span>(Requirded)</span></label>
                                    <input type="text" name="username" class="tz-subject form-control" autofocus="autofocus" placeholder="Harap Inputkan Username Anda">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>PASSWORD<span>(Requirded)</span></label>
                                    <input type="password" name="password" class="tz-subject form-control" placeholder="Harap Inputkan Password Anda">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="submit" name="tblogin" value="LOGIN" class="btn btn-default" style="background-color: red;color:white">
                                </div>
                            </form>
                        <?PHP
                        }
                        ?>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End section tz-introduce-univesity -->

    <!-- Begin section tz-portfolio-wrapper -->

    <!-- End section tz-lastest-event -->

    <!-- Begin section tz-contact-us -->

    <!-- End section tz-contact-us -->

    <!-- Begin Footer -->
    <section class="tz-introduce-univesity" style="width: 100%;background: #334878">
        <div class="tz-cource-services tz-cource-services-style-2">
            <ul>
                <li>
                
    </section>
    <footer class="tz-footer">

        <div class="tz-footer-address-site">
            <address> Hak Cipta Muhammad Adriansyah @ <?php date_default_timezone_set("Asia/Jakarta");
                                                                $thn = date("Y");
                                                                echo "$thn"; ?> | 11 RPL 2 |</address>
        </div>
    </footer>
    <!-- End Footer -->

    <script>
        var Desktop = 5,
            tabletportrait = 2,
            mobilelandscape = 1,
            mobileportrait = 1,
            resizeTimer = null;
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/custom-portfolio.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>