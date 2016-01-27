<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil | SIMBAT</title>

    <!-- Bootstrap core CSS -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="../assets/js/jquery.min.js"></script>

    <!--favicon PMII ITS-->
    <link rel="shortcut icon" href="../assets/ico/logo-pmiiits.ico">

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

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
                                if ($FotoProfil == NULL)
                                    echo '../assets/images/user.png';
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
                                           <a href="../pilihadmin/caridatasahabat"><i class="fa fa-search"></i>Pencarian</a>
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

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <!--judul>-->
                </div>

                <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <h3>Profil Admin</h3>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                
                                <div class="profile_img">
                                    

                                    <?php 
                                        /*
                                        if($status == 1)
                                        {
                                            echo "<center><h4>Gambar berhasil diunggah</h4></center>";
                                        }
                                        else if($status == 2)
                                        {
                                            echo "<center><h4>Maaf terdapat kesalahan ketika mengunggah gambar</h4></center>";
                                        }
                                        else if($status == 3)
                                        {
                                            echo "<center><h4>Silakan pilih gambar yang akan diunggah</h4></center>";
                                        }
                                        else if($status == 4)
                                        {
                                            echo "<center><h4>Ukuran gambar terlalu besar</h4></center>";
                                        }
                                        else if($status == 5)
                                        {
                                            echo "<center><h4>Format file gambar tidak tepat</h4></center>";
                                        }
                                        */
                                        
                                    ?>
                                    <center>
                                    
                                    <img src="<?php 
                                        if ($LinkFoto == NULL)
                                            echo '../assets/images/user.png';
                                        else
                                            echo $LinkFoto; 
                                        ?>"
                                        width="200px" height="200px" class="img-polaroid">
                                      <h5>Unggah Foto :</h5>
                                      <p style="font-size: 12px; color: #003bb3"><i class="fa fa-check"></i> Ukuran max 300 kB <br>
                                          <i class="fa fa-check"></i> Tipe file : jpg. jpeg, png</p>
                                    </center>
                                          
                                          <form class="form-search" action="../pilihadmin/uploadfotoadmin" method="post" enctype="multipart/form-data">
                                            <center>
                                                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                                <button class="btn btn-primary" type="submit" name="submit" data-loading-text="Loading...">Unggah</button>
                                            </center>
                                        </form>



                              </div>
                              <!--
                              <h3><?php echo $Nama; ?></h3>

                              <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $Alamat; ?>
                                </li>
                            </ul>
                            -->
                            <br />
                        </div>

                        <!--Edit Profil-->
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Edit Profil</h2>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; padding: 5px 10px; border: 1px solid #E6E9ED">
                                    </div>
                                </div>
                            </div>

                            <!--form-->
                            <form action="../pilihadmin/do_ubahprofiladmin" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <br><span id="confirmMessage6"> </span>

                                <!--Nama-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputNama" name="inputNama" required="required" value="<?php echo $Nama; ?>" class="form-control col-md-7 col-xs-12"
                                        onkeyup="updateSelfMsg('inputNama','confirmMessage0');">
                                        <br><span id="confirmMessage0"></span>
                                    </div>
                                </div>
                                <!--Alamat Sekarang-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputAlamatSekarang" name="inputAlamatSekarang" value="<?php echo $Alamat; ?>" required="required" class="form-control col-md-7 col-xs-12"
                                        onfocus="checkNull('inputNama', 'confirmMessage0', 'inputNama'); return false;" 
                                        onkeyup="updateSelfMsg('inputAlamatSekarang','confirmMessage1'); checkPass(); return false;">
                                        <br><span id="confirmMessage1"></span>
                                    </div>
                                </div>
                                <!--No. HP-->
                                <div class="form-group">
                                    <label for="inputNoHP" class="control-label col-md-3 col-sm-3 col-xs-12">No. HP <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNoHP" class="form-control col-md-7 col-xs-12" value="<?php echo $NoHP; ?>" required="required" name="inputNoHP"
                                        onfocus="checkNull('inputAlamatSekarang', 'confirmMessage1', 'inputAlamatSekarang'); return false;" 
                                        onkeyup="updateSelfMsg('inputNoHP','confirmMessage2'); checkPass(); return false;">
                                        <br><span id="confirmMessage2"></span>
                                    </div>
                                </div>
                                <!--NRP-->
                                <div class="form-group">
                                    <label for="inputNRP" class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNRP" class="form-control col-md-7 col-xs-12" value="<?php echo $NRP; ?>" required="required" name="inputNRP"
                                        readonly="readonly"
                                        onfocus="checkNull('inputNoHP', 'confirmMessage2', 'inputNoHP'); return false;" 
                                        onkeyup="updateSelfMsg('inputNRP','confirmMessage3'); checkPass(); return false;">
                                        <br><span id="confirmMessage3"></span>
                                    </div>
                                </div>
                                <!--Password-->
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="inputPassword" class="form-control col-md-7 col-xs-12" value="<?php echo $Password; ?>" required="required" name="inputPassword"
                                        onfocus="checkNull('inputNRP', 'confirmMessage3', 'inputNRP'); return false;"
                                        onkeyup="updateSelfMsg('inputPassword','confirmMessage4'); checkPass(); return false;">
                                        <br><span id="confirmMessage4"></span>
                                    </div>
                                </div>
                                <!--Password Baru-->
                                <div class="form-group">
                                    <label for="inputUlangiPassword" class="control-label col-md-3 col-sm-3 col-xs-12">Konfirmasi Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="inputUlangiPassword" data-validate-linked="inputPassword" class="form-control col-md-7 col-xs-12" required="required" name="inputUlangiPassword"
                                        onfocus="checkNull('inputPassword', 'confirmMessage4', 'inputPassword'); return false;"
                                        onkeyup="updateSelfMsg('inputUlangiPassword','confirmMessage5'); checkPass(); return false;">
                                        <br><span id="confirmMessage5"></span>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <!--Submit & Cancel-->
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success" onclick="finalCheck(); return false;">Update</button>
                                    </div>
                                </div>

                            </form>
                            <!--/form-->

                        </div>
                        <!--/Edit Profil-->

                    </div>
                </div>
            </div>
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

