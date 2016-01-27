<?php

	class pilihsahabat extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function profil()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
			
				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				$query = $this->Sahabat->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['PTN'] = $row->PTN;
						$notifikasi['Jurusan'] = $row->Jurusan;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Email'] = $row->Email;
						$notifikasi['Blog'] = $row->Blog;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Instagram'] = $row->Instagram;
						$notifikasi['Line'] = $row->Line;
						
						$notifikasi['MAPABA'] = $row->MAPABA;
						$notifikasi['SI'] = $row->SI;
						$notifikasi['PKD'] = $row->PKD;

						$notifikasi['LinkFoto'] = $row->LinkFoto;
						$notifikasi['Kesibukan'] = $row->Kesibukan;
						$notifikasi['TempatKerja'] = $row->TempatKerja;
						$notifikasi['Hobi'] = $row->Hobi;
						$notifikasi['Cita_Cita'] = $row->Cita_Cita; 
						$notifikasi['Motto'] = $row->Motto;
						
						$notifikasi['Prestasi'] = $row->Prestasi;
						
						$notifikasi['NamaOrtu'] = $row->NamaOrtu;
						$notifikasi['PendidikanOrtu'] = $row->PendidikanOrtu;
						$notifikasi['PekerjaanOrtu'] = $row->PekerjaanOrtu;
						$notifikasi['KontakOrtu'] = $row->KontakOrtu;
					}
				}
				$this->load->view('view_sahabat/view_profil', $notifikasi);
			}
		}

		public function pesan()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');

				//notifikasi pesan
				$notifikasi['kirim_pesan_berhasil'] = $this->session->flashdata('kirim_pesan_berhasil');

				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				//Mendapatkan kotak masuk
				$notifikasi['kotakmasuk'] = $this->Sahabat->getInboxMessage();
				//Mendapatkan kotak keluar
				$notifikasi['kotakkeluar'] = $this->Sahabat->getOutboxMessage();
				
				$this->load->view('view_sahabat/view_pesan', $notifikasi);
			}
		}

		public function do_pesan()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');

				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				//Mendapatkan kotak masuk
				$this->Sahabat->setPenerima($this->input->post('inputPenerima'));
				$this->Sahabat->setPesan($this->input->post('inputPesan'));

				$query = $this->Sahabat->sendMessage();
				
				$this->session->set_flashdata('kirim_pesan_berhasil','Anda berhasil mengirim pesan');
				$this->load->helper('url');
				redirect('pilihsahabat/pesan','location');
				
			}
		}

		public function tentang()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				
				$this->load->view('view_sahabat/view_tentang', $notifikasi);
			}
		}
		
		public function ubahpassword()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
			
				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				$query = $this->Sahabat->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['Password'] = $row->Password;
						
						//pesan error
						$notifikasi['nrp_kosong'] = $this->session->flashdata('nrp_kosong');
						$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
						$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
						$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
						$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');
					}
				}
				$this->load->view('view_sahabat/view_ubahpassword', $notifikasi);
			}

		}

		public function ubahdatapribadi()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				$query = $this->Sahabat->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						$notifikasi['NamaPanggilan'] = $row->NamaPanggilan;
						$notifikasi['JenisKelamin'] = $row->JenisKelamin;
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['TempatLahir'] = $row->TempatLahir;
						$notifikasi['TanggalLahir'] = $row->TanggalLahir;
						$notifikasi['PTN'] = $row->PTN;
						$notifikasi['Jurusan'] = $row->Jurusan;
						$notifikasi['TahunMasuk'] = $row->TahunMasuk;
						$notifikasi['AlamatAsal'] = $row->AlamatAsal;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Blog'] = $row->Blog;
						$notifikasi['Email'] = $row->Email;
						$notifikasi['Instagram'] = $row->Instagram;
						$notifikasi['Line'] = $row->Line;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['MAPABA'] = $row->MAPABA;
						$notifikasi['SI'] = $row->SI;
						$notifikasi['PKD'] = $row->PKD;
						$notifikasi['Hobi'] = $row->Hobi;
						$notifikasi['Cita_Cita'] = $row->Cita_Cita; 
						$notifikasi['Motto'] = $row->Motto;
						$notifikasi['Prestasi'] = $row->Prestasi;
						$notifikasi['TempatKerja'] = $row->TempatKerja;
						$notifikasi['Kesibukan'] = $row->Kesibukan;
						$notifikasi['NamaOrtu'] = $row->NamaOrtu;
						$notifikasi['PendidikanOrtu'] = $row->PendidikanOrtu;
						$notifikasi['PekerjaanOrtu'] = $row->PekerjaanOrtu;
						$notifikasi['KontakOrtu'] = $row->KontakOrtu;
						//pesan error
						$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
						$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
						$notifikasi['nama_ptn_kosong'] = $this->session->flashdata('nama_ptn_kosong');
						$notifikasi['tahun_lulus_kosong'] = $this->session->flashdata('tahun_lulus_kosong');
						$notifikasi['nama_ptn_tidak_terdaftar'] = $this->session->flashdata('nama_ptn_tidak_terdaftar');
						$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
						
					}
				}
				$this->load->view('view_sahabat/view_ubahdatapribadi', $notifikasi);
			}
		}
		
		public function uploadfoto()
		{
			$this->load->model('Sahabat');
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$this->Sahabat->setNRP($nrp);
			$data['link'] = $this->Sahabat->getFoto();
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;
				}
				else
				{
					$target_dir = realpath(__DIR__) . '/../../assets2/profpic/';
					$linkfoto = '../assets2/profpic/' . basename($_FILES["fileToUpload"]["name"]);
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						//echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						//echo "File is not an image.";
						$uploadOk = 0;
					}
					// Check if file already exists
					if (file_exists($target_file)) {
						//echo "Sorry, file already exists.";
						$uploadOk = 0;
						$data['status'] = 2;
					}
					
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 350000) {
						//echo "Sorry, your file is too large.";
						$uploadOk = 0;
						$data['status'] = 4;
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
						$data['status'] = 5;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk != 0) {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
							$data['status'] = 1;
							$this->Sahabat->setNRP($nrp);
							$this->Sahabat->setLinkFoto($linkfoto);
							$this->Sahabat->setFoto();
							$data['link'] = $linkfoto;

							//Set Notifikasi Upload Foto
							$query = $this->Sahabat->setNotificationUploadPhoto();
						} 
						else {
							//echo "Sorry, there was an error uploading your file.";
							$data['status'] = 2;
						}
					}
				}
				if ($nrp==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else
				{
					$this->load->view('view_sahabat/view_uploadfoto', $data);
				}
			}
			else
			{
				$data['status'] = 0;
				if ($nrp==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else
				{
					$this->load->view('view_sahabat/view_uploadfoto', $data);
				}
			}
		}
		public function carisahabat()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				
				$this->load->model('Sahabat');
				$nama = $this->input->post('inputNama');
				
				$this->Sahabat->setNamaLengkap($nama);

				$data['NamaLengkap'] = $this->session->userdata('namalengkap');
				if($nama != '')
				{	
					$data['query'] = $this->Sahabat->searchMhs(2);
				}
				$data['nama'] = $nama;
				$data['status'] = 0;
				if ($nrp==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($nama != '' && $data['query']->num_rows() > 0 )
				{
					$data['status'] = 1;
					$this->load->view('view_sahabat/view_carisahabat', $data);
				}
				else
				{
					$data['status'] = 2;
					$this->load->view('view_sahabat/view_carisahabat', $data);
				}
				
				//$this->load->view('view_sahabat/view_carisahabat');

			}
		}

		public function do_ubahpassword()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp'); //nrp lama
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
			else 
			{
				if ($this->input->post('inputNRP')==''
					|| $this->input->post('inputPassword')==''
					|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNRP')=='') $this->session->set_flashdata('nrp_kosong','nrp harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');

					$this->load->helper('url');
					redirect('pilihsahabat/ubahpassword','location');
				}

				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihsahabat/ubahpassword','location');
				}

				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($this->input->post('inputNRP'));
				$this->Sahabat->setPassword($this->input->post('inputPassword'));

				$query = $this->Sahabat->changePassword();
				$this->session->set_flashdata('ubah_password_berhasil','Anda berhasil mengubah password pribadi anda');

				//Set Notifikasi Change Password
				$query = $this->Sahabat->setNotificationChangePassword();

				$this->load->helper('url');
				redirect('home','location');
			}
		}


		public function do_ubahdatapribadi()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
			else 
			{
				if ($this->input->post('inputNamaLengkap')==''
				    || $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputPTN')==''
					|| $this->input->post('inputTahunMasuk')=='')
					//|| $this->input->post('inputNRP')==''
					//|| $this->input->post('inputPassword')==''
					//|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNamaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputPTN')=='') $this->session->set_flashdata('nama_ptn_kosong','Nama PTN harus diisi');
					if ($this->input->post('inputTahunMasuk')=='') $this->session->set_flashdata('tahun_masuk_kosong','Tahun Masuk harus diisi');
					//if ($this->input->post('inputNRP')=='') $this->session->set_flashdata('nrp_kosong','NRP harus diisi');
					//if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					//if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');
				
					$this->load->helper('url');
					redirect('pilihsahabat/ubahdatapribadi','location');
				}
				
				if ($this->input->post('inputPTN')!='ITS'
				    && $this->input->post('inputPTN')!='PENS'
					&& $this->input->post('inputPTN')!='PPNS')
				{
					$this->session->set_flashdata('nama_ptn_tidak_terdaftar','Nama PTN tidak terdaftar');
					
					$this->load->helper('url');
					redirect('pilihsahabat/ubahdatapribadi','location');
				}
				
				$apakah_email_sah = false;
				$posisi_at;
				$banyak_at = 0;
				$panjang = strlen($this->input->post('inputEmail'));
				for ($i=0;$i<$panjang;$i++)
				{
					if ($this->input->post('inputEmail')[$i]=='@')
					{
						$posisi_at = $i;
						$banyak_at++;
						if ($banyak_at>1) break;
					}
				}
				if ($posisi_at==0)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihsahabat/ubahdatapribadi','location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihsahabat/ubahdatapribadi','location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihsahabat/ubahdatapribadi','location');
				}
				
				//if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				//{
				//	$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
				//	$this->load->helper('url');
				//	redirect('pilihsahabat/ubahdatapribadi','location');
				//}
				
				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($nrp);
				//$this->Sahabat->setPassword($this->input->post('inputPassword'));
				$this->Sahabat->setNamaLengkap($this->input->post('inputNamaLengkap'));
				$this->Sahabat->setNamaPanggilan($this->input->post('inputNamaPanggilan'));
				$this->Sahabat->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Sahabat->setTempatLahir($this->input->post('inputTempatLahir'));
				$this->Sahabat->setTanggalLahir($this->input->post('inputTanggalLahir'));
				$this->Sahabat->setPTN($this->input->post('inputPTN'));
				$this->Sahabat->setTahunMasuk($this->input->post('inputTahunMasuk'));
				$this->Sahabat->setJurusan($this->input->post('inputJurusan'));
				$this->Sahabat->setAlamatAsal($this->input->post('inputAlamatAsal'));
				$this->Sahabat->setAlamatSekarang($this->input->post('inputAlamatSekarang'));
				$this->Sahabat->setFacebook($this->input->post('inputLinkFB'));
				$this->Sahabat->setTwitter($this->input->post('inputIDTwitter'));
				$this->Sahabat->setBlog($this->input->post('inputAlamatBlog'));
				$this->Sahabat->setInstagram($this->input->post('inputIDInstagram'));
				$this->Sahabat->setLine($this->input->post('inputIDLine'));
				$this->Sahabat->setEmail($this->input->post('inputEmail'));
				$this->Sahabat->setNoHP($this->input->post('inputNoHP'));
				$this->Sahabat->setMAPABA($this->input->post('inputMAPABA'));
				$this->Sahabat->setSI($this->input->post('inputSI'));
				$this->Sahabat->setPKD($this->input->post('inputPKD'));
				$this->Sahabat->setHobi($this->input->post('inputHobi'));
				$this->Sahabat->setCita_Cita($this->input->post('inputCita'));
				$this->Sahabat->setMotto($this->input->post('inputMotto'));
				$this->Sahabat->setPrestasi($this->input->post('inputPrestasi'));
				$this->Sahabat->setTempatKerja($this->input->post('inputBekerja'));
				$this->Sahabat->setKesibukan($this->input->post('inputAktifOrganisasi'));
				$this->Sahabat->setNamaOrtu($this->input->post('inputNamaOrangTua'));
				$this->Sahabat->setPendidikanOrtu($this->input->post('inputPendidikanTerakhir'));
				$this->Sahabat->setPekerjaanOrtu($this->input->post('inputPekerjaan'));
				$this->Sahabat->setKontakOrtu($this->input->post('inputKontakOrtu'));
				
				$query = $this->Sahabat->updateDatabaseFromSahabat();
				$this->session->set_flashdata('ubah_data_pribadi_berhasil','Anda berhasil mengubah data pribadi anda');
				
				//Notifikasi Update
				$query = $this->Sahabat->setNotificationUpdate();

				$this->load->helper('url');
				redirect('home','location');
		}
	}
}
