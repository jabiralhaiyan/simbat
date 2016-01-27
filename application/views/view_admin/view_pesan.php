<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pesan | SIMBAT</title>

    <!-- Bootstrap core CSS -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <link href="../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/maps/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css"/>
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
                        <a href="home" class="site_title"><img src="../assets/images/logo-pmiiits.png" width="50px" height="50px"> <span>SIMBAT</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php 
                            $jumkar = strlen($FotoProfil);
                                $FotoProfil = substr($FotoProfil, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                if ($FotoProfil == NULL)
                                    echo '../assets/images/user.png';
                                else
                                    echo "../".$FotoProfil; ?>" 
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
                                //$jumkar = strlen($FotoProfil);
                                //$FotoProfil = substr($FotoProfil, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                    if ($FotoProfil == NULL)
                                        echo '../assets/images/user.png';
                                    else
                                    echo "../".$FotoProfil; //harus dikurangi ../
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
                                            //$jumkarakter = strlen($LinkFoto);
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

       <div class="col-md-3 col-sm-3 col-xs-3"> </div>

       <!--Tulis Pesan-->
       <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tulis Pesan</h2>
                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form action="../pilihadmin/do_pesan" method="post"> 
                    <!--Penerima Pesan-->
                    <label for="inputPenerima">Kepada</label>
                    <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima"></>

                    <!--Input Pesan-->
                    <label for="inputPesan">Pesan</label>
                    <textarea id="inputPesan" required="required" class="form-control" name="inputPesan"></textarea>

                    <br>
                    <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </center>
                    </div>
                </form>    

            </div>


        </div>
    </div>

    <!--Pesan Masuk-->
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pesan Masuk (Inbox)</h2>
                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Dari</th>
                            <th>Pesan</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php foreach ($kotakmasuk->result() as $row){ ?>
                    <tbody>
                        <tr>
                            <th><?php echo $row->Pengirim; ?></th>
                            <td><?php echo (SUBSTR($row->Pesan, 0, 20)).'...'; ?></td>
                            <th><?php echo $row->Waktu; ?></th>
                            <td>
                                
                                <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" href=".bs-example-modal-lg<?php echo $row->IdPesan; ?>"><i class="fa fa-reply"></i> Reply</a>

                                <!--Modal-->
                                    <div class="modal fade bs-example-modal-lg<?php echo $row->IdPesan; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:650px">
                                        <div class="modal-content" >

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h3 class="modal-title" id="myModalLabel">Balas Pesan</h3>
                                            </div>
                                             <form action="../pilihadmin/do_pesan" method="post"> 
                                            <div class="modal-body">
                                                
                                               
                                                    <!--Penerima Pesan-->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="inputPenerima">Kepada</label>
                                                        <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima" value="<?php echo $row->Pengirim; ?>" readonly="readonly" />
                                                    </div>
                                                    
                                                    <!--Pesan Sebelumnya-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoSahabat == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoSahabat; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#eaeaea; color:black;" class="form-control" readonly="readonly"><?php echo $row->Pesan; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <!--Pesan Sesudahnya-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#0084ff; color:white;" id="inputPesan" required="required" class="form-control" name="inputPesan"></textarea>
                                                        </div>

                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoAdmin == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoAdmin; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            
                                            <div class="modal-footer">
                                                <center>
                                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <center>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal-->
                                

                                <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                                href="../pilihadmin/do_hapuskotakmasuk/<?php echo  $row->IdPesan; ?>"
                                class="btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>

                


            </table>


 



        </div>
    </div>
</div>

<!--Pesan Keluar-->

<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Pesan Keluar (Out Box)</h2>
            <ul class="nav navbar-right">
                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kepada</th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php foreach ($kotakkeluar->result() as $row){ ?>
                <tbody>
                    <tr>
                        <th><?php echo $row->Penerima; ?></th>
                        <td><?php echo (SUBSTR($row->Pesan, 0, 20)).'...'; ?></td>
                        <th><?php echo $row->Waktu; ?></th>
                        <td>
                        
                        <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" href=".bs-example-modal-lg<?php echo $row->IdPesan; ?>"><i class="fa fa-folder"></i> View</a>


                                <!--Modal-->
                                    <div class="modal fade bs-example-modal-lg<?php echo $row->IdPesan; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:650px">
                                        <div class="modal-content" >

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h3 class="modal-title" id="myModalLabel">Lihat Pesan</h3>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <!--Penerima Pesan-->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="inputPenerima">Kepada</label>
                                                        <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima" value="<?php echo $row->Penerima; ?>" readonly="readonly" />
                                                    </div>
                                                    
                                                    <!--Lihat Pesan-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoAdmin == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoAdmin; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#0084ff; color:white;" class="form-control" readonly="readonly"><?php echo $row->Pesan; ?></textarea>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <br><br><br><br><br><br><br><br><br>
                                            
                                            <div class="modal-footer">
                                                <center>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal-->

                        <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                            href="../pilihadmin/do_hapuskotakkeluar/<?php echo  $row->IdPesan; ?>"
                            class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>


        </table>
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
<script>
    $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
                ], {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        verticalLines: true,
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#fff'
                    },
                    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                    xaxis: {
                        tickColor: "rgba(51, 51, 51, 0.06)",
                        mode: "time",
                        tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                    },
                    yaxis: {
                        ticks: 8,
                        tickColor: "rgba(51, 51, 51, 0.06)",
                    },
                    tooltip: false
                });

function gd(year, month, day) {
    return new Date(year, month - 1, day).getTime();
}
});
</script>

<!-- worldmap -->
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-2.0.1.min.js"></script>
<script type="text/javascript" src="../assets/js/maps/gdp-data.js"></script>
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>
<script>
    $(function () {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="../assets/js/skycons/skycons.js"></script>
<script>
    var icons = new Skycons({
        "color": "#73879C"
    }),
    list = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
    ],
    i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- dashbord linegraph -->
<script>
    var doughnutData = [
    {
        value: 30,
        color: "#455C73"
    },
    {
        value: 30,
        color: "#9B59B6"
    },
    {
        value: 60,
        color: "#BDC3C7"
    },
    {
        value: 100,
        color: "#26B99A"
    },
    {
        value: 120,
        color: "#3498DB"
    }
    ];
    var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
</script>
<!-- /dashbord linegraph -->
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
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
                opens: 'left',
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
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
</script>
<script>
    NProgress.done();
</script>
<!-- /datepicker -->
<!-- /footer content -->

<!--Alert Konfirmasi-->
<?php

if ($kirim_pesan_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $kirim_pesan_berhasil . '"' . ");
}
</script>";

else if ($hapus_kotak_masuk_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $hapus_kotak_masuk_berhasil . '"' . ");
}
</script>";

else if ($hapus_kotak_keluar_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $hapus_kotak_keluar_berhasil . '"' . ");
}
</script>";

?>

</body>

</html>
