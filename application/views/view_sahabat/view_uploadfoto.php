<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload Foto | SIMBAT</title>

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
               <li class="active"><a href="../pilihsahabat/uploadfoto"><i class="fa fa-camera"></i> Upload Foto</a></li>

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

	<!--Upload Foto-->
	<div class="container">
			<?php 
			if($status == 1)
			{
				echo '<center><h4>Gambar berhasil diunggah</h4></center>';
			}
			else if($status == 2)
			{
				echo '<center><h4>Maaf terdapat kesalahan ketika mengunggah gambar</h4></center>';
			}
			else if($status == 3)
			{
				echo '<center><h4>Silakan pilih gambar yang akan diunggah</h4></center>';
			}
			else if($status == 4)
			{
				echo '<center><h4>Ukuran gambar terlalu besar</h4></center>';
			}
			else if($status == 5)
			{
				echo '<center><h4>Format file gambar tidak tepat</h4></center>';
			}
			?>
			<center><h2>Upload Foto</h2></center>
			<br>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-list bs-docs-sidenav">
					<li>
						<center><img src="
						<?php 
						if($link == ''){
							echo "../assets2/img/default-foto.png";	
						}
						else
						{
							echo $link;
						}
						?>" width="200px" height="200px" class="img-polaroid">
							<h4>Unggah Foto :</h4>
							<p style="font-size: 16px; color: #003bb3"><i class="icon-ok"></i> Ukuran max 300 kB <br>
							<i class="icon-ok"></i> Tipe file : jpg. jpeg, png</p></center>
					<form class="form-search" action="../pilihsahabat/uploadfoto" method="post" enctype="multipart/form-data">
						<center>
							<input type="file" name="fileToUpload" id="fileToUpload"><br>
							<button class="btn btn-primary" type="submit" data-loading-text="Loading..." name="submit">Unggah</button>
						</center>
					</form>
					</li>
				</ul>       
			</div>
		</div>
	</div>
	

      <div class="container">
		<div class="col-md-12">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; PMII Komisariat Sepuluh Nopember</h5></center>
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
