<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tentang | SIMBAT</title>

    <!-- Bootstrap core CSS -->

    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    

    <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="../assets/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

     <!-- Le javascript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!--<script src="js/jquery.js"></script>-->
     <script src="../assets/js/jquery.min.js"></script>
     <script src="../assets/js/nprogress.js"></script>
     <script>
        NProgress.start();
    </script>
    
    <!--favicon kemenkeu-->
     <link rel="shortcut icon" href="../assets/ico/logo-pmiiits.ico">

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../home" class="site_title"><img src="../assets/images/logo-pmiiits.png" width="50px" height="50px"> <span>SIMBAT</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php 
                                //$jumkar = strlen($FotoProfil);
                                //$FotoProfil = substr($FotoProfil, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                if ($FotoProfil == NULL)
                                    echo 'assets/images/user.png';
                                else
                                    echo $FotoProfil; ?>"
                                alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2><?php echo $NamaLengkap; ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                               <h3>General Admin</h3>
                                <ul class="nav side-menu">

                                    <!--Home-->
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="../home"> <i class="fa fa-desktop"></i>Dashboard</a> 
                                        </li>
                                        <li>
                                            <a href="../pilihadmin/dashboard"><i class="fa fa-table"></i>Dashboard2</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <!--Report-->
                                <li><a><i class="fa fa-mortar-board"></i> Sahabat <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                     <li>
                                        <a href="../pilihadmin/tambahakun"><i class="fa fa-plus-square"></i>Tambah Sahabat</a>
                                    </li>
                                    <li>
                                       <a href="../pilihadmin/caridataalumni"><i class="fa fa-search"></i>Pencarian</a>
                                </li>
                                
                                </ul>
                               </li>

                               <li><a href="../pilihadmin/tentang"><i class="fa fa-info-circle"></i> Tentang</a>
                                </li>

                               <li><a href="../pilihadmin/pesan"><i class="fa fa-envelope"></i> Pesan</a>
                                </li>
                                
                                <li><a href="#"><i class="fa fa-th-large"></i> Export/Import 
                               <span class="label label-primary pull-right">Coming Soon</span></a>
                                </li> 
                        
                    </ul>
                </div>
                

            </div>
            <!-- /sidebar menu -->
                    

            <!-- /menu footer buttons -->
                    <!--
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                -->
                <!-- /menu footer buttons -->
            </div>
        </div>

       
       <!-- top navigation -->
    <div class="top_nav">

        <div class="nav_menu">
            <nav class="" role="navigation">
                <div class="nav toggle">
                    <a id="menu_toggle" href="#"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="<?php 
                                //$jumkar = strlen($FotoProfil);
                                //$FotoProfil = substr($FotoProfil, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                if ($FotoProfil == NULL)
                                    echo '../assets/images/user.png';
                                else
                                    echo $FotoProfil; ?>" 
                                alt=""><?php echo $NamaLengkap . " "; ?>(Admin)
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                            
                            <!--                            
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                            -->   
                                 <li>
                                    <a href="../pilihadmin/profiladmin"><i class="fa fa-user pull-right"></i>Profil Admin</a>
                                </li>

                                <li>
                                    <a href="../pilihadmin/akunadmin"><i class="fa fa-user pull-right"></i>Akun</a>
                                </li>
                                 
                                
                                <li>
                                    <a href="javascript:;"><i class="fa fa-yelp pull-right"></i>Help</a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cog pull-right"></i>Setting</a>
                                </li>


                                <li><a href="../home/sign_out"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                            </ul>

                        </li>

                         <!--Notification Login-->
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-red">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                <?php foreach ($notifikasi->result() as $row){ ?>
                                <li>
                                    <a>
                                        <span class="image">
                                            <img src="<?php
                                            //$jumkar = strlen($FotoProfil);
                                            //$row->LinkFoto = substr($row->LinkFoto, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                            if ($row->LinkFoto == NULL)
                                                echo '../assets/images/user.png';
                                            else
                                                echo $row->LinkFoto; //harus dikurangi ../
                                            ?>" alt="Profile Image" />
                                        </span>
                                        <span>
                                        <span><?php echo $row->Nama; ?></span>
                                            <span class="time"><?php echo $row->Waktu; ?></span>
                                        </span>
                                        <span class="message">
                                            <?php echo $row->Notifikasi; ?> sebagai <?php echo $row->User; ?>. 
                                        </span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li>
                                    <div class="text-center">
                                        <a href="../pilihadmin/notifikasi">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                        <li role="presentation" class="dropdown">
                                <!--data-toggle="dropdown"-->
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="tooltip" data-placement="bottom" 
                        title="" data-original-title="Coming Soon" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->



        <!-- page content -->
        <div class="right_col" role="main">

            <!-- Start to do list -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <br>
                        <h3>Tentang SIMBAT</h3> 
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <center><img src="../assets/images/logo-pmiiits.png" width="250px" height="250px"></center>
                        <h3>Sistem Informasi Manajemen Sahabat (SIMBAT)</h3>
                        <p style="font-size:16px">merupakan portal utama dalam mengelola informasi sahabat PMII Komisariat Sepuluh Nopember. Melalui SIMBAT pengguna akan dapat mengakses data pribadinya serta mengubahnya sesuai dengan hak aksesnya.
                        Keberadaan SIMBAT sebagai e-services gate system secara langsung akan berdampak pada efektifitas dan efisiensi pengelolaan informasi data sahabat. Sehingga sistem informasi ini akan dirancang dan diimplementasikan sesuai dengan standar yang telah diberlakukan dalam SIMBAT.
                        Setiap pengguna akan memiliki personal dashboard. Pengaturan hak akses pengguna berdasarkan kategori dan level pengguna dapat diatur dengan menggunakan SIMBAT. Kontrol pengguna yang menggunakan Sistem Informasi yang ada dalam SIMBAT dapat dilakukan dan direkam. 
                        </p>                        
                <br>
                <h3>Hubungi Kami</h3>
                <table>
                  <tbody style=" font-size:14px">
                      
                      <!--Alamat-->
                      <tr>
                          <td style="width: 100px;"><i class="fa fa-map-marker"></i> Alamat</td>
                          <td>:</td>
                          <td style="width: 500px;">Jl. Arif Rahman Hakim Keputih IIIE No. 12 Sukolilo, Kota Surabaya 60111</td>
                      </tr>
                      
                      <!--No. HP-->
                      <tr>
                          <td style="width: 100px;"><i class="fa fa-phone"></i> No HP</td>
                          <td>:</td>
                          <td style="width: 450px;">+62857 2444 4412</td>
                      </tr>
                      
                      <!--Email-->
                      <tr>
                          <td style="width: 100px;"><i class="fa fa-envelope"></i> Email</td>
                          <td>:</td>
                          <td style="width: 450px;">contact@pmii1011.or.id</td>
                      </tr>
                      
                  </tbody>                 
              </table>
              <br>
              <a href="https://www.facebook.com/PMII-Sepuluh-Nopember-211799395573138" data-toggle="tooltip" target="_blank" title="PMII Sepuluh Nopember"><img src="../assets/images/logo-fb.png" width="70px" height="70px"></a>
                  
                  <a href="https://twitter.com/PMII1011" data-toggle="tooltip" target="_blank" title="@PMII1011"><img src="../assets/images/logo-twitter.png" width="70px" height="70px"></a>
                  
                  <a href="http://pmii1011.or.id" data-toggle="tooltip" target="_blank" title="pmii1011.or.id"><img src="../assets/images/logo-blog.png" width="70px" height="70px"></a>
                  
                  <a href="mailto:contact@pmii1011.or.id" data-toggle="tooltip" target="_blank" title="contact@pmii1011.or.id"><img src="../assets/images/logo-email.png" width="70px" height="70px"></a>        

                  <a href="https://www.instagram.com/PMII1011/" data-toggle="tooltip" target="_blank" title="pmii1011"><img src="../assets/images/logo-instagram.png" width="70px" height="70px"></a>        

                  <a href="https://line.me/ti/p/%40keh2462o" data-toggle="tooltip" title="Media Sahabat" target="_blank"><img src="../assets2/img/logo-line.png" width="70px" height="70px"></a>
        
                   </div>


               </div>

               <!-- footer content -->
               <footer>
                <div class="">
                    <p class="pull-right"> Sistem Informasi Manajemen Sahabat |
                        <span class="lead"> <img src="../assets/images/logo-pmiiits.png" width="30px" heigth="30px"> SIMBAT
                        </span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        </div>
    </div>
    <!-- End to do list -->
    

    


</div>




</div>



</div>

</div>
<!-- /page content -->

</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="../assets/js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="../assets/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="../assets/js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="../assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../assets/js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../assets/js/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/datepicker/daterangepicker.js"></script>

<script src="../assets/js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="../assets/js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="../assets/js/flot/date.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="../assets/js/flot/curvedLines.js"></script>
<script type="text/javascript" src="../assets/js/flot/jquery.flot.resize.js"></script>

<!-- worldmap -->
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
<script type="text/javascript" src="../assets/js/maps/gdp-data.js"></script>
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>


<script>
    NProgress.done();
</script>

</body>

</html>
