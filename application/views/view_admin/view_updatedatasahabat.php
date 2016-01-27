<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Data Sahabat | SIMBAT</title>

    <!-- Bootstrap core CSS -->

    
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    

    <link href="../../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../../assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="../../assets/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../../assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

     <!-- Le javascript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!--<script src="js/jquery.js"></script>-->
     <script src="../../assets/js/jquery.min.js"></script>
     <script src="../../assets/js/nprogress.js"></script>
     <script>
        NProgress.start();
    </script>
    
    <!--favicon kemenkeu-->
    <link rel="shortcut icon" href="../../assets/ico/logo-pmiiits.ico">

    <!-- form wizard -->
    <script type="text/javascript" src="../../assets/js/wizard/jquery.smartWizard.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Smart Wizard     
            $('#wizard').smartWizard();
            /*
            $('#wizard').smartWizard({
                onLeaveStep:leaveAStepCallback,
                onFinish:onFinishCallback
            });
        */
            /*
            function leaveAStepCallback(obj, context){
                alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
                return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
            }
            */
            //objs, context
            function onFinishCallback(){
                if(validateAllSteps()){
                    //$('#wizard').smartWizard('showMessage', 'Finish Clicked');
                    $('form').submit();
                }
            }
            /*  
            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        
                //alert('Finish Clicked');
            }
            */
        });

    /*
    $(document).ready(function () {
            // Smart Wizard 
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

        });
*/
</script>

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../home" class="site_title"><img src="../../assets/images/logo-pmiiits.png" width="50px" height="50px"> <span>SIMBAT</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php 
                            if ($FotoProfil == NULL)
                                echo '../../assets/images/user.png';
                            else
                                            echo "../".$FotoProfil;//harus ditambah ../ 
                                        ?>" 
                                        alt="..." class="img-circle profile_img">
                                    </div>
                                    <div class="profile_info">
                                        <span>Selamat Datang,</span>
                                        <h2><?php echo $NamaLengkapAdmin; ?></h2>
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
                                            <a href="../../home"> <i class="fa fa-desktop"></i>Dashboard</a> 
                                        </li>
                                        <li>
                                            <a href="../../pilihadmin/dashboard"><i class="fa fa-table"></i>Dashboard2</a>
                                        </li>
                                    </ul>
                                </li>

                                    <!--Report-->
                                    <li><a><i class="fa fa-mortar-board"></i> Sahabat <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                         <li>
                                            <a href="../../pilihadmin/tambahakun"><i class="fa fa-plus-square"></i>Tambah Sahabat</a>
                                        </li>
                                        <li>
                                           <a href="../../pilihadmin/caridatasahabat"><i class="fa fa-search"></i>Pencarian</a>
                                       </li>

                                   </ul>
                               </li>

                               <li><a href="../../pilihadmin/tentang"><i class="fa fa-info-circle"></i> Tentang</a>
                                </li>

                               <li><a href="../../pilihadmin/pesan"><i class="fa fa-envelope"></i> Pesan</a>
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
                                if ($FotoProfil == NULL)
                                    echo '../../../assets/images/user.png';
                                else
                                            echo "../".$FotoProfil;//harus ditambah ../ 
                                        ?>" 
                                        alt=""><?php echo $NamaLengkapAdmin . " "; ?>(Admin)
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
                                    <a href="../../pilihadmin/profiladmin"><i class="fa fa-user pull-right"></i>Profil Admin</a>
                                </li>

                                <li>
                                    <a href="../../pilihadmin/akunadmin"><i class="fa fa-user pull-right"></i>Akun</a>
                                </li>

                                
                                <li>
                                    <a href="javascript:;"><i class="fa fa-yelp pull-right"></i>Help</a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cog pull-right"></i>Setting</a>
                                </li>


                                <li><a href="../../home/sign_out"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                                                echo '../../assets/images/user.png';
                                            else
                                                echo '../'.$row->LinkFoto; //harus dikurangi ../
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
                                        <a href="../../pilihadmin/notifikasi">
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

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Update Akun</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Update Akun <small>Sahabat</small></h2>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        


                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="../../pilihadmin/do_updatedatasahabat" method="POST" enctype="multipart/form-data">
                            
                            <!--tidak terlihat-->
                            <!--Parameter NRP-->
                            <input name="alamatNRPTujuan" type="hidden" value="<?php echo ($NRP ? $NRP : "");?>">
                            <!--LinkFoto-->
                            <input name="fotoProfil" type="hidden" value="<?php echo ($LinkFoto ? $LinkFoto : "");?>">

                                <!-- Smart Wizard -->
                                <p>Isilah informasi data sahabat selengkap-lengkapnya !</p>
                                <?php
                                if ($nrp_sudah_ada)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nrp_sudah_ada . "</p>";
                                if ($nama_ptn_tidak_terdaftar)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_ptn_tidak_terdaftar . "</p>";
                                if ($nama_lengkap_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_lengkap_kosong . "</p>";
                                if ($jenis_kelamin_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $jenis_kelamin_kosong . "</p>";
                                if ($nama_ptn_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_ptn_kosong . "</p>";
                                if ($tahun_masuk_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $tahun_masuk_kosong . "</p>";
                                if ($nrp_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nrp_kosong . "</p>";
                                if ($password_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $password_kosong . "</p>";
                                if ($ulangi_password_kosong)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $ulangi_password_kosong . "</p>";
                                if ($password_dan_ulangi_password_tidak_sama)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $password_dan_ulangi_password_tidak_sama . "</p>";
                                
                                //error upload foto
                                
                                if ($file_fotoprofil)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $file_fotoprofil . "</p>";
                                if ($nama_fotoprofil)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_fotoprofil . "</p>";
                                if ($ukuran_fotoprofil)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $ukuran_fotoprofil . "</p>";
                                if ($format_fotoprofil)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $format_fotoprofil . "</p>";
                                if ($error_fotoprofil)
                                    echo "<p style='background-color:#ff6666 ; color:white'>" . $error_fotoprofil . "</p>";
                                
                                
                                ?>
                                <div id="wizard" class="form_wizard wizard_horizontal">
                                    <ul class="wizard_steps">
                                        <!--Informasi Umum-->
                                        <li>
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
                                                    Step 1<br />
                                                    <small>Informasi Umum</small>
                                                </span>
                                            </a>
                                        </li>
                                        <!--Informasi Lanjutan-->
                                        <li>
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
                                                    Step 2<br />
                                                    <small>Informasi Lanjutan</small>
                                                </span>
                                            </a>
                                        </li>
                                        <!--Informasi Orang-Tua-->
                                        <li>
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
                                                    Step 3<br />
                                                    <small>Informasi Orang-Tua</small>
                                                </span>
                                            </a>
                                        </li>
                                        <!--Media Sosial-->
                                        <li>
                                            <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
                                                    Step 4<br />
                                                    <small>Media Sosial</small>
                                                </span>
                                            </a>
                                        </li>
                                        <!--Foto Profil-->
                                        <li>
                                            <a href="#step-5">
                                                <span class="step_no">5</span>
                                                <span class="step_descr">
                                                    Step 5<br />
                                                    <small>Foto Profil</small>
                                                </span>
                                            </a>
                                        </li>
                                        <!--NRP & Password-->
                                        <li>
                                            <a href="#step-6">
                                                <span class="step_no">6</span>
                                                <span class="step_descr">
                                                    Step 6<br />
                                                    <small>NRP & Password</small>
                                                </span>
                                            </a>
                                        </li>
                                        
                                    </ul>


                                    <!--Deskripsi Informasi Umum-->
                                    <div id="step-1">
                                        <!--<form class="form-horizontal form-label-left">-->
                                        <!--Nama Lengkap-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaLengkap">Nama Lengkap <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="inputNamaLengkap" name="inputNamaLengkap" value="<?php echo $NamaLengkap; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <!--Nama Panggilan--> 
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaPanggilan">Nama Panggilan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="inputNamaPanggilan" name="inputNamaPanggilan" value="<?php echo $NamaPanggilan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <!--NIM/NRP--> 
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaPanggilan">NIM/NRP <span class="required">*</span>
                                            </label>
                                            NIM/NRP akan digunakan sebagai username
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="inputNRP" name="inputNRP" value="<?php echo $NRP; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <!--Jenis Kelamin-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Janis Kelamin</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="inputJenisKelamin" value="L" checked> &nbsp; Laki-Laki &nbsp;
                                                    </label>
                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="inputJenisKelamin" value="P"> Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tempat Tanggal Lahir-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputTempatLahir">Tempat Lahir - Tanggal Lahir
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input style="width:110px;" type="text" id="inputTempatLahir" name="inputTempatLahir" value="<?php echo $TempatLahir; ?>" class="form-control col-md-7 col-xs-12">&nbsp;-&nbsp;

                                            <input style="width:145px;height:35px" type="date" id="inputTanggalLahir" name="inputTanggalLahir" value="<?php echo $TanggalLahir; ?>" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <!--Nama PTN-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perguruan Tinggi <span class="required">*</span></label>

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="inputPTN" required="required">
                                                <option <?php echo ($PTN=='ITS' ? "selected" : "");?>>ITS</option>
                                                <option <?php echo ($PTN=='PENS' ? "selected" : "");?>>PENS</option>
                                                <option <?php echo ($PTN=='PPNS' ? "selected" : "");?>>PPNS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Jurusan-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="inputJurusan" required="required">
                                                  <option <?php echo ($Jurusan=='Fisika' ? "selected" : "");?>>Fisika</option>
                                                  <option <?php echo ($Jurusan=='Matematika' ? "selected" : "");?>>Matematika</option>
                                                  <option <?php echo ($Jurusan=='Statistika' ? "selected" : "");?>>Statistika</option>
                                                  <option <?php echo ($Jurusan=='Kimia' ? "selected" : "");?>>Kimia</option>
                                                  <option <?php echo ($Jurusan=='Biologi' ? "selected" : "");?>>Biologi</option>
                                                  <option <?php echo ($Jurusan=='Teknik Mesin' ? "selected" : "");?>>Teknik Mesin</option>
                                                  <option <?php echo ($Jurusan=='Teknik Elektro' ? "selected" : "");?>>Teknik Elektro</option>
                                                  <option <?php echo ($Jurusan=='Teknik Kimia' ? "selected" : "");?>>Teknik Kimia</option>
                                                  <option <?php echo ($Jurusan=='Teknik Fisika' ? "selected" : "");?>>Teknik Fisika</option>
                                                  <option <?php echo ($Jurusan=='Teknik Industri' ? "selected" : "");?>>Teknik Industri</option>
                                                  <option <?php echo ($Jurusan=='Teknik Biomedik' ? "selected" : "");?>>Teknik Biomedik</option>
                                                  <option <?php echo ($Jurusan=='Teknik Material dan Metalurgi' ? "selected" : "");?>>Teknik Material dan Metalurgi</option>
                                                  <option <?php echo ($Jurusan=='Teknik Multimedia dan Jaringan' ? "selected" : "");?>>Teknik Multimedia dan Jaringan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Sipil' ? "selected" : "");?>>Teknik Sipil</option>
                                                  <option <?php echo ($Jurusan=='Arsitektur' ? "selected" : "");?>>Arsitektur</option>
                                                  <option <?php echo ($Jurusan=='Teknik Lingkungan' ? "selected" : "");?>>Teknik Lingkungan</option>
                                                  <option <?php echo ($Jurusan=='Desain Produk Industri' ? "selected" : "");?>>Desain Produk Industri</option>
                                                  <option <?php echo ($Jurusan=='Teknik Geomatika' ? "selected" : "");?>>Teknik Geomatika</option>
                                                  <option <?php echo ($Jurusan=='Perencanaan Wilayah dan Kota' ? "selected" : "");?>>Perencanaan Wilayah dan Kota</option>
                                                  <option <?php echo ($Jurusan=='Teknik Geofisika' ? "selected" : "");?>>Teknik Geofisika</option>
                                                  <option <?php echo ($Jurusan=='Desain Interior' ? "selected" : "");?>>Desain Interior</option>
                                                  <option <?php echo ($Jurusan=='Teknik Perkapalan' ? "selected" : "");?>>Teknik Perkapalan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Sistem Perkapalan' ? "selected" : "");?>>Teknik Sistem Perkapalan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Kelautan' ? "selected" : "");?>>Teknik Kelautan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Transportasi Laut' ? "selected" : "");?>>Teknik Transportasi Laut</option>
                                                  <option <?php echo ($Jurusan=='Teknik Informatika' ? "selected" : "");?>>Teknik Informatika</option>
                                                  <option <?php echo ($Jurusan=='Sistem Informasi' ? "selected" : "");?>>Sistem Informasi</option>
                                                  <option <?php echo ($Jurusan=='Teknik Elektronika' ? "selected" : "");?>>Teknik Elektronika</option>
                                                  <option <?php echo ($Jurusan=='Teknik Telekomunikasi' ? "selected" : "");?>>Teknik Telekomunikasi</option>
                                                  <option <?php echo ($Jurusan=='Teknik Mekatronika' ? "selected" : "");?>>Teknik Mekatronika</option>
                                                  <option <?php echo ($Jurusan=='Multimedia Broadcasting' ? "selected" : "");?>>Multimedia Broadcasting</option>
                                                  <option <?php echo ($Jurusan=='Power Generation' ? "selected" : "");?>>Power Generation</option>
                                                  <option <?php echo ($Jurusan=='Teknologi Game' ? "selected" : "");?>>Teknologi Game</option>
                                                  <option <?php echo ($Jurusan=='Teknik Perancangan dan Kontruksi Kapal' ? "selected" : "");?>>Teknik Perancangan dan Kontruksi Kapal</option>
                                                  <option <?php echo ($Jurusan=='Teknik Bangunan Kapal' ? "selected" : "");?>>Teknik Bangunan Kapal</option>
                                                  <option <?php echo ($Jurusan=='Teknik Pengelasan' ? "selected" : "");?>>Teknik Pengelasan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Permesinan Kapal' ? "selected" : "");?>>Teknik Permesinan Kapal</option>
                                                  <option <?php echo ($Jurusan=='Teknik Perpipaan' ? "selected" : "");?>>Teknik Perpipaan</option>
                                                  <option <?php echo ($Jurusan=='Teknik Kelistrikan Kapal' ? "selected" : "");?>>Teknik Kelistrikan Kapal</option>
                                                  <option <?php echo ($Jurusan=='Teknik Keselamatan dan Kesehatan Kerja' ? "selected" : "");?>>Teknik Keselamatan dan Kesehatan Kerja</option>
                                                  <option <?php echo ($Jurusan=='Teknik Desain dan Manufaktur' ? "selected" : "");?>>Teknik Desain dan Manufaktur</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Tahun Masuk-->
                                    <div class="form-group">
                                        <label for="inputTahunMasuk" class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Masuk <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="inputTahunMasuk" required="required">
                                                <option <?php echo ($TahunMasuk=='2018' ? "selected" : "");?>>2018</option>
                                                  <option <?php echo ($TahunMasuk=='2017' ? "selected" : "");?>>2017</option>
                                                  <option <?php echo ($TahunMasuk=='2016' ? "selected" : "");?>>2016</option>
                                                  <option <?php echo ($TahunMasuk=='2015' ? "selected" : "");?>>2015</option>
                                                  <option <?php echo ($TahunMasuk=='2014' ? "selected" : "");?>>2014</option>
                                                  <option <?php echo ($TahunMasuk=='2013' ? "selected" : "");?>>2013</option>
                                                  <option <?php echo ($TahunMasuk=='2012' ? "selected" : "");?>>2012</option>
                                                  <option <?php echo ($TahunMasuk=='2011' ? "selected" : "");?>>2011</option>
                                                  <option <?php echo ($TahunMasuk=='2010' ? "selected" : "");?>>2010</option>
                                                  <option <?php echo ($TahunMasuk=='2009' ? "selected" : "");?>>2009</option>
                                                  <option <?php echo ($TahunMasuk=='2008' ? "selected" : "");?>>2008</option>
                                                  <option <?php echo ($TahunMasuk=='2007' ? "selected" : "");?>>2007</option>
                                                  <option <?php echo ($TahunMasuk=='2006' ? "selected" : "");?>>2006</option>
                                                  <option <?php echo ($TahunMasuk=='2005' ? "selected" : "");?>>2005</option>
                                                  <option <?php echo ($TahunMasuk=='2004' ? "selected" : "");?>>2004</option>
                                                  <option <?php echo ($TahunMasuk=='2003' ? "selected" : "");?>>2003</option>
                                                  <option <?php echo ($TahunMasuk=='2002' ? "selected" : "");?>>2002</option>
                                                  <option <?php echo ($TahunMasuk=='2001' ? "selected" : "");?>>2001</option>
                                                  <option <?php echo ($TahunMasuk=='2000' ? "selected" : "");?>>2000</option>
                                                  <option <?php echo ($TahunMasuk=='1999' ? "selected" : "");?>>1999</option>
                                                  <option <?php echo ($TahunMasuk=='1998' ? "selected" : "");?>>1998</option>
                                                  <option <?php echo ($TahunMasuk=='1997' ? "selected" : "");?>>1997</option>
                                                  <option <?php echo ($TahunMasuk=='1996' ? "selected" : "");?>>1996</option>
                                                  <option <?php echo ($TahunMasuk=='1995' ? "selected" : "");?>>1995</option>
                                                  <option <?php echo ($TahunMasuk=='1994' ? "selected" : "");?>>1994</option>
                                                  <option <?php echo ($TahunMasuk=='1993' ? "selected" : "");?>>1993</option>
                                                  <option <?php echo ($TahunMasuk=='1992' ? "selected" : "");?>>1992</option>
                                                  <option <?php echo ($TahunMasuk=='1991' ? "selected" : "");?>>1991</option>
                                                  <option <?php echo ($TahunMasuk=='1990' ? "selected" : "");?>>1990</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Alamat Asal-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatAsal" >Alamat Asal
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputAlamatAsal" id="inputAlamatAsal" class="form-control" rows="2" placeholder="Alamat Asal"><?php echo $AlamatAsal; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Alamat Sekarang-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputAlamatSekarang" id="inputAlamatSekarang" class="form-control" rows="2" placeholder="Alamat Sekarang"><?php echo $AlamatSekarang; ?></textarea>
                                        </div>
                                    </div>

                                    <!--No. HP-->
                                    <div class="form-group">
                                        <label for="inputNoHP" class="control-label col-md-3 col-sm-3 col-xs-12">No. Handphone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-prepend">
                                                <span class="add-on">+62</span>
                                                <input name="inputNoHP" class="input-large" id="inputNoHP" type="text" value="<?php echo $NoHP; ?>" placeholder="81234....." required="required">                                    
                                            </div>
                                        </div>
                                    </div>

                                    <!--Email-->
                                    <div class="form-group">
                                        <label for="inputEmail" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="inputEmail" class="form-control col-md-7 col-xs-12" type="text" name="inputEmail" value="<?php echo $Email; ?>" placeholder="yourmail@mail.com" required="required">
                                        </div>
                                    </div>


                                    <!--</form>-->

                                </div>


                                <!--Deskripsi Informasi Lanjutan-->
                                <div id="step-2">
                                   <!--<form class="form-horizontal form-label-left">-->
                                <!--Pelatihan MAPABA-->
                                        <div class="form-group">
                                            <label for="inputMAPABA" class="control-label col-md-3 col-sm-3 col-xs-12">MAPABA
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="inputMAPABA" class="form-control col-md-7 col-xs-12" type="text" name="inputMAPABA" value="<?php echo $MAPABA; ?>" placeholder="Angkatan MAPABA" required="required">
                                            </div>
                                        </div>

                                    <!--Pelatihan SI-->
                                        <div class="form-group">
                                            <label for="inputSI" class="control-label col-md-3 col-sm-3 col-xs-12">Studi Intensif
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="inputSI" class="form-control col-md-7 col-xs-12" type="text" name="inputSI" value="<?php echo $SI; ?>" placeholder="Angkatan SI" required="required">
                                            </div>
                                        </div>

                                    <!--Pelatihan PKD-->
                                        <div class="form-group">
                                            <label for="inputPKD" class="control-label col-md-3 col-sm-3 col-xs-12">Pelatihan Kader Dasar
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="inputPKD" class="form-control col-md-7 col-xs-12" type="text" name="inputPKD" value="<?php echo $PKD; ?>" placeholder="Angkatan PKD" required="required">
                                            </div>
                                        </div>

                                <!--Aktif Organisasi-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAktifOrganisasi" >Aktif Organisasi
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputAktifOrganisasi" id="inputAktifOrganisasi" class="form-control" rows="2" placeholder="Aktif Organisasi"><?php echo $Kesibukan; ?></textarea>
                                    </div>
                                </div>

                                <!--Bekerja-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputBekerja">Bekerja
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputBekerja" id="inputBekerja" class="form-control" rows="2" placeholder="Bekerja"><?php echo $TempatKerja; ?></textarea>
                                    </div>
                                </div>

                                <!--Hobi-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputHobi">Hobi
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputHobi" id="inputHobi" class="form-control" rows="2" placeholder="Hobi"><?php echo $Hobi; ?></textarea>
                                    </div>
                                </div>

                                <!--Prestasi-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPrestasi">Prestasi
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputPrestasi" id="inputPrestasi" class="form-control" rows="3" placeholder="Prestasi"><?php echo $Prestasi; ?></textarea>
                                    </div>
                                </div>

                                <!--Cita-Cita-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputCita">Cita-Cita
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputCita" id="inputCita" class="form-control" rows="2" placeholder="Cita-Cita"><?php echo $Cita_Cita; ?></textarea>
                                    </div>
                                </div>

                                <!--Motto-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputMotto">Motto
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="inputMotto" id="inputMotto" class="form-control" rows="2" placeholder="Motto"><?php echo $Motto; ?></textarea>
                                    </div>
                                </div>

                                <!--</form>-->
                            </div>

                            <!--Deskripsi Orang-Tua-->
                            <div id="step-3">
                                <!--<form class="form-horizontal form-label-left">-->
                                <!--Nama Orang-Tua-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaOrangTua">Nama Orang-Tua
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputNamaOrangTua" name="inputNamaOrangTua"
                                        value="<?php echo $NamaOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--Pendidikan Terakhir--> 
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPendidikanTerakhir">Pendidikan Terakhir
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputPendidikanTerakhir" name="inputPendidikanTerakhir" value="<?php echo $PendidikanOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--Pekerjaan--> 
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPekerjaan">Pekerjaan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputPekerjaan" name="inputPekerjaan" 
                                        value="<?php echo $PekerjaanOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--Kontak Ortu-->
                                <div class="form-group">
                                    <label for="inputKontakOrtu" class="control-label col-md-3 col-sm-3 col-xs-12">Kontak Ortu
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-prepend">
                                            <span class="add-on">+62</span>
                                            <input name="inputKontakOrtu" class="input-large" id="inputKontakOrtu" type="text" value="<?php echo $KontakOrtu; ?>" placeholder="81234.....">
                                        </div>
                                    </div>
                                </div>


                                <!-- </form> -->
                            </div>


                            <!--Media Sosial-->
                            <div id="step-4">
                               <!-- <form class="form-horizontal form-label-left"> -->

                               <!--Blog-->
                            <div class="form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatBlog">
                                    <img src="../../assets/images/logo-blog.png" width="50px" height="50px">
                                </label>

                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="inputAlamatBlog" name="inputAlamatBlog" 
                                    value="<?php echo $Blog; ?>" class="form-control col-md-7 col-xs-12" placeholder="ex : Alamat Blog/Website">
                                </div>
                            </div>  

                               <!--Facebook--> 
                               <div class="form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputLinkFB">
                                    <img src="../../assets/images/logo-fb.png" width="50px" height="50px">
                                </label>

                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="inputLinkFB" name="inputLinkFB"
                                    value="<?php echo $Facebook; ?>" class="form-control col-md-7 col-xs-12" placeholder="Link Facebook">
                                </div>
                            </div>

                            <!--Twitter-->
                            <div class="form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDTwitter">
                                    <img src="../../assets/images/logo-twitter.png" width="50px" height="50px">
                                </label>

                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="inputIDTwitter" name="inputIDTwitter" class="form-control col-md-7 col-xs-12" value="<?php echo $Twitter; ?>" placeholder="ex : @jabiralhaiyan">
                                </div>
                            </div>

                            <!--Instagram-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDInstagram">
                                            <img src="../../assets/images/logo-instagram.png" width="50px" height="50px">
                                        </label>
                                        <br>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputIDInstagram" name="inputIDInstagram" class="form-control col-md-7 col-xs-12" value="<?php echo $Instagram; ?>" placeholder="ex : jabiralhayyan">
                                        </div>
                                    </div>

                                    <!--Line-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDLine">
                                            <img src="../../assets/images/logo-line.png" width="50px" height="50px">
                                        </label>
                                        <br>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputIDLine" name="inputIDLine" class="form-control col-md-7 col-xs-12" value="<?php echo $Line; ?>" placeholder="ex : jabiralhayyan">
                                        </div>
                                    </div>
                            
                            <!--</form>-->
                        </div>

                        <!--Foto Profil-->
                        <div id="step-5">
                            <!--NRP-->
                            <div class="form-group">
                                <center><h3>Ganti Foto Profil<h3></center>
                                <center><img src="
                                        <?php 
                                        if($LinkFoto == NULL){
                                            echo "../../assets2/profpic/default-foto.png"; 
                                        }
                                        else
                                        {
                                            echo "../".$LinkFoto;
                                        }
                                        ?>" width="200px" height="200px" class="img-polaroid">
                                        <h4>Unggah Foto :</h4>
                                        <p style="font-size: 16px; color: #003bb3"><i class="fa fa-check"></i> Ukuran max 300 kB <br>
                                            <i class="fa fa-check"></i> Tipe file : jpg. jpeg, png</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload" >
                                </center>
                            </div>
                        </div>

                        <!--NRP & Password-->
                        <div id="step-6">
                            <!--<form class="form-horizontal form-label-left">-->

                            <!--NRP-->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNRP">NRP <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="inputNRP" name="inputNRP" 
                                    value="<?php echo $NRP; ?>" required="required"class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <!--Password-->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPassword">Password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="inputPassword" name="inputPassword" 
                                    value="<?php echo $Password; ?>" required="required" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <!--</form>-->
                        </div>
                        <!--End Form Input to ../piihadmin/do_tambahakun-->
                    </div>
                    <!-- End SmartWizard Content -->  
                </form>
            </div>

        </div>

        <!-- footer content -->             
        <footer>
            <div class="">
                <p class="pull-right"> Sistem Informasi Manajemen Sahabat |
                    <span class="lead"> <img src="../../assets/images/logo-pmiiits.png" width="30px" heigth="30px"> SIMBAT
                    </span>
                </p>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

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

<script src="../../assets/js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="../../assets/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="../../assets/js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="../../assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="../../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../../assets/js/moment.min.js"></script>
<script type="text/javascript" src="../../assets/js/datepicker/daterangepicker.js"></script>

<script src="../../assets/js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="../../assets/js/flot/date.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="../../assets/js/flot/curvedLines.js"></script>
<script type="text/javascript" src="../../assets/js/flot/jquery.flot.resize.js"></script>

<!-- worldmap -->
<script type="text/javascript" src="../../assets/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/maps/gdp-data.js"></script>
<script type="text/javascript" src="../../assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="../../assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>


<script>
    NProgress.done();
</script>


<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/1980',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };

            $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange_right').daterangepicker(optionSet1, cb);

            $('#reportrange_right').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange_right').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });

            $('#options1').click(function () {
                $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
            });

            $('#options2').click(function () {
                $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
            });

            $('#destroy').click(function () {
                $('#reportrange_right').data('daterangepicker').remove();
            });

        });
</script>


<!-- input_mask -->
<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });
</script>
<!-- /input mask -->


</body>

</html>
