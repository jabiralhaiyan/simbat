<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Data | SIMBAT</title>

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
               <li class="active"><a href="../pilihsahabat/ubahdatapribadi"><i class="fa fa-pencil"></i> Mengubah Data</a></li>
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

 <!-- Mengubah Data Pribadi -->
 <div class="container">
  <center><h2>Mengubah Data Pribadi</h2></center>
  <center style="color:red;">&nbsp &nbsp * (wajib diisi)</center>
  <br>
      <!--center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
      <br>
      <center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
      <br-->
      <?php
      if ($nama_lengkap_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_lengkap_kosong . "</center><br>";
      if ($jenis_kelamin_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $jenis_kelamin_kosong . "</center><br>";
      if ($nama_ptn_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_ptn_kosong . "</center><br>";
      //if ($tahun_masuk_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $tahun_masuk_kosong . "</center><br>";
      
      if ($nama_ptn_tidak_terdaftar) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_ptn_tidak_terdaftar . "</center><br>";
      if ($format_email_salah) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $format_email_salah . "</center><br>";
      ?>



<div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <form class="form-horizontal" name="login" action="../pilihsahabat/do_ubahdatapribadi" method="post">
          <!--Informasi Umum-->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI UMUM
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <!-- Nama Lengkap -->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputNamaLengkap" style="text-align: left">Nama Lengkap <span style="color:red;">*</span></label>
                  <div class="col-lg-10">
                    <input name="inputNamaLengkap" class="form-control" type="text" id="inputNamaLengkap" value="<?php echo ($NamaLengkap ? $NamaLengkap : "");?>" placeholder="Nama Lengkap">
                  </div>
                </div>
                <!-- Nama Panggilan -->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputNamaPanggilan" style="text-align: left">Nama Panggilan</label>
                  <div class="col-lg-10">
                    <input name="inputNamaPanggilan" class="form-control" type="text" id="inputNamaPanggilan" value="<?php echo ($NamaPanggilan ? $NamaPanggilan : "");?>" placeholder="Nama Panggilan">
                  </div>
                </div>
                <!-- NRP -->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputNRP" style="text-align: left">NIM / NRP</label>
                  <div class="col-lg-10">
                    <input name="inputNRP" class="form-control" type="text" id="inputNRP" value="<?php echo ($NRP ? $NRP : "");?>" placeholder="Nomor Induk Mahasiswa" readonly>
                  </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputJenisKelamin" style="text-align: left">Jenis Kelamin <span style="color:red;">*</span></label>
                  <div class="col-lg-10">                                
                    <label class="radio">
                      <input name="inputJenisKelamin" type="radio" id="inputJenisKelamin" value="L" <?php echo ($JenisKelamin=='L' ? "checked" : "");?>>Laki-laki
                    </label>
                    <label class="radio">
                      <input name="inputJenisKelamin" type="radio" id="inputJenisKelamin" value="P" <?php echo ($JenisKelamin=='P' ? "checked" : "");?>>Perempuan
                    </label>
                  </div>
                </div>

                <!--Tempat Tanggal Lahir-->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputTTL" style="text-align: left">Tempat-Tanggal Lahir</label>
                  <div class="col-lg-10">
                    <input name="inputTempatLahir" style="width:110px;" class="span3" type="text" id="inputTempat" value="<?php echo ($TempatLahir ? $TempatLahir : "");?>" placeholder="Tempat Lahir"> - 
                    <input name="inputTanggalLahir" style="width:145px;" class="span3" type="date" id="inputTempat" value="<?php echo ($TanggalLahir ? $TanggalLahir : "");?>" placeholder="Tanggal Lahir">
                  </div>
                </div>

                <!--Nama PTN-->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputPTN" style="text-align: left">Perguruan Tinggi <span style="color:red;">*</span></label>
                  <div class="col-lg-10">
                    <select name="inputPTN">
                      <option <?php echo ($PTN=='ITS' ? "selected" : "");?>>ITS</option>
                      <option <?php echo ($PTN=='PENS' ? "selected" : "");?>>PENS</option>
                      <option <?php echo ($PTN=='PPNS' ? "selected" : "");?>>PPNS</option>
                    </select>
                  </div>
                </div>

                <!--Jurusan-->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputJurusan" style="text-align: left">Jurusan <span style="color:red;">*</span></label>
                  <div class="col-lg-10">
                    <select name="inputJurusan">
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
                  <label class="col-lg-2 col-lg-2 control-label" for="inputTahunMasuk" style="text-align: left">Tahun Masuk <span style="color:red;">*</span></label>
                  <div class="col-lg-10">
                    <select name="inputTahunMasuk">
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
                  <label class="col-lg-2 col-lg-2 control-label" for="inputAlamatAsal" style="text-align: left">Alamat Asal</label>
                  <div class="col-lg-10">
                    <textarea name="inputAlamatAsal" class="form-control" rows="4" id="inputAlamatAsal" placeholder="Alamat Asal" required><?php echo ($AlamatAsal ? $AlamatAsal : "");?></textarea>
                  </div>
                </div>

                <!--Alamat Sekarang-->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputAlamatSekarang" style="text-align: left">Alamat Sekarang</label>
                  <div class="col-lg-10">
                    <textarea name="inputAlamatSekarang" class="form-control" rows="4" id="inputAlamatSekarang" placeholder="Alamat Sekarang" required><?php echo ($AlamatSekarang ? $AlamatSekarang : "");?></textarea>
                  </div>
                </div>

                <!-- No HP -->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputNoHP" style="text-align: left">Nomor Handphone</label>
                  <div class="col-lg-10">
                    <div class="input-prepend">
                      <span class="add-on">+62</span>
                      <input name="inputNoHP" class="input-medium" class="span2" id="inputNoHP" type="text" value="<?php echo ($NoHP ? $NoHP : "");?>" placeholder="81234....." required>                                    
                    </div>
                  </div>
                </div>            
                <!-- Email -->
                <div class="form-group">
                  <label class="col-lg-2 col-lg-2 control-label" for="inputEmail" style="text-align: left">Email</label>
                  <div class="col-lg-10">
                    <input name="inputEmail" class="form-control" class="span3" type="email" id="inputEmail" value="<?php echo ($Email ? $Email : "");?>" placeholder="yourname@email.com" required>
                  </div>
                </div>  
              </div>
            </div>
          </div>

          <!--Informasi Lanjutan-->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI LANJUTAN
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <!-- MAPABA -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputMAPABA" style="text-align: left">MAPABA</label>
                  <div class="col-lg-10">
                    <input name="inputMAPABA" id="inputMAPABA" class="form-control" type="text" placeholder="Angkatan MAPABA" value="<?php echo ($MAPABA ? $MAPABA : "");?>">
                  </div>
                </div>

                <!-- SI -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputSI" style="text-align: left">Studi Intensif</label>
                  <div class="col-lg-10">
                    <input name="inputSI" id="inputSI" class="form-control" type="text" placeholder="Angkatan Studi Intensif" value="<?php echo ($SI ? $SI : "");?>">
                  </div>
                </div>

                <!-- PKD -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputPKD" style="text-align: left">Pelatihan Kader Dasar</label>
                  <div class="col-lg-10">
                    <input name="inputPKD" id="inputPKD" class="form-control" type="text" placeholder="Angkatan PKD" value="<?php echo ($PKD ? $PKD : "");?>">
                  </div>
                </div>

                <!-- Aktif Organisasi -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputAktifOrganisasi" style="text-align: left">Aktif Organisasi</label>
                  <div class="col-lg-10">
                    <textarea name="inputAktifOrganisasi" class="form-control" rows="4" id="inputAktifOrganisasi" placeholder="Aktif Organisasi"><?php echo ($Kesibukan ? $Kesibukan : "");?></textarea>
                  </div>
                </div>

                <!-- Bekerja -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputBekerja" style="text-align: left">Bekerja</label>
                  <div class="col-lg-10">
                    <textarea name="inputBekerja" class="form-control" rows="4" id="inputBekerja" placeholder="Bekerja"><?php echo ($TempatKerja ? $TempatKerja : "");?></textarea>
                  </div>
                </div>

                <!-- Hobby -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputHobi" style="text-align: left">Hobi</label>
                  <div class="col-lg-10">
                    <textarea name="inputHobi" class="form-control" rows="3" id="inputHobi" placeholder="Hobi"><?php echo ($Hobi ? $Hobi : "");?></textarea>
                  </div>
                </div>

                <!--Prestasi-->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputPrestasi" style="text-align: left">Prestasi</label>
                  <div class="col-lg-10">
                    <textarea name="inputPrestasi" class="form-control" rows="4" id="inputPrestasi" placeholder="Prestasi"><?php echo ($Prestasi ? $Prestasi : "");?></textarea>
                  </div>
                </div>

                <!-- Cita-cita -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputCita" style="text-align: left">Cita-cita</label>
                  <div class="col-lg-10">
                   <textarea name="inputCita" class="form-control" rows="3" id="inputCita" placeholder="Cita-cita"><?php echo ($Cita_Cita ? $Cita_Cita : "");?></textarea>
                 </div>
               </div>              
               <!-- Motto -->
               <div class="form-group">   
                <label class="col-lg-2 control-label" for="inputMotto" style="text-align: left">Motto</label>
                <div class="col-lg-10">
                  <textarea name="inputMotto" class="form-control" rows="3" id="inputMotto" placeholder="Motto"><?php echo ($Motto ? $Motto : "");?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Informasi Orang-Tua-->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI ORANG-TUA
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <!-- Nama Orang-Tua -->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="namaOrangTua" style="text-align: left">Nama Orang-Tua</label>
                <div class="col-lg-10">
                  <input name="inputNamaOrangTua" class="form-control" type="text" id="inputNamaOrangTua" value="<?php echo ($NamaOrtu ? $NamaOrtu : "");?>" placeholder="Nama Orang-Tua">
                </div>
              </div>

              <!--Pendidikan Terakhir-->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="pendidikanTerakhir" style="text-align: left">Pendidikan Terakhir</label>
                <div class="col-lg-10">
                  <input name="inputPendidikanTerakhir" class="form-control" type="text" id="inputPendidikanTerakhir" value="<?php echo ($PendidikanOrtu ? $PendidikanOrtu : "");?>" placeholder="Pendidikan Terakhir">
                </div>
              </div>  

              <!--Pekerjaan-->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="pekerjaan" style="text-align: left">Pekerjaan</label>
                <div class="col-lg-10">
                  <input name="inputPekerjaan" class="form-control" type="text" id="inputPekerjaan" value="<?php echo ($PekerjaanOrtu ? $PekerjaanOrtu : "");?>" placeholder="Pekerjaan">
                </div>
              </div>


              <!-- Kontak Ortu -->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="inputKontakOrtu" style="text-align: left">Kontak Ortu</label>
                <div class="col-lg-10">
                  <input name="inputKontakOrtu" class="form-control" type="text" id="inputKontakOrtu" value="<?php echo ($KontakOrtu ? $KontakOrtu : "");?>" placeholder="Kontak Bapak/Ibu">
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--Sosial Media-->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> SOSIAL MEDIA
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" id="myTab">
                  <li><a href="#blog"><img src="../assets2/img/logo-blog.png" width="70px" height="70px"></a></li>
                  <li class="active"><a href="#facebook"><img src="../assets2/img/logo-fb.png" width="70px" height="70px"></a></li>
                  <li><a href="#twitter"><img src="../assets2/img/logo-twitter.png" width="70px" height="70px"></a></li>
                  <li><a href="#instagram"><img src="../assets2/img/logo-instagram.png" width="70px" height="70px"></a></li>
                  <li><a href="#line"><img src="../assets2/img/logo-line.png" width="70px" height="70px"></a></li>

                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="blog">
                    <blockquote><h3>Blog/Website</h3></blockquote>
                    <div class="form-group">
                     <label class="col-lg-2 control-label" for="inputAlamatBlog">Alamat Website</label>
                     <div class="col-lg-10">
                      <input name="inputAlamatBlog" type="text" id="inputAlamatWebsite" placeholder="Alamat Blog/Website" value="<?php echo ($Blog ? $Blog : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane active" id="facebook">
                  <blockquote><h3>Facebook</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputLinkFB">Link Profil Facebook</label>
                    <div class="col-lg-10">
                      <input name="inputLinkFB" type="text" id="inputLinkFB" placeholder="(ex: www.facebook.com/jabiralhayyan)" value="<?php echo ($Facebook ? $Facebook : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="twitter">
                  <blockquote><h3>Twitter</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDTwitter">ID Twitter</label>
                    <div class="col-lg-10">
                      <input name="inputIDTwitter" type="text" id="inputIDTwitter" placeholder="(ex : @JabirHayyan)" value="<?php echo ($Twitter ? $Twitter : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="instagram">
                  <blockquote><h3>Instagram</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDInstagram">ID Instagram</label>
                    <div class="col-lg-10">
                      <input name="inputIDInstagram" type="text" id="inputIDInstagram" placeholder="(ex : jabiralhayyan)" value="<?php echo ($Instagram ? $Instagram : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="line">
                  <blockquote><h3>Line</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDLine">ID Line</label>
                    <div class="col-lg-10">
                      <input name="inputIDLine" type="text" id="inputIDLine" placeholder="(ex : jabiralhayyan)" value="<?php echo ($Line ? $Line : "");?>">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>

  <br>
  <center>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
  </center>
  </form>    
</div>
</div>
<div class="col-md-2"></div>


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
  <div id="footer">
    <div class="container">
      <div class="col-md-11">
        <center><h5 style="background-color: #e3e3e3">Copyright &copy; PMII Komisariat Sepuluh Nopember</h5></center>
      </div>
    </div>
  </div>

</body>
</html>
