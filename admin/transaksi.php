
<?php
session_start();
if(isset($_SESSION['fi_id']) && isset($_SESSION['fi_us']) && isset($_SESSION['fi_ps']))
	{
		include ("../con_db/connection.php");
		$status=$_SESSION['fi_st'];
		if($status=="Admin")
			{
				?>
				<!DOCTYPE html>
				<html>

				<head>
				    <!-- Meta, title, CSS, favicons, etc. -->
				    <meta charset="utf-8">
				    <title>Panel Dashboard</title>
				    <meta name="keywords" content="Panel Dashboard" />
				    <meta name="description" content="Panel Dashboard">
				    <meta name="author" content="Panel Dashboard">
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">

				    <!-- Theme CSS -->
				    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

				    <!-- Admin Panels CSS -->
				    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

				    <!-- Admin Forms CSS -->
				    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

				    <!-- Favicon -->
				    <link rel="shortcut icon" href="assets/img/favicon.ico">
   					 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				    <!--[if lt IE 9]>
				   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
				   <![endif]-->
				</head>

				<body class="dashboard-page sb-l-o sb-r-c">

				    
				    <!-- Start: Main -->
				    <div id="main">

				        <!-- Start: Header -->
				        <header class="navbar navbar-fixed-top bg-light">
				            <div class="navbar-branding">
				                <a class="navbar-brand" href="index"> <b>Panel</b>Dashboard
				                </a>
				                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
				                <ul class="nav navbar-nav pull-right hidden">
				                    <li>
				                        <a href="#" class="sidebar-menu-toggle">
				                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
				                        </a>
				                    </li>
				                </ul>
				            </div>
				            
				            <?php
				            	include("top_acc.php");
				            ?>

				        </header>
				        <!-- End: Header -->

				        <!-- Start: Sidebar -->
				        <aside id="sidebar_left" class="nano nano-primary">
				            <div class="nano-content">
				                <!-- sidebar menu -->
				                <ul class="nav sidebar-menu">
				                    <li class="active">
				                        <a href="index">
				                            <span class="glyphicons glyphicons-home"></span>
				                            <span class="sidebar-title">Dashboard</span>
				                        </a>
				                    </li>
				                    
				                    <!-- <li class="sidebar-label pt15">Data Biaya Sekolah</li>
				                    <li>
				                        <a href="ip_biaya">
				                            <span class="glyphicons glyphicons-book"></span> 
				                            <span class="sidebar-title">Input Biaya</span>
				                        </a>
				                    </li>
				                    <li>
				                        <a href="up_biaya">
				                            <span class="glyphicons glyphicons-delete"></span> 
				                            <span class="sidebar-title">Update Biaya</span>
				                        </a>
				                    </li> -->

				                    <li class="sidebar-label pt15">Data Master</li>
				                    <li>
				                        <a href="registrasi">
				                            <span class="glyphicons glyphicons-edit"></span> 
				                            <span class="sidebar-title">Registrasi</span>
				                        </a>
				                    </li>
									<li>
				                        <a href="gelombang.php">
				                            <span class="glyphicons glyphicons-edit"></span> 
				                            <span class="sidebar-title">Input Gelombang</span>
				                        </a>
				                    </li>

									
				                    <li class="sidebar-label pt15">Pendaftaran</li>
				                    <li>
				                        <a href="data_baru.php">
				                            <span class="glyphicons glyphicons-edit"></span> 
				                            <span class="sidebar-title">Data Baru</span>
				                        </a>
				                    </li>
									<li>
				                        <a href="data_siswa.php">
				                            <span class="glyphicons glyphicons-edit"></span> 
				                            <span class="sidebar-title">Data Siswa</span>
				                        </a>
				                    </li>
									<li>
				                        <a href="data_kaos.php">
				                            <span class="glyphicons glyphicons-edit"></span> 
				                            <span class="sidebar-title">Data Kaos</span>
				                        </a>
				                    </li>


				                    <li class="sidebar-label pt15">Pembayaran</li>
				                    <li>
				                        <a href="transaksi.php">
				                            <span class="glyphicons glyphicons-envelope"></span> 
				                            <span class="sidebar-title">Transaksi</span>
				                        </a>
				                    </li>
									<li>
				                        <a href="data_pembayaran">
				                            <span class="glyphicons glyphicons-envelope"></span> 
				                            <span class="sidebar-title">Data Pembayaran</span>
				                        </a>
				                    </li>
									

									<li class="sidebar-label pt15">Logout</li>
                                    <li>
                                        <a href="logout">
                                            <span class="glyphicons glyphicons-pen"></span>
                                            <span class="sidebar-title">Logout</span>
                                        </a>
                                    </li>
				                </ul>
				                <div class="sidebar-toggle-mini">
				                    <a href="#">
				                        <span class="fa fa-sign-out"></span>
				                    </a>
				                </div>
				            </div>
				        </aside>

				        <!-- Start: Content -->
				        <section id="content_wrapper">

				            <!-- Start: Topbar -->
				            <header id="topbar">
				                <div class="topbar-left">
				                    <ol class="breadcrumb">
				                        <li class="crumb-active">
				                            <a href="index">Halaman Data Baru</a> | Repost by Muhammad Adriansyah
											
				                        </li>
				                    </ol>
				                </div>
				            </header>
				            <!-- End: Topbar -->

				            <!-- Begin: Content -->
				            <section id="content">

				                <!-- Dashboard Tiles -->
								                    
                                <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Transaksi </h3>
           
          </div>

          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card animated" id="animatedCard">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Transaksi</h4>
                    <form class="needs-validation" action="proses/transaksi/proses_tambah.php" method="post" novalidate="">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="lastName">Tanggal</label>
                          <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                             
                          </div>

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="firstName">Nama Siswa</label>
                          <input type="text" class="form-control" name="nama_siswa" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <label for="firstName">Asal Sekolah</label>
                          <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="firstName">Gelombang</label>
                          <input type="text" class="form-control" name="gelombang" id="gelombang" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        <!-- Kode PHP -->
                        <!-- Kode PHP -->
                        <div class="col-md-6 mb-3">
                          <label for="nominal">Jumlah</label>
                          <input type="number" class="form-control" id="nominal" name="nominal" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="bayar">Pembayaran</label>
                          <input type="text" class="form-control" id="bayar" name="bayar" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kembalian">Kembalian</label>
                          <input type="text" class="form-control" id="kembalian" name="kembalian" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="sisa">Sisa Bayar</label>
                          <input type="text" class="form-control" id="sisa" name="sisa" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                        



                        <!-- Kode JavaScript -->



                        <div class="col-md-3 mb-3">
                          <label for="firstName">Keterangan</label>
                          <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            
                          </div>
                        </div>
                      </div>
                      <script>
                        function triggerAnimation() {
                          var animatedElement = document.getElementById('animatedCard');
                          animatedElement.classList.add('active');
                        }

                        // Panggil fungsi triggerAnimation saat halaman dimuat
                        document.addEventListener("DOMContentLoaded", function() {
                          triggerAnimation();
                        });
                        function sisabayar(){
                           var bayar = parseFloat(document.getElementById("bayar").value);
                          var jumlah = parseFloat(document.getElementById("nominal").value);

                          var sisa = jumlah-bayar ;
                          if (jumlah >= bayar) {
                            document.getElementById("sisa").value = sisa.toFixed(2);
                          }
                        
                        }
                        document.getElementById("bayar").addEventListener("input", sisabayar);
                        

                        function hitungKembalian() {
                          var total_belanja = parseFloat(document.getElementById("nominal").value);
                          var pembayaran = parseFloat(document.getElementById("bayar").value);

                          var kembalian = pembayaran - total_belanja;

                          if (pembayaran >= total_belanja) {
                            document.getElementById("kembalian").value = kembalian.toFixed(2);
                            document.getElementById('keterangan').value = 'Lunas';
                          } else {
                            document.getElementById('kembalian').value = '';
                            document.getElementById('keterangan').value = 'Belum Lunas';
                          }
                        }

                        // Menjalankan fungsi hitungKembalian saat ada perubahan pada input pembayaran
                        document.getElementById("bayar").addEventListener("input", hitungKembalian);
                      </script>
                      <br>
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Bayar</button>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <style>
            @keyframes fadeIn {
              0% {
                opacity: 0;
              }

              100% {
                opacity: 1;
              }
            }



            /* Animasi */
            .animated {
              transform: translateY(-100%);
              transition: transform 0.7s ease-in-out;
              animation: fadeIn 0.7s ease-in-out;
            }

            .animated.active {
              transform: translateY(0);
            }
          </style>
        </div>
				                
				            </section>
				            <!-- End: Content -->

				        </section>
				        <!-- End: Content-Wrapper -->

				        <!-- Start: Right Sidebar -->
				       
				        <!-- End: Right Sidebar -->

				    </div>
				    <!-- End: Main -->

				    <!-- BEGIN: PAGE SCRIPTS -->

				    <!-- Google Map API -->
				    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

				    <!-- jQuery -->
				    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
				    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

				    <!-- Bootstrap -->
				    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

				    <!-- Sparklines CDN -->
				    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

				    <!-- Chart Plugins -->
				    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
				    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
				    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

				    <!-- Holder js  -->
				    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

				    <!-- Theme Javascript -->
				    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
				    <script type="text/javascript" src="assets/js/main.js"></script>
				    <script type="text/javascript" src="assets/js/demo.js"></script>

				    <!-- Admin Panels  -->
				    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
				    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
				    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

				    <!-- Page Javascript -->
				    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
				    <script type="text/javascript">
				        jQuery(document).ready(function() {

				            "use strict";

				            // Init Theme Core      
				            Core.init({
				                sbm: "sb-l-c",
				            });

				            // Init Demo JS
				            Demo.init();

				            // Init Widget Demo JS
				            // demoHighCharts.init();

				            // Because we are using Admin Panels we use the OnFinish 
				            // callback to activate the demoWidgets. It's smoother if
				            // we let the panels be moved and organized before 
				            // filling them with content from various plugins

				            // Init plugins used on this page
				            // HighCharts, JvectorMap, Admin Panels

				            // Init Admin Panels on widgets inside the ".admin-panels" container
				            $('.admin-panels').adminpanel({
				                grid: '.admin-grid',
				                draggable: true,
				                mobile: true,
				                callback: function() {
				                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
				                },
				                onFinish: function() {
				                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

				                    // Init the rest of the plugins now that the panels
				                    // have had a chance to be moved and organized.
				                    // It's less taxing to organize empty panels
				                    demoHighCharts.init();
				                    runVectorMaps();

				                    // We also refresh any "in-view" waypoints to ensure
				                    // the correct position is being calculated after the 
				                    // Admin Panels plugin moved everything
				                    Waypoint.refreshAll();

				                },
				                onSave: function() {
				                    $(window).trigger('resize');
				                }
				            });

				            // Widget VectorMap
				            function runVectorMaps() {

				                // Jvector Map Plugin
				                var runJvectorMap = function() {
				                    // Data set
				                    var mapData = [900, 700, 350, 500];
				                    // Init Jvector Map
				                    $('#WidgetMap').vectorMap({
				                        map: 'us_lcc_en',
				                        //regionsSelectable: true,
				                        backgroundColor: 'transparent',
				                        series: {
				                            markers: [{
				                                attribute: 'r',
				                                scale: [3, 7],
				                                values: mapData
				                            }]
				                        },
				                        regionStyle: {
				                            initial: {
				                                fill: '#E5E5E5'
				                            },
				                            hover: {
				                                "fill-opacity": 0.3
				                            }
				                        },
				                        markers: [{
				                            latLng: [37.78, -122.41],
				                            name: 'San Francisco,CA'
				                        }, {
				                            latLng: [36.73, -103.98],
				                            name: 'Texas,TX'
				                        }, {
				                            latLng: [38.62, -90.19],
				                            name: 'St. Louis,MO'
				                        }, {
				                            latLng: [40.67, -73.94],
				                            name: 'New York City,NY'
				                        }],
				                        markerStyle: {
				                            initial: {
				                                fill: '#a288d5',
				                                stroke: '#b49ae0',
				                                "fill-opacity": 1,
				                                "stroke-width": 10,
				                                "stroke-opacity": 0.3,
				                                r: 3
				                            },
				                            hover: {
				                                stroke: 'black',
				                                "stroke-width": 2
				                            },
				                            selected: {
				                                fill: 'blue'
				                            },
				                            selectedHover: {}
				                        },
				                    });
				                    // Manual code to alter the Vector map plugin to 
				                    // allow for individual coloring of countries
				                    var states = ['US-CA', 'US-TX', 'US-MO',
				                        'US-NY'
				                    ];
				                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
				                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
				                    $.each(states, function(i, e) {
				                        $("#WidgetMap path[data-code=" + e + "]").css({
				                            fill: colors[i]
				                        });
				                    });
				                    $('#WidgetMap').find('.jvectormap-marker')
				                        .each(function(i, e) {
				                            $(e).css({
				                                fill: colors2[i],
				                                stroke: colors2[i]
				                            });
				                        });
				                }

				                if ($('#WidgetMap').length) {
				                    runJvectorMap();
				                }
				            }

				        });
				    </script>

				    <!-- END: PAGE SCRIPTS -->

				</body>

				</html>

		<?php
			}
		else
			{
				?>
				<script type="text/javascript">
					window.location="../index";
				</script>
				<?php
			}
	}
else
	{
		?>
		<script type="text/javascript">
			window.location="../index";
		</script>
		<?php
	}
?>
