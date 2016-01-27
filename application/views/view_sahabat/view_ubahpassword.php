  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Password | SIMBAT</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets2/css/bootstrap.min.css" rel="stylesheet">

  <!--Font Awesome-->
  <link href="../assets2/css/font-awesome.min.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../ assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../assets2/js/ie-emulation-modes-warning.js"></script>

  <!-- Favicon-->
  <link rel="shortcut icon" href="../assets2/ico/favicon-pmiiits.ico">

  <!--background: url(assets2/img/bg.jpg);-->

</head>

      <body style="background:#F7F7F7;">
         <!--NAVBAR-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="home"><img src="../assets2/img/logo-pmiiits.png" width="40px" height="40px"/> &nbsp</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li><a href="../home"><i class="fa fa-home"></i> BERANDA</a></li>
          <li><a href="../pilihsahabat/profil"><i class="fa fa-user"></i> PROFIL</a></li>
          <li><a href="../pilihsahabat/pesan"> <i class="fa fa-envelope"> </i> PESAN</a></li>
          <li><a href="../pilihsahabat/tentang"> <i class="fa fa-bookmark"> </i> TENTANG</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="../pilihsahabat/carisahabat">
          <div class="form-group">
            <input name="inputNama" type="text" class="form-control" placeholder="Mencari Data Sahabat">
          </div>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <div class="btn-group">
              <a href="../pilihsahabat/profil" class="btn btn-primary"><i class="fa fa-user"></i> <?php echo $NamaLengkap; ?></a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
               <li><a href="../pilihsahabat/ubahdatapribadi"><i class="fa fa-pencil"></i> Mengubah Data</a></li>
               <li><a href="../pilihsahabat/uploadfoto"><i class="fa fa-camera"></i> Upload Foto</a></li>

               <li class="divider"></li>

               <li class="nav-header">Pengaturan</li>
               <li class="active"><a href="../pilihsahabat/ubahpassword"><i class="fa fa-lock"></i> Mengubah Password</a></li>

               <li class="divider"></li>

               <li class="nav-header">Akun</li>
               <li><a href="../home/sign_out"><i class="fa fa-power-off"></i> Keluar</a></li>
             </ul>
           </div>
         </li>
       </ul>
     </div>
   </div>
 </nav>

      <!--CONTENT-->
      <!-- Mengubah Data Pribadi -->
      <div class="container">
       <center><h2>Mengubah Password</h2></center>
       <center style="color:red;">&nbsp &nbsp * (wajib diisi)</center>
       <br>
  			<!--center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
  			<br>
  			<center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
  			<br-->
  			<?php

        if ($nrp_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nrp_kosong . "</center><br>";
        if ($password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_kosong . "</center><br>";
        if ($ulangi_password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $ulangi_password_kosong . "</center><br>";
        if ($nrp_sudah_ada) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nrp_sudah_ada . "</center><br>";
        if ($password_dan_ulangi_password_tidak_sama) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_dan_ulangi_password_tidak_sama . "</center><br>";
        ?>
        <div class="col-md-3"></div>

        <form class="form-horizontal" action="../pilihsahabat/do_ubahpassword" method="post">

          <!--Ganti Password-->
          <div class="col-md-6">
           <!--NRP-->
           <div class="form-group">
            <label class="col-lg-2 col-lg-2 control-label" for="inputNRP" style="text-align: left">NIM / NRP <span style="color:red;">*</span></label>
            <div class="col-lg-10">
             <input name="inputNRP" class="form-control" type="text" id="inputNRP" value="<?php echo ($NRP ? $NRP : "");?>" placeholder="Nomor Induk Mahasiswa" readonly>
           </div>
         </div>

         <!--Password-->
         <div class="form-group">
          <label class="col-lg-2 control-label" for="inputPassword" style="text-align: left">Password <span style="color:red;">*</span></label>
          <div class="col-lg-10">
           <input name="inputPassword" class="form-control" type="password" id="inputPassword" value="<?php echo ($Password ? $Password : "");?>" placeholder="Password">
         </div>
       </div>

       <!--Ulangi Password-->
       <div class="form-group">
        <label class="col-lg-2 control-label" for="inputUlangiPassword" style="text-align: left">Ulangi Password <span style="color:red;">*</span></label>
        <div class="col-lg-10">
         <input name="inputUlangiPassword" class="form-control" type="password" id="inputUlangiPassword" value="" placeholder="Konfirmasi Password">
       </div>
     </div>

   </div>

   <div class="col-md-3"></div>

   <br><br><br><br><br><br><br><br>
   <center>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
  </center>
  <div id="push"></div>

  </form>

  </div>
  
<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the user load faster -->
  <script src="../assets2/js/jquery-2.1.4.min.js"></script>
  <!--<script src="assets2/js/bootstrap.min.js"></script>-->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../assets2/js/ie10-viewport-bug-workaround.js"></script>

  <script src="../assets2/js/modal.js"></script>
  <script src="../assets2/js/transition.js"></script>
  <script src="../assets2/js/alert.js"></script>
  <script src="../assets2/js/dropdown.js"></script>
  <script src="../assets2/js/scrollspy.js"></script>
  <script src="../assets2/js/tab.js"></script>
  <script src="../assets2/js/tooltip.js"></script>
  <script src="../assets2/js/popover.js"></script>
  <script src="../assets2/js/button.js"></script>
  <script src="../assets2/js/collapse.js"></script>
  <script src="../assets2/js/carousel.js"></script>
  <script src="../assets2/js/typeahead.js"></script>


  <script>
   $('#myTab a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
   })
  </script>
  <br>
    <div class="container">
      <div class="col-md-12">
       <center><h5 style="background-color: #e3e3e3">Copyright &copy; PMII Komisariat Sepuluh Nopember</h5></center>
     </div>
   </div>

  </body>
  </html>
