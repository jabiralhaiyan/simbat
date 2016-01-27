<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Akun Admin | SIMBAT</title>

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
                                        if ($FotoProfil == NULL)
                                            echo '../assets/images/user.png';
                                        else
                                            echo $FotoProfil; 
                                        ?>" 
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
                                            echo '../assets/images/user.png';
                                        else
                                            echo $FotoProfil; 
                                        ?>" 
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
                    <h3>Tambah Akun Admin</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="section">Personal Info</h2>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="post" action="../pilihadmin/do_tambahakunadmin">

                                <!--data-validate-words="n"-->
                                <!--Nama-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNama" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputNama" placeholder="" value="" required="required" type="text" 
                                        onkeyup="updateSelfMsg('inputNama','confirmMessage0');">
                                        <br><span id="confirmMessage0"></span>
                                    </div>
                                </div>

                                <!--Alamat Sekarang-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputAlamatSekarang" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputAlamatSekarang" placeholder="" value="" required="required" type="text" 
                                        onfocus="checkNull('inputNama', 'confirmMessage0', 'inputNama'); return false;" 
                                        onkeyup="updateSelfMsg('inputAlamatSekarang','confirmMessage1'); checkPass(); return false;">
                                        <br><span id="confirmMessage1"></span>
                                    </div>
                                </div>

                                <!--No. HP-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNoHP">No. HP <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNoHP" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputNoHP" placeholder="" value="" required="required" type="text" 
                                        onfocus="checkNull('inputAlamatSekarang', 'confirmMessage1', 'inputAlamatSekarang'); return false;" 
                                        onkeyup="updateSelfMsg('inputNoHP','confirmMessage2'); checkPass(); return false;">
                                        <br><span id="confirmMessage2"></span>
                                    </div>
                                </div>

                                <!--NRP-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNRP">Username <span class="required">*</span>
                                    </label>
                                    <!--Peringatan nrp sudah ada-->
                                    <label>

                                        <?php
                                        if ($nrp_sudah_ada) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp".$nrp_sudah_ada."&nbsp &nbsp</center><br>";
                                        ?>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <input id="inputNRP" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,10" name="inputNRP" placeholder="Username wajib diawali huruf 'A' KAPITAL | Ex : A121" value="" required="required" type="text"
                                        onfocus="checkNull('inputNoHP', 'confirmMessage2', 'inputNoHP'); return false;" 
                                        onkeyup="updateSelfMsg('inputNRP','confirmMessage3'); checkPass(); return false;">
                                        <br><span id="confirmMessage3"></span>
                                    </div>
                                    
                                </div>

                                <!--Password-->
                                <div class="item form-group">
                                    <label for="inputPassword" class="control-label col-md-3">Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputPassword" type="password" name="inputPassword" data-validate-length-range="1,8" class="form-control col-md-7 col-xs-12" required="required"
                                        onfocus="checkNull('inputNRP', 'confirmMessage3', 'inputNRP'); return false;" 
                                        onkeyup="updateSelfMsg('inputPassword','confirmMessage4'); checkPass(); return false;">
                                        <br><span id="confirmMessage4"></span>
                                    </div>
                                </div>

                                <!--Ulangi Password-->
                                <div class="item form-group">
                                    <label for="inputPassword2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputUlangiPassword" type="password" name="inputUlangiPassword" data-validate-linked="inputPassword" class="form-control col-md-7 col-xs-12" required="required"
                                        onfocus="checkNull('inputPassword', 'confirmMessage4', 'inputPassword'); return false;" 
                                        onkeyup="updateSelfMsg('inputUlangiPassword','confirmMessage5'); checkPass(); return false;">
                                        <br><span id="confirmMessage5"></span>
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <!--Submit & Cancel-->
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary" >Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success" onclick="finalCheck(); return false;">Save</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer content -->
        <footer>
            <div class="">
                <p class="pull-right">Sistem Informasi Manajemen Sahabat |
                    <span class="lead"> <img src="../assets/images/logo-pmiiits.png" width="30px" heigth="30px"> SIMBAT</span>
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

<!-- PNotify -->
<script type="text/javascript" src="../assets/js/notify/pnotify.core.js"></script>
<script type="text/javascript" src="../assets/js/notify/pnotify.buttons.js"></script>
<script type="text/javascript" src="../assets/js/notify/pnotify.nonblock.js"></script>

<!-- Script PNotify -->
<!--
<script>
        $(function () {
            var cnt = 10; //$("#custom_notifications ul.notifications li").length + 1;
            TabbedNotification = function (options) {
                var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title + "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

                if (document.getElementById('custom_notifications') == null) {
                    alert('doesnt exists');
                } else {
                    $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                    $('#custom_notifications #notif-group').append(message);
                    cnt++;
                    CustomTabs(options);
                }
            }

            CustomTabs = function (options) {
                $('.tabbed_notifications > div').hide();
                $('.tabbed_notifications > div:first-of-type').show();
                $('#custom_notifications').removeClass('dsp_none');
                $('.notifications a').click(function (e) {
                    e.preventDefault();
                    var $this = $(this),
                        tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                    others.removeClass('active');
                    $this.addClass('active');
                    $(tabbed_notifications).children('div').hide();
                    $(target).show();
                });
            }

            CustomTabs();

            var tabid = idname = '';
            $(document).on('click', '.notification_close', function (e) {
                idname = $(this).parent().parent().attr("id");
                tabid = idname.substr(-2);
                $('#ntf' + tabid).remove();
                $('#ntlink' + tabid).parent().remove();
                $('.notifications a').first().addClass('active');
                $('#notif-group div').first().css('display','block');
            });
        })
    </script>
-->
<script>
    NProgress.done();
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
                else if ($typeBefore == "inputUlangiPasword"){
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
            var inputAlamat = document.getElementById('inputAlamat');
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
