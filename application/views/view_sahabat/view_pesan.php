<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesan | SIMBAT</title>

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
                <li class="active"><a href="../pilihsahabat/pesan"> <i class="fa fa-envelope"> </i> PESAN</a></li>
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
	 
      <!-- Begin page content -->
      <div class="container">
        <div class="well" style="max-width: 600px; margin: 0 auto 10px;">
          <div class="accordion" id="accordion" style="background-color: white">
            
          <!--Tulis Pesan-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TulisPesan">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Tulis Pesan
                </a>
              </div>
              <div id="TulisPesan" class="accordion-body collapse">
                <div class="accordion-inner">
                <form class="form-horizontal" action="../pilihsahabat/do_pesan" method="post">
                    <div class="form-group">
                      <label class="control-label" for="inputPenerima">Kirim ke</label>
                      <input class="form-control" type="text" id="inputPenerima" name="inputPenerima" value="A001" readonly>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputPesan">Pesan</label>
                      <textarea class="form-control" rows="5" id="inputPesan" name="inputPesan" placeholder="Kirimkan pesan, kritik atau saran Anda :)"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <!--Kotak Masuk-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Inbox">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Kotak Masuk
                </a>
              </div>
              <div id="Inbox" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <div class="thumbnail" style="background-color: white; border: 0px">
                    <div class="caption">
                      <h3>Kotak Masuk (Inbox)</h3>
                      <table class="table table-striped table-hover">
                        <tr>
                          <th style="font-size:12px; width: 80px;">Dari</th>
                          <th style="font-size:12px;">Pesan</th>
                          <th style="font-size:12px; width: 120px;">Waktu</th>
                        </tr>
                        
                        <?php foreach ($kotakmasuk->result() as $row){ ?>

                        <tr   data-toggle="modal" data-target="#myModal<?php echo $row->IdPesan; ?>">
                          <td style="font-size:12px;"><?php echo $row->Pengirim; ?></td>
                          <td style="font-size:12px;"><?php echo (SUBSTR($row->Pesan, 0, 30)).'...'; ?></td>
                          <td style="font-size:12px;"><?php echo $row->Waktu; ?></td>
                        </tr>

                        
                        <div id="myModal<?php echo $row->IdPesan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Lihat Pesan Masuk</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label class="control-label" for="pengirim"><b>Dari</b></label>
                                <input class="form-control" id="pengirim" type="text" value="Admin" disabled>
                              </div>
                              <div class="form-group">
                                <label class="control-label" for="pesan"><b>Pesan</b></label>
                                  <textarea class="form-control" id="pesan" disabled><?php echo $row->Pesan; ?></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <center>
                                <button class="btn btn-large btn-block btn-primary" class="close" data-dismiss="modal">OK</button>
                              </center>
                            </div>
                          </div>
                          </div>
                        </div>
                        
                        <?php } ?>

                        </table>           
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Kotak Keluar-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Outbox">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Kotak Keluar
                </a>
              </div>
              <div id="Outbox" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="thumbnail" style="background-color: white; border: 0px">
                    <div class="caption">
                      <h3>Kotak Keluar (Outbox)</h3>
                      <table class="table table-striped table-hover">
                        <tr>
                          <th style="font-size:12px; width: 80px;">Kepada</th>
                          <th style="font-size:12px;">Pesan</th>
                          <th style="font-size:12px; width: 120px;">Waktu</th>
                        </tr>
                        
                        <?php foreach ($kotakkeluar->result() as $row){ ?>
                        
                        <tr   data-toggle="modal" data-target="#myModal<?php echo $row->IdPesan; ?>">
                          <td style="font-size:12px;"><?php echo $row->Penerima; ?></td>
                          <td style="font-size:12px;"><?php echo (SUBSTR($row->Pesan, 0, 30)).'...'; ?></td>
                          <td style="font-size:12px;"><?php echo $row->Waktu; ?></td>
                        </tr>

                        
                        <div id="myModal<?php echo $row->IdPesan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Lihat Pesan Keluar</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label class="control-label" for="pengirim"><b>Kepada</b></label>
                                <input class="form-control" id="pengirim" type="text" value="Admin" disabled>
                              </div>
                              <div class="form-group">
                                <label class="control-label" for="pesan"><b>Pesan</b></label>
                                  <textarea class="form-control" id="pesan" disabled><?php echo $row->Pesan; ?></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <center>
                                <button class="btn btn-large btn-block btn-primary" class="close" data-dismiss="modal">OK</button>
                              </center>
                          </div>
                          </div>
                          </div>
                        </div>

                        <?php } ?>

                        </table>           
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

			
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


<?php

if ($kirim_pesan_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $kirim_pesan_berhasil . '"' . ");
}
</script>";

?>

   
  </body>
</html>
