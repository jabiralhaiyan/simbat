<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | SIMBAT</title>

    <!-- Bootstrap core CSS -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    
    <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/icheck/flat/green.css" rel="stylesheet">
     
     <!--favicon kemenkeu-->
     <link rel="shortcut icon" href="assets/ico/logo-pmiiits.png" sizes="20x20">

 </head>

 <body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>


        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <center>
                        <h2 style="font-size: 40px;">SIMBAT</h2>
                        <h3> Sistem Informasi Manajemen Sahabat</h2>
                        </center>
                        
                        <!--Login Form-->
                        
                        <form method="post" action="home/sign_in">
                            <h1>Login Form</h1>
                            
                            <?php
                            if ($nrp_password_salah) 
                                echo "<p style='background-color:#ff6666 ; color:white'>" . $nrp_password_salah . "</p>";
                            if ($logout_berhasil) 
                                echo "<p style='background-color:#66cc66 ; color:white'>" . $logout_berhasil . "</p>";
                            if ($registrasi_berhasil)
                                echo "<p style='background-color:#66cc66 ; color:white'>" . $registrasi_berhasil . "</p>";
                            if ($password_dan_ulangi_password_tidak_sama)
                                echo "<p style='background-color:#ff6666 ; color:white'>" . $password_dan_ulangi_password_tidak_sama . "</p>";
                            if ($nrp_sudah_ada)
                                echo "<p style='background-color:#ff6666 ; color:white'>" . $nrp_sudah_ada . "</p>";
                            
                            ?>
                            <div>
                                <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Nomor Induk Mahasiswa" value="<?php echo set_value('nrp') ;?>"  required="" />
                            </div>
                            
                            <div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ;?>" required="" />
                            </div>

                            <div>
                                <input class="btn btn-default submit" type="submit" name="submit" id="submit" value="Login" >
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>


                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Jika belum mempunyai akun silahkan
                                <a href="#toregister" class="to_register"> <b style="color:blue;font-size:14px;">REGISTRASI</b> </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <p>Jika terdapat masalah silahkan kontak kami di <bold><a href="mailto:contact@pmii1011.or.id" target="_blank">contact@pmii1011.or.id</a></bold></p>
                            <div>
                                <h1><img src="assets/images/logo-pmiiits.png" width="60px" height="60px"> SIMBAT</h1>
                                <p>©2015 All Rights Reserved. PMII Sepuluh Nopember. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>

                    <!-- form -->
                </section>
                <!-- content -->
            </div>

            <!--Register Form-->
            <div id="register" class="animate form">
                <section class="login_content">
                    <center>
                        <h2 style="font-size: 40px;">SIMBAT</h2>
                        <h3> Sistem Informasi Manajemen Sahabat</h2>
                        </center>
                        <form action="home/register" method="post">
                            <h1>Register</h1>
                            
                            <p>(*) Data Wajib Diisi</p>
                            <div>
                                <label class="left">Nama Lengkap<span class="required">* </span>
                                </label>
                                <input class="form-control" type="text" name="inputNamaLengkap" id="inputNamaLengkap" 
                                placeholder="Nama Lengkap" required="required" >
                            </div>

                            <div>
                                <label class="left">NIM / NRP<span class="required">* </span>
                                </label>
                                <input class="form-control" type="text" name="inputNRP" id="inputNRP" 
                                placeholder="Nomor Induk Mahasiswa" required="required" >
                            </div>

                            <div>
                                <label class="left">Jenis Kelamin *:</label>
                                <p>
                                    Laki-Laki:
                                    <input type="radio" class="flat" name="inputJenisKelamin" id="inputJenisKelamin" value="L" checked="" required /> 
                                    Perempuan:
                                    <input type="radio" class="flat" name="inputJenisKelamin" id="inputJenisKelamin" value="P" />
                                </p>
                            </div>
                            
                            <div>
                                <label class="left">Perguruan Tinggi<span class="required">*</span></label>
                                <select class="form-control" name="inputPTN" required="required" >
                                    <option>--Pilih PTN--</option>
                                    <?php foreach ($PTN->result() as $row){ ?>
                                        <option><?php echo $row->PTN ;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <br>

                            <div>
                             <label class="left">Jurusan<span class="required">*</span></label>
                             <select class="form-control" name="inputJurusan" required="required">
                                <option>--Pilih Jurusan--</option>
                                <?php foreach ($Jurusan->result() as $row){ ?>
                                    <option><?php echo $row->Jurusan ;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <br>

                            <div>
                                <label class="left">Tahun Masuk<span class="required">*</span></label>
                                <input type="text" name="inputTahunMasuk" class="form-control" placeholder="Tahun Masuk" required="required" />
                            </div>

                        <div>
                            <label class="left">No. HP<span class="required">*</span></label>
                            <input name="inputNoHP" class="form-control" id="inputNoHP" type="text" value="" placeholder="+6281234....." required="required">
                        </div>
                        
                        <div>
                            <label class="left">Email<span class="required">*</span></label>
                            <input type="email" name="inputEmail" class="form-control" placeholder="youremail@email.com" required="required" />
                        </div>

                        <div>
                         <label class="left">Password<span class="required">*</span></label>
                         <input type="password" name="inputPassword" class="form-control" placeholder="Password" required="required"
                         />
                     </div>

                     <div>
                         <label class="left">Ulangi Password<span class="required">*</span></label>
                         <input type="password" name="inputUlangiPassword" class="form-control" placeholder="Ulangi Password" required="required" 
                         />
                     </div>


                     <div>
                        <input class="btn btn-default submit" type="submit" name="submit" id="submit" value="submit">
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">Jika sudah punya akun, Silahkan
                            <a href="#tologin" class="to_register"><b style="color:blue;font-size:14px;">LOG IN</b></a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><img src="assets/images/logo-pmiiits.png" width="60px" height="60px"> SIMBAT</h1>
                            <p>©2015 All Rights Reserved. PMII Sepuluh Nopember. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>
</div>

     <!-- Le javascript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap-transition.js"></script>
     <script src="assets/js/bootstrap-alert.js"></script>
     <script src="assets/js/bootstrap-modal.js"></script>
     <script src="assets/js/bootstrap-dropdown.js"></script>
     <script src="assets/js/bootstrap-scrollspy.js"></script>
     <script src="assets/js/bootstrap-tab.js"></script>
     <script src="assets/js/bootstrap-tooltip.js"></script>
     <script src="assets/js/bootstrap-popover.js"></script>
     <script src="assets/js/bootstrap-button.js"></script>
     <script src="assets/js/bootstrap-collapse.js"></script>
     <script src="assets/js/bootstrap-carousel.js"></script>
     <script src="assets/js/bootstrap-typeahead.js"></script>

</body>

</html>