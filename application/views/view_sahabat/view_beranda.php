<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Beranda | SIMBAT</title>

  <!-- Bootstrap core CSS -->
  <link href="assets2/css/bootstrap.min.css" rel="stylesheet">

  <!--Font Awesome-->
  <link href="assets2/css/font-awesome.min.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../ assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets2/js/ie-emulation-modes-warning.js"></script>

  <!-- Favicon-->
  <link rel="shortcut icon" href="assets2/ico/favicon-pmiiits.ico">

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
              <a class="brand" href="home"><img src="assets2/img/logo-pmiiits.png" width="40px" height="40px"/> &nbsp</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home"><i class="fa fa-home"></i> BERANDA</a></li>
                <li><a href="pilihsahabat/profil"><i class="fa fa-user"></i> PROFIL</a></li>
                <li><a href="pilihsahabat/pesan"> <i class="fa fa-envelope"> </i> PESAN</a></li>
                <li><a href="pilihsahabat/tentang"> <i class="fa fa-bookmark"> </i> TENTANG</a></li>
              </ul>
              <form class="navbar-form navbar-left" role="search" method="post" action="pilihsahabat/carisahabat">
                <div class="form-group">
                  <input name="inputNama" type="text" class="form-control" placeholder="Mencari Data Sahabat">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <div class="btn-group">
                    <a href="pilihsahabat/profil" class="btn btn-primary"><i class="fa fa-user"></i> <?php echo $NamaLengkap; ?></a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                     <li><a href="pilihsahabat/ubahdatapribadi"><i class="fa fa-pencil"></i> Mengubah Data</a></li>
                     <li><a href="pilihsahabat/uploadfoto"><i class="fa fa-camera"></i> Upload Foto</a></li>
                     
                     <li class="divider"></li>
                     
                     <li class="nav-header">Pengaturan</li>
                     <li><a href="pilihsahabat/ubahpassword"><i class="fa fa-lock"></i> Mengubah Password</a></li>
                     
                     <li class="divider"></li>
                     
                     <li class="nav-header">Akun</li>
                     <li><a href="home/sign_out"><i class="fa fa-power-off"></i> Keluar</a></li>
                   </ul>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </nav>


       <!--Modal-->
<div class="modal fade" id="myModal" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">#News!</h4>
      </div>
        <div class="alert alert-info">
          <p style="font-size:18px"><strong>Silahkan memperbarui informasi tentang diri anda untuk keperluan administrasi komisariat</strong></p>
          <p style="font-size:16px">Terima-Kasih.</p>
          </div>
      <div class="modal-footer">
        <a href="pilihsahabat/ubahdatapribadi" id="myBtn" class="btn btn-primary">Update Data</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



    <!-- PAGE CONTENT -->
    <div class="container">
      <div class="page-header">
        <center>

          <h3>Selamat Datang di<br>Sistem Informasi Manajamen Sahabat</h3>
          <h3>(SIMBAT)</h3>

          <a><img src="assets2/img/logo-pmiiits.png" width="290px" height="290px"> </a>
        </center>
      </div>

      <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-4" style="background-color: #e3e3e3">
          <p><a class="btn btn-large btn-block btn-primary" href="pilihsahabat/ubahdatapribadi">Mengubah Data Pribadi</a></p>
          <p>Menu ini digunakan untuk mengubah data pribadi setiap sahabat agar data yang tersimpan menjadi data yang valid dan update.</p>
        </div>  
        <div class="col-md-2"></div>
        <div class="col-md-4" style="background-color: #e3e3e3">
          <p><a class="btn btn-large btn-block btn-primary" href="pilihsahabat/uploadfoto">Upload Foto</a></p>
          <p>Menu ini digunakan untuk mengubah foto profil akun sahabat.</p>
          <br>
        </div>
        <div class="col-md-1"></div>
      </div>

  </div>

  <footer>
    <div class="container">
      <br><br><br><br>
      <p class="text-right">
        <a href="https://www.facebook.com/PMII-Sepuluh-Nopember-211799395573138/" target="_blank"> <img src="assets2/img/logo-fb.png" width="30px" height="30px" class="img-rounded"> PMII Sepuluh Nopember &nbsp</a> 
        <a href="https://twitter.com/PMII1011" target="_blank"> <img src="assets2/img/logo-twitter.png" width="30px" height="30px" class="img-rounded"> @PMII1011 </a> </p>

       <div class="col-md-12">
         <center><h5 style="background-color: #e3e3e3">Copyright &copy; PMII Komisariat Sepuluh Nopember</h5></center>
       </div>
     </div>
   </footer>


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the user load faster -->
    <script src="assets2/js/jquery-2.1.4.min.js"></script>
    <!--<script src="assets2/js/bootstrap.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets2/js/ie10-viewport-bug-workaround.js"></script>

    <script src="assets2/js/modal.js"></script>
    <script src="assets2/js/transition.js"></script>
    <script src="assets2/js/alert.js"></script>
    <script src="assets2/js/dropdown.js"></script>
    <script src="assets2/js/scrollspy.js"></script>
    <script src="assets2/js/tab.js"></script>
    <script src="assets2/js/tooltip.js"></script>
    <script src="assets2/js/popover.js"></script>
    <script src="assets2/js/button.js"></script>
    <script src="assets2/js/collapse.js"></script>
    <script src="assets2/js/carousel.js"></script>
    <script src="assets2/js/typeahead.js"></script>

  <script>
     $('#myModal').modal('toggle')
  </script>

      <?php
      if ($ubah_data_pribadi_berhasil) echo "<script>
       window.onload = fungsi_notifikasi;

     function fungsi_notifikasi()
     {
      alert(" . '"' . $ubah_data_pribadi_berhasil . '"' . ");
    }
  </script>";
  if ($ubah_password_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;

  function fungsi_notifikasi()
  {
    alert(" . '"' . $ubah_password_berhasil . '"' . ");
  }
</script>";                    
?>

 </body>
</html>