<!-- chart js -->
<script src="../assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../assets/js/icheck/icheck.min.js"></script>

<script src="../assets/js/custom.js"></script>

<!-- image cropping -->
<script src="../assets/js/cropping/cropper.min.js"></script>
<script src="../assets/js/cropping/main.js"></script>


<!-- daterangepicker -->
<script type="text/javascript" src="../assets/js/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/datepicker/daterangepicker.js"></script>
<!-- moris js -->
<script src="../assets/js/moris/raphael-min.js"></script>
<script src="../assets/js/moris/morris.js"></script>
<script>
    $(function () {
        var day_data = [
        {
            "period": "Jan",
            "Hours worked": 80
        },
        {
            "period": "Feb",
            "Hours worked": 125
        },
        {
            "period": "Mar",
            "Hours worked": 176
        },
        {
            "period": "Apr",
            "Hours worked": 224
        },
        {
            "period": "May",
            "Hours worked": 265
        },
        {
            "period": "Jun",
            "Hours worked": 314
        },
        {
            "period": "Jul",
            "Hours worked": 347
        },
        {
            "period": "Aug",
            "Hours worked": 287
        },
        {
            "period": "Sep",
            "Hours worked": 240
        },
        {
            "period": "Oct",
            "Hours worked": 211
        }
        ];
        Morris.Bar({
            element: 'graph_bar',
            data: day_data,
            xkey: 'period',
            hideHover: 'auto',
            barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            ykeys: ['Hours worked', 'sorned'],
            labels: ['Hours worked', 'SORN'],
            xLabelAngle: 60
        });
    });
</script>


