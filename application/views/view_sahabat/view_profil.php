<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profil | SIMBAT</title>

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
                <li class="active"><a href="../pilihsahabat/profil"><i class="fa fa-user"></i> PROFIL</a></li>
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

  <!--Kolom Kiri Foto-->
  <div class="container">

   <div class="col-md-12">
    <div class="col-md-3">
      <center>
        <img src="
        <?php 
        if($LinkFoto == ''){
         echo "../assets2/img/default-foto.png";	
       }
       else
       {
         echo $LinkFoto;
       }
       ?>" width="250px" height="250px" class="img-polaroid"><br>                             
     </center>
     <script>
      $(function() {
        $('a').tooltip({placement: 'top'});
      });
    </script>
  </div>
  <div class="col-md-6">                  

    <!--Kolom Kanan Informasi-->
    <blockquote>              
      <h2><?php echo $NamaLengkap;?></h2>
      <small class="text-info" style=" font-size:13px"><?php echo ($PTN ? ("Sahabat Perguruan Tinggi " . $PTN) : "");?> 
       <a  href="../pilihsahabat/ubahdatapribadi"> <span class="badge"><i class="icon-edit icon-white"></i> Mengubah Data</span></a></small>
       <table>
        <tbody style=" font-size:14px">
          <!--Nama-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Nama Lengkap</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo $NamaLengkap;?></td>
          </tr>

          <!--NRP-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> NIM/NRP</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo $NRP;?></td>
          </tr>

          <!--PTN-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Perguruan Tinggi</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($PTN ? $PTN : "");?></td>
          </tr>

          <!--Jurusan-->
          <tr>
            <td style="width: 200px;"> <i class="fa fa-bookmark"></i> Jurusan</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($Jurusan ? $Jurusan : "");?></td>
          </tr>

          <!--Alamat-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Alamat Sekarang</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($AlamatSekarang ? $AlamatSekarang : "");?></td>
          </tr>

          <!--No. HP-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> No. HP</td>
            <td>:</td>
            <td style="width: 450px;">+62<?php echo ($NoHP ? $NoHP : "");?></td>
          </tr>
          <!--Email-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Email</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($Email ? $Email : "");?></td>
          </tr>


        </tbody>                 
      </table>
      <br>

      <a href="http://<?php echo ($Email ? $Email : "");?>" data-toggle="tooltip" title="<?php echo ($Email ? $Email : "");?>"><img src="../assets2/img/logo-email.png" width="50px" height="50px"></a>
      <a href="http://<?php echo ($Blog ? $Blog : "");?>" data-toggle="tooltip" title="<?php echo ($Blog ? $Blog : "");?>"><img src="../assets2/img/logo-blog.png" width="50px" height="50px"></a>
      <a href="<?php echo ($Facebook ? $Facebook : "");?>" data-toggle="tooltip" title="<?php echo ($Facebook ? $Facebook : "");?>"><img src="../assets2/img/logo-fb.png" width="50px" height="50px"></a>
      <a href="http://twitter.com/<?php echo ($Twitter ? $Twitter : "");?>" data-toggle="tooltip" title="<?php echo ($Twitter ? $Twitter : "");?>"><img src="../assets2/img/logo-twitter.png" width="50px" height="50px"></a>
      <a href="http://instagram.com/<?php echo ($Instagram ? $Instagram : "");?>" data-toggle="tooltip" title="<?php echo ($Instagram ? $Instagram : "");?>"><img src="../assets2/img/logo-instagram.png" width="50px" height="50px"></a>        
      <a href="#" data-toggle="tooltip" title="<?php echo ($Line ? $Line : "");?>"><img src="../assets2/img/logo-line.png" width="50px" height="50px"></a>        
    </blockquote>
  </div>


</div>

<!--Bagian Bawah-->
<div class="col-md-10">
  <br>
  <ul class="nav nav-pills" id="myTab" role="tablist">
    <li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab">Informasi Lanjutan</a></li>
    <li role="presentation"><a href="#prestasi" aria-controls="prestasi" role="tab">Prestasi</a></li>
    <li role="presentation"><a href="#orang_tua" aria-controls="orang_tua" role="tab">Informasi Orang Tua</a></li>
    <li role="presentation"><a href="#kartu" aria-controls="kartu" role="tab">Identity Card <span class="badge badge-important">New</span></a></li>
    <li role="presentation"><a href="#cetak" aria-controls="cetak" role="tab">Print <span class="badge badge-important">New</span></a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="about">
      <blockquote>
        <table class="table table-hover">

          <!--Informasi Lanjutan-->
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> MAPABA</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($MAPABA ? $MAPABA : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Studi Intensif</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($SI ? $SI : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Pelatihan Kader Dasar</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PKD ? $PKD : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Aktif Organisasi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Kesibukan ? $Kesibukan : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"> <i class="fa fa-tasks"></i> Bekerja</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($TempatKerja ? $TempatKerja : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Hobi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Hobi ? $Hobi : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Cita-Cita</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Cita_Cita ? $Cita_Cita : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Motto</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Motto ? $Motto : "");?></td>
            </tr>

          </tbody>                 
        </table>            
      </blockquote>
    </div>

    <!--Prestasi-->
    <div role="tabpanel" class="tab-pane" id="prestasi">
      <blockquote>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-star"></i> Prestasi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Prestasi ? $Prestasi : "");?> </td>
            </tr>
          </tbody>                 
        </table>
      </blockquote>
    </div>

    <!--Informasi Orang-Tua-->
    <div role="tabpanel" class="tab-pane" id="orang_tua">
      <blockquote>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Nama Orang-Tua</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($NamaOrtu ? $NamaOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Pendidikan Terakhir</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PendidikanOrtu ? $PendidikanOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Pekerjaan</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PekerjaanOrtu ? $PekerjaanOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Kontak Orang Tua</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($KontakOrtu ? $KontakOrtu : "");?></td>
            </tr>
          </tbody>                 
        </table>
      </blockquote>
    </div>

    <!--Id Card-->
    <div role="tabpanel" class="tab-pane" id="kartu">
      <blockquote>
        <div class="hero-unit">
          <h1>Coming Soon!</h1>
          <br>
          <div class="progress progress-striped active">
            <div class="progress-bar" style="width: 20%;"></div>
          </div>
        </div>
      </blockquote>
    </div>

    <!--Print-->
    <div role="tabpanel" class="tab-pane" id="cetak">
      <blockquote>
        <div class="hero-unit">
          <h1>Coming Soon!</h1>
          <br>
          <div class="progress progress-striped active">
            <div class="progress-bar" style="width: 60%;"></div>
          </div>
        </div>
      </blockquote>
    </div>
  </div>
</div>
</div>
<br>
</div>

<!--End-->


<div id="footer">
  <br>
  <div class="container">
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


<!--Script Nav Nav Pills-->
<script>
  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
</script>

</body>
</html>
