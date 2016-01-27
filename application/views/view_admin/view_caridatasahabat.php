<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pencarian Sahabat | SIMBAT</title>

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

    <!-- select2 -->
    <link href="../assets/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="../assets/css/switchery/switchery.min.css" />


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
                                    echo 'assets/images/user.png';
                                else
                                    echo $FotoProfil; //harus dikurangi ../
                                ?>" 
                                alt=""><?php echo $NamaLengkap . " "; ?>(Admin)
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
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
                        <?php 
                                if($status == 0)
                                    echo "<h3>Silakan Masukkan Pencarian</h3>";
                                else if($status == 1)
                                    echo "<h3 style='background-color:#66cc66; color:white; '>Hasil Pencarian</h3>";
                                else if($status == 2)
                                    echo "<h3 style='background-color:#ff6666; color:white; '>Data tidak ditemukan</h3>";
                        ?> 
                       
                        
                        <ul class="nav navbar-right">
                            <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        
                    
                        <form action="../pilihadmin/caridatasahabat" data-parsley-validate class="form-horizontal form-label-left" method="post">

                                        <!--Cari Nama-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="inputNama" name="inputNama" placeholder="Nama" class="form-control col-md-7 col-xs-12" />
                                            </div>
                                        </div>

                                        <!--Cari NIM/NRP-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNRP">NIM/NRP</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="inputNRP" name="inputNRP" placeholder="ex : 5112100702" class="form-control col-md-7 col-xs-12" />
                                            </div>
                                        </div>
                                        
                                        <!--Cari Jurusan-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputJurusan">Jurusan</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" tabindex="-1" id="inputJurusan" name="inputJurusan">
                                                    <option>-</option>
                                                    <?php foreach ($Jurusan->result() as $row) { ?>
                                                        <option value="<?php echo $row->Jurusan; ?>"><?php echo $row->Jurusan; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Cari PTN-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPTN">Perguruan Tinggi </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" tabindex="-1" id="inputPTN" name="inputPTN">
                                                    <option>-</option>
                                                    <?php foreach ($PTN->result() as $row) { ?>
                                                        <option value="<?php echo $row->PTN; ?>"><?php echo $row->PTN; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>


                                <!--Button Proses-->
                                <div class="form-group">
                                    <center>
                                     <button type="submit" class="btn btn-success">Cari</button>
                                 </center>
                             </div>
                         
                     </form>
                       
                             <!--view tabel-->
                            <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" class="tableflat">
                                            </th>
                                            <th>Nama Lengkap</th>
                                            <th>NRP</th>
                                            <th>Jurusan</th>
                                            <th>PTN</th>
                                            <th>Tahun Masuk</th>                                         
                                            <th>Alamat Sekarang</th>
                                            <th>No. HP</th>
                                            <th class=" no-link last"><span class="nobr">Action</span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                    if ($status==1)
                                    { 
                                        //$counter = 0;
                                        foreach ($query->result() as $row) { ?>
                                        <!--$counter++;-->
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="tableflat">
                                            </td>
                                            <td><?php echo  $row->NamaLengkap; ?></td>
                                            <td><?php echo  $row->NRP; ?></td>
                                            <td><?php echo  $row->Jurusan; ?></td>
                                            <td><?php echo  $row->PTN; ?></td>
                                            <td><?php echo  $row->TahunMasuk; ?></td>
                                            <td><?php echo  $row->AlamatSekarang; ?></td>
                                            <td><?php echo  $row->NoHP; ?></td>
                                            

                                            <!--<td class="a-right a-right "> </td>-->
                                            <td>
                                                    <a 
                                                    <?php echo 'href="'.base_url().'pilihadmin/updatedatasahabat/'.$row->NRP.'" '?>
                                                    class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    
                                                    
                                                    <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                                                        href="../pilihadmin/hapusdatasahabat/<?php echo  $row->NRP; ?>"
                                                        class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o"></i>
                                                        Delete
                                                    </a>
                                            </td>
                                        </tr>
                                    <?php } 
                                    }
                                    ?>
                                    </tbody>

                                </table>
                       <!--/view tabel-->


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
<!--Alert-->
<script src="../assets/js/bootstrap-alert.js"></script>
<!-- select2 -->
<script src="../assets/js/select/select2.full.js"></script>

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
    NProgress.done();
</script>

<!-- select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            //placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->
  
<!--Alert Konfirmasi-->
<?php
if ($hapus_data_sahabat_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;

    function fungsi_notifikasi()
    {
        alert(" . '"' . $hapus_data_sahabat_berhasil . '"' . ");
    }
    
    </script>";

else if ($update_data_sahabat_berhasil) echo "<script>
        window.onload = fungsi_notifikasi;

    function fungsi_notifikasi()
    {
        alert(" . '"' . $update_data_sahabat_berhasil . '"' . ");
    }
    </script>";
?>


<!-- Datatables -->
        <script src="../assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="../assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                    "sSwfPath": "<?php echo base_url('../assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                    
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>


</body>

</html>