<script>
        //Cek Konfirmasi Password
        function checkPass()
        {
            var pass1 = document.getElementById('inputPassword');
            var pass2 = document.getElementById('inputUlangiPassword');
            var message = document.getElementById('confirmMessage4');
            var message1 = document.getElementById('confirmMessage5');
            var goodColor = "#66cc66";
            var badColor = "#ff6666";
            if (pass1.value == "" || pass2.value == ""){
                message.innerHTML = "";
                pass2.style.backgroundColor = "transparent";
            }
            else{    
                if(pass1.value == pass2.value){
                    pass2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    message1.innerHTML = "";
                    message.innerHTML = "Password yang dimasukkan sama!"
                }
                else{
                    pass2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    message1.innerHTML = "";
                    message.innerHTML = "Password yang dimasukkan tidak sama!"
                }
            }
        }


        function updateSelfMsg($this, $msgThis){
            var elem = document.getElementById($this);
            var message = document.getElementById($msgThis);
            if (elem.value != "" && ($this != "inputPassword" || $this != "inputUlangiPassword"))
            {
                message.innerHTML = "";
                elem.style.backgroundColor = "transparent";
            }
        }


        function checkNull($before, $msgBefore, $typeBefore){
            var elem = document.getElementById($before);
            var message = document.getElementById($msgBefore);
            if (elem.value == ""){
                elem.style.backgroundColor = "#ff6666";
                message.style.color = "#ff6666";
                if ($typeBefore == "inputNama"){
                    message.innerHTML = "Nama tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputAlamatSekarang"){
                    message.innerHTML = "Alamat tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputNoHP"){
                    message.innerHTML = "No. HP tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputNRP"){
                    message.innerHTML = "Username tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputPassword"){
                    message.innerHTML = "Password tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputPasword2"){
                    message.innerHTML = "Konfirmasi Password tidak boleh kosong!"    
                }

            }

            /*
            else if (elem.value == -1)
                {
                    elem.style.backgroundColor = "#ff6666";
                    message.style.color = "#ff6666";
                    if ($typeBefore == "pic"){
                        message.innerHTML = "PIC tidak boleh kosong!"    
                    }
                }
                */
                
                else {
                    message.innerHTML = "";
                    elem.style.backgroundColor = "transparent";
                }
            }

        /*
        function updateSelfMsg($this, $msgThis){
            var elem = document.getElementById($this);
            var message = document.getElementById($msgThis);
            if (elem.value != "" && ($this != "nosuratmasuk")){
                message.innerHTML = "";
                elem.style.backgroundColor = "transparent";
            }
        }
        */

        function finalCheck(){
            var sub = 0;
            var inputNama = document.getElementById('inputNama');
            var inputAlamat = document.getElementById('inputAlamatSekarang');
            var inputNoHP = document.getElementById('inputNoHP');
            var inputNRP = document.getElementById('inputNRP');
            var inputPassword = document.getElementById('inputPassword');
            var inputUlangiPassword = document.getElementById('inputUlangiPassword');
            if (inputNama.value != ""){
                if (inputAlamat.value != ""){
                    if (inputNoHP.value != ""){
                        if (inputNRP.value != ""){
                            if (inputPassword.value != ""){
                                if (inputUlangiPassword.value != ""){
                                    sub = 1;
                                }   
                            }
                        }
                    }
                }
            }
            
            if (sub == 1) {document.getElementById('doneEdit').submit();}
            /*
            else if ((inputPassword.value=="") != (inputPassword2.value=="")) {
                var msg = document.getElementById('confirmMessage6');
                msg.style.color = "#ff6666";
                msg.innerHTML = "Maaf, pass";
                $('#myModal').modal('hide');
            }
            */
            else{
                var msg = document.getElementById('confirmMessage6');
                msg.style.color = "#ff6666";
                msg.innerHTML = "Maaf, ada data yang salah atau belum lengkap, tolong periksa kembali!";
                $('#myModal').modal('hide');
            }
        }
    </script>




</body>

</html>