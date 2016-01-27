<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tentang | SIMBAT</title>

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
                <li class="active"><a href="../pilihsahabat/tentang"> <i class="fa fa-bookmark"> </i> TENTANG</a></li>
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
                     <li><a href="../pilihsahabat/ubahpassword"><i class="fa fa-lock"></i> Mengubah Password</a></li>
                     
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
	 
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <center>
		  <h3>Sistem Informasi Manajemen Sahabat</h3>
		  <h3>(SIMBAT)</h3>
		  
			<a><img class="logo" src="../assets2/img/logo-pmiiits.png"> </a>
		  </center>
        </div>
			
			<h3>Tentang Kami</h3>
			<p><h5>Sistem Informasi Manajemen Sahabat (SIMBAT)</h5>merupakan portal utama dalam mengelola informasi sahabat PMII Sepuluh Nopember. Melalui SIMBAT pengguna akan dapat mengakses data pribadinya serta mengubahnya sesuai dengan hak aksesnya.</p>

			<p>Keberadaan SIMBAT sebagai e-services gate system secara langsung akan berdampak pada efektifitas dan efisiensi pengelolaan informasi data sahabat. Sehingga sistem informasi ini akan dirancang dan diimplementasikan sesuai dengan standar yang telah diberlakukan dalam SIMBAT.</p>
			
			<p>Setiap pengguna akan memiliki personal dashboard. Pengaturan hak akses pengguna berdasarkan kategori dan level pengguna dapat diatur dengan menggunakan SIMBAT. Kontrol pengguna yang menggunakan Sistem Informasi yang ada dalam SIMBAT dapat dilakukan dan direkam.</p>
			
			<br>
			<h3>Hubungi Kami</h3>
				<table>
                  <tbody style=" font-size:14px">
                      
					  <!--Alamat-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-map-marker"></i> Alamat</td>
                          <td>:</td>
                          <td style="width: 500px;">&nbsp Jl. Arif Rahman Hakim Keputih IIIE No. 12 Sukolilo, Kota Surabaya 60111</td>
                      </tr>
                      
					  <!--No. HP-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-bookmark"></i> No HP</td>
                          <td>:</td>
                          <td style="width: 450px;">&nbsp +62857 2444 4412</td>
                      </tr>
					                        
					  <!--Email-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-envelope"></i> Email</td>
                          <td>:</td>
                          <td style="width: 450px;">&nbsp contact@pmii1011.or.id</td>
                      </tr>
					  
                  </tbody>                 
              </table>
				<br>
				  
          <a href="mailto:contact@pmii1011.or.id" data-toggle="tooltip" title="contact@pmii1011.or.id" target="_blank"><img src="../assets2/img/logo-email.png" width="70px" height="70px"></a>          
          <a href="https://pmii1011.or.id" data-toggle="tooltip" title="pmii1011.or.id" target="_blank"><img src="../assets2/img/logo-blog.png" width="70px" height="70px"></a> 
          <a href="https://www.facebook.com/PMII-Sepuluh-Nopember-211799395573138" data-toggle="tooltip" title="PMII Sepuluh Nopember" target="_blank"><img src="../assets2/img/logo-fb.png" width="70px" height="70px"></a>        
				  <a href="https://twitter.com/PMII1011" data-toggle="tooltip" title="@PMII1011" target="_blank"><img src="../assets2/img/logo-twitter.png" width="70px" height="70px"></a>
          <a href="https://instagram.com/pmii1011" data-toggle="tooltip" title="pmii1011" target="_blank"><img src="../assets2/img/logo-instagram.png" width="70px" height="70px"></a>
          <a href="https://line.me/ti/p/%40keh2462o" data-toggle="tooltip" title="Media Sahabat" target="_blank"><img src="../assets2/img/logo-line.png" width="70px" height="70px"></a>
        
	</div>

    <div id="footer">
      <div class="container">
		<br><br><br>
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; PMII Komisariat Sepuluh Nopember</h5></center>
		</div>
      </div>
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
   
  </body>
</html>
