<?php

class pilihadmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
				$notifikasi;
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				$this->load->view('view_admin/view_tentangadmin', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function notifikasi()
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
					$notifikasi;
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					$this->load->model('Admin');
					//Mendapatkan notifikasi login
					$notifikasi['notifikasilogin'] = $this->Admin->getNotificationLogin();
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					$notifikasi['notifikasi_all'] = $this->Admin->getAllNotification();

					$this->load->view('view_admin/view_notifikasi', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function dashboard()
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
					$notifikasi;
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					$this->load->model('Admin');
					//Mendapatkan notifikasi
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					//Mendapatkan notifikasi login
					$notifikasi['notifikasilogin'] = $this->Admin->getNotificationLogin();
					//Mendapatkan notifikasi logout
					$notifikasi['notifikasilogout'] = $this->Admin->getNotificationLogout();
					//Mendapatkan notifikasi update
					$notifikasi['notifikasiupdate'] = $this->Admin->getNotificationUpdate();
					//Mendapatkan notifikasi upload foto
					$notifikasi['notifikasiuploadfoto'] = $this->Admin->getNotificationUploadPhoto();
					//Mendapatkan notifikasi change password
					$notifikasi['notifikasiubahpassword'] = $this->Admin->getNotificationChangePassword();

					$this->load->view('view_admin/view_dashboard', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
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
					$notifikasi;
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					//notifikasi pesan
					$notifikasi['kirim_pesan_berhasil'] = $this->session->flashdata('kirim_pesan_berhasil');
					$notifikasi['hapus_kotak_masuk_berhasil'] = $this->session->flashdata('hapus_kotak_masuk_berhasil');
					$notifikasi['hapus_kotak_keluar_berhasil'] = $this->session->flashdata('hapus_kotak_keluar_berhasil');

					$this->load->model('Admin');
					$this->Admin->setNRP($nrp);
					//Mendapatkan notifikasi
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					//Mendapatkan kotak masuk
					$notifikasi['kotakmasuk'] = $this->Admin->getInboxMessage();
					$notifikasi['kotakkeluar'] = $this->Admin->getOutboxMessage();


					$this->load->view('view_admin/view_pesan', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
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
				
				$this->load->model('Admin');
				$this->Admin->setNRP($nrp);
				$this->Admin->setPenerima($this->input->post('inputPenerima'));
				$this->Admin->setPesan($this->input->post('inputPesan'));

				//$query = $this->Admin->getAllFromDatabase();

				$query = $this->Admin->sendMessage();
				
				$this->session->set_flashdata('kirim_pesan_berhasil','Anda berhasil mengirim pesan');
				$this->load->helper('url');
				redirect('pilihadmin/pesan','location');

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_hapuskotakmasuk($IdPesan)
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
				
				$this->load->model('Admin');
				$this->Admin->deleteInboxFromMessage($IdPesan);
				
				$this->session->set_flashdata('hapus_kotak_masuk_berhasil',"Anda berhasil menghapus kotak masuk dari $Penerima");
				
				$this->load->helper('url');
				redirect('pilihadmin/pesan','location');

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_hapuskotakkeluar($IdPesan)
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
				
				$this->load->model('Admin');
				$this->Admin->deleteOutboxFromMessage($IdPesan);
				
				$this->session->set_flashdata('hapus_kotak_keluar_berhasil',"Anda berhasil menghapus kotak keluar kepada $Penerima");
				
				$this->load->helper('url');
				redirect('pilihadmin/pesan','location');

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function profiladmin()
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
				
				$notifikasi;
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				
				$this->load->model('Admin');
				$this->Admin->setNRP($nrp);
				$query = $this->Admin->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['Nama'] = $row->Nama;
						$notifikasi['Alamat'] = $row->Alamat;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['Password'] = $row->Password;
						$notifikasi['LinkFoto'] = $row->LinkFoto;
					}
				}

				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();

				$this->load->view('view_admin/view_profiladmin', $notifikasi);

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_ubahprofiladmin()
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
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/profiladmin','location');
				}

				$this->load->model('Admin');
				$this->Admin->setNRP($nrp);
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				//$this->Admin->setLinkFoto($this->input->post('inputFoto'));
				
				
				$query = $this->Admin->updateProfilAdmin();
				
				$this->session->set_flashdata('ubah_data_berhasil','Anda berhasil mengubah data');
				$this->load->helper('url');
				redirect('home','location');

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function uploadfotoadmin()
		{
			$this->load->model('Admin');
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			//$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$this->Admin->setNRP($nrp);
			$data['link'] = $this->Admin->getFoto();
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;
				}
				else
				{
					$target_dir = realpath(__DIR__) . '/../../assets/profpic_admin/';
					$linkfoto = '../assets/profpic_admin/' . basename($_FILES["fileToUpload"]["name"]);
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
						$this->Admin->setNRP($nrp);
						$this->Admin->setLinkFoto($linkfoto);
						$this->Admin->setFoto();
						$data['link'] = $linkfoto;
					} else {
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
				$this->load->helper('url');
				redirect('pilihadmin/profiladmin',$data);
					//$this->load->view('view_profiladmin', $data);
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
				$this->load->helper('url');
				redirect('pilihadmin/profiladmin',$data);
					//$this->load->view('view_profiladmin', $data);
			}
		}
	}

	public function akunadmin()
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

			$notifikasi;
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap'); //menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				$notifikasi['data_user'] = $this->Admin->getSomeFromDatabase();
				$notifikasi['tambah_akun_admin_berhasil'] = $this->session->flashdata('tambah_akun_admin_berhasil');
				$notifikasi['ubah_data_berhasil'] = $this->session->flashdata('ubah_data_berhasil');
				$notifikasi['hapus_data_berhasil'] = $this->session->flashdata('hapus_data_berhasil');

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				
				$this->load->view('view_admin/crudadmin/view_tabeladmin', $notifikasi);
			}

			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}

		}

		public function tambahakunadmin()
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
				$notifikasi;
				//bukan pesan error
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//pesan error
				$notifikasi['nama_kosong'] = $this->session->flashdata('nama_kosong');
				$notifikasi['nrp_kosong'] = $this->session->flashdata('nrp_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['konfirmasi_password_kosong'] = $this->session->flashdata('konfirmasi_password_kosong');
				$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
				$notifikasi['password_dan_konfirmasi_password_tidak_sesuai'] = $this->session->flashdata('password_dan_konfirmasi_password_tidak_sesuai');
				
				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();

				$this->load->view('view_admin/crudadmin/view_tambahakunadmin',$notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_tambahakunadmin()
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
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakunadmin','location');
				}
				
				$this->load->model('Admin');
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setNRP($this->input->post('inputNRP'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				
				$query = $this->Admin->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('nrp_sudah_ada','nrp sudah ada! Silahkan masukkan nrp lain');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakunadmin','location');
				}
				
				$query = $this->Admin->addToDatabase();
				$this->session->set_flashdata('tambah_akun_admin_berhasil','Anda berhasil menambah satu akun admin');
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function ubahdataadmin($User)
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
				
				$notifikasi;
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto');//menampilkan nama lengkap admin

				$this->load->model('Admin');
				$this->Admin->setNRP($User);
				$query = $this->Admin->getAllFromDatabaseByNRP($User);
				
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
							//bukan pesan
						$notifikasi['Nama'] = $row->Nama;
						$notifikasi['Alamat'] = $row->Alamat;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['Password'] = $row->Password;
					}
				}
				
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();

				//$notifikasi['update']=$this->Admin->getAllFromDatabaseByNRP($User);
				$this->load->view('view_admin/crudadmin/view_updateadmin', $notifikasi);

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_ubahdataadmin()
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
				
				$User = $this->input->post('inputNRP');
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/ubahdataadminadmin','location');
				}
				
				$this->load->model('Admin');
				$this->Admin->setNRP($User);
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				$this->Admin->setLinkFoto($this->input->post('inputFoto'));
				
				
				$query = $this->Admin->updateDatabase();
				
				$this->session->set_flashdata('ubah_data_berhasil','Anda berhasil mengubah data');
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');

				$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_hapusdataadmin($user)
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
				$this->load->model('Admin');
				$this->Admin->deleteThatnrpFromDatabase($user);
				
				$this->session->set_flashdata('hapus_data_berhasil',"Anda berhasil menghapus akun dengan nrp $user");
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		
		

		public function tambahakun()
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
				
				$this->load->model('Admin');
				$this->load->model('JurusanPTN');

				$notifikasi;
				//bukan pesan
				$notifikasi['PTN'] = $this->JurusanPTN->getPTN(); //get PTN From Database
				$notifikasi['Jurusan'] = $this->JurusanPTN->getJurusan(); //get Jurusan From Database
				
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//pesan error
				$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
				$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
				$notifikasi['nama_ptn_kosong'] = $this->session->flashdata('nama_ptn_kosong');
				$notifikasi['tahun_masuk_kosong'] = $this->session->flashdata('tahun_masuk_kosong');
				$notifikasi['nrp_kosong'] = $this->session->flashdata('nrp_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
				$notifikasi['nama_ptn_tidak_terdaftar'] = $this->session->flashdata('nama_ptn_tidak_terdaftar');
				$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
				$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
				$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');

				//pesan berhasil
				$notifikasi['tambah_akun_berhasil'] = $this->session->flashdata('tambah_akun_berhasil');

				
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();

				$this->load->view('view_admin/view_tambahakun',$notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

/*
		public function select_jurusan()
		{
			
			$this->load->model('JurusanPTN');
			$this->input->post('InputPTN');
			$notifikasi;
			$notifikasi['Jurusan'] = $this->JurusanPTN->getJurusan($inputPTN);
			$this->load->view('view_admin/view_tambahakun',$notifikasi);
		}
*/
		public function do_tambahakun()
		{
			$this->load->model('Sahabat');
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			
			if ($nrp==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nrp[0]=='A')
			{
				
				if ($this->input->post('inputNamaLengkap')==''
					|| $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputPTN')==''
					|| $this->input->post('inputTahunMasuk')==''
					|| $this->input->post('inputNRP')==''
					|| $this->input->post('inputPassword')==''
					|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNamaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputPTN')=='') $this->session->set_flashdata('nama_ptn_kosong','Nama PTN harus diisi');
					if ($this->input->post('inputTahunMasuk')=='') $this->session->set_flashdata('tahun_masuk_kosong','Tahun Masuk harus diisi');
					if ($this->input->post('inputNRP')=='') $this->session->set_flashdata('nrp_kosong','nrp harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');

					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}

				if ($this->input->post('inputPTN')!='ITS'
					&& $this->input->post('inputPTN')!='PENS'
					&& $this->input->post('inputPTN')!='PPNS')
				{
					$this->session->set_flashdata('nama_ptn_tidak_terdaftar','Nama PTN tidak terdaftar');
					
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
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
					redirect('pilihadmin/tambahakun','location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
				
				$this->Sahabat->setNRP($this->input->post('inputNRP'));
				$query = $this->Sahabat->getnrpFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('nrp_sudah_ada','nrp sudah ada! Silahkan masukkan nrp lain');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
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
				$this->Sahabat->setNoHP($this->input->post('inputNoHP'));
				$this->Sahabat->setEmail($this->input->post('inputEmail'));
				
				$this->Sahabat->setMAPABA($this->input->post('inputMAPABA'));
				$this->Sahabat->setSI($this->input->post('inputSI'));
				$this->Sahabat->setPKD($this->input->post('inputPKD'));
				$this->Sahabat->setKesibukan($this->input->post('inputAktifOrganisasi'));
				$this->Sahabat->setTempatKerja($this->input->post('inputBekerja'));
				$this->Sahabat->setHobi($this->input->post('inputHobi'));
				$this->Sahabat->setPrestasi($this->input->post('inputPrestasi'));
				$this->Sahabat->setCita_Cita($this->input->post('inputCita'));
				$this->Sahabat->setMotto($this->input->post('inputMotto'));
				
				$this->Sahabat->setNamaOrtu($this->input->post('inputNamaOrangTua'));
				$this->Sahabat->setPendidikanOrtu($this->input->post('inputPendidikanTerakhir'));
				$this->Sahabat->setPekerjaanOrtu($this->input->post('inputPekerjaan'));
				$this->Sahabat->setKontakOrtu($this->input->post('inputKontakOrtu'));

				$this->Sahabat->setFacebook($this->input->post('inputLinkFB'));
				$this->Sahabat->setTwitter($this->input->post('inputIDTwitter'));
				$this->Sahabat->setBlog($this->input->post('inputAlamatBlog'));
				$this->Sahabat->setInstagram($this->input->post('inputIDInstagram'));
				$this->Sahabat->setLine($this->input->post('inputIDLine'));


				$this->Sahabat->setPassword($this->input->post('inputPassword'));
				
				$this->Sahabat->setLinkFoto($linkfoto);
				
				$query = $this->Sahabat->addToDatabase();
				$this->session->set_flashdata('tambah_akun_berhasil','Anda berhasil menambah satu akun sahabat');
				
				$this->load->helper('url');
				redirect('pilihadmin/tambahakun','location');
				//echo $this->input->post('inputTanggalLahir');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function caridatasahabat()
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
				$this->load->model('JurusanPTN');

				$notifikasi;
				//bukan pesan
				$data['PTN'] = $this->JurusanPTN->getPTN(); //get PTN From Database
				$data['Jurusan'] = $this->JurusanPTN->getJurusan(); //get Jurusan From Database

				$data['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$data['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//notifikasi
				$data['hapus_data_sahabat_berhasil'] = $this->session->flashdata('hapus_data_sahabat_berhasil');
				$data['update_data_sahabat_berhasil'] = $this->session->flashdata('update_data_sahabat_berhasil');

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$data['notifikasi'] = $this->Admin->getNotification();
				

				$this->load->model('Sahabat');
				$nama = $this->input->post('inputNama');
				$nrpsahabat = $this->input->post('inputNRP');
				$jurusan = $this->input->post('inputJurusan');
				$ptn = $this->input->post('inputPTN');

				$this->Sahabat->setNamaLengkap($nama);
				$this->Sahabat->setNRP($nrpsahabat);
				$this->Sahabat->setJurusan($jurusan);
				$this->Sahabat->setPTN($ptn);
				$data['debug'] = '';
				$this->load->library('session');
				$nrp = $this->session->userdata('nrp');
				
				
				//nama, nrp, jurusan, ptn dicari
				if($nama != '' && $nrpsahabat != '' && $jurusan[0] != '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(1);
				}

				//nama dicari
				else if($nama != '' && $nrpsahabat == '' && $jurusan[0] == '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(2);
				}
				//nrp dicari
				else if($nama == '' && $nrpsahabat != '' && $jurusan[0] == '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(3);
				}
				//jurusan dicari
				else if($nama == '' && $nrpsahabat == '' && $jurusan[0] != '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(4);
				}
				//ptn dicari
				else if($nama == '' && $nrpsahabat == '' && $jurusan[0] == '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(5);
				}
				
/*------------------------------------------------------------------------------------------------*/

				//nama dan nrp dicari
				else if($nama != '' && $nrpsahabat != '' && $jurusan[0] == '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(6);
				}
				//nama dan jurusan dicari
				else if($nama != '' && $nrpsahabat == '' && $jurusan[0] != '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(7);
				}
				//nama dan ptn dicari
				else if($nama != '' && $nrpsahabat == '' && $jurusan[0] == '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(8);
				}


				//nrp dan jurusan dicari
				else if($nama == '' && $nrpsahabat != '' && $jurusan[0] != '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(9);
				}
				//nrp dan ptn dicari
				else if($nama == '' && $nrpsahabat != '' && $jurusan[0] == '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(10);
				}


				//jurusan dan ptn dicari
				else if($nama == '' && $nrpsahabat == '' && $jurusan[0] != '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(11);
				}

/*------------------------------------------------------------------------------------------------*/
				
				//nama, nrp, dan jurusan dicari
				else if($nama != '' && $nrpsahabat != '' && $jurusan[0] != '-' && $ptn[0] == '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(12);
				}
				//nama, nrp, dan ptn dicari
				else if($nama != '' && $nrpsahabat != '' && $jurusan[0] == '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(13);
				}
				//nama, jurusan, dan ptn dicari
				else if($nama != '' && $nrpsahabat == '' && $jurusan[0] != '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(14);
				}
				//nrp, jurusan, dan ptn dicari
				else if($nama == '' && $nrpsahabat != '' && $jurusan[0] != '-' && $ptn[0] != '-')
				{
					$data['query'] = $this->Sahabat->searchMhs(15);
				}


				$data['NamaLengkap'] = $this->session->userdata('namalengkap');
				$data['NamaCari'] = $nama;
				$data['NRPCari'] = $nrpsahabat;
				$data['PTNCari'] = $ptn;
				$data['JurusanCari'] = $jurusan;
				$data['status'] = 0;
				
				if ($nrp==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if($nrp[0]=='A' && $nama == '' && $nrpsahabat == '' && ($ptn == '' || $ptn == '-')  && ($jurusan == '' || $jurusan == '-'))
				{
					$data['status'] = 0;
					$this->load->view('view_admin/view_caridatasahabat', $data);
				}
				else if($nrp[0]=='A' && $data['query']->num_rows()>0)
				{
					$data['status'] = 1;
					$this->load->view('view_admin/view_caridatasahabat', $data);
				}
				else 
				{
					//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$data['status'] = 2;
					$this->load->view('view_admin/view_caridatasahabat', $data);
					//$this->load->helper('url');
					//redirect('home','location');
				}
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		
		public function updatedatasahabat($user)
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
				$notifikasi;
				//bukan pesn error
				$notifikasi['NamaLengkapAdmin'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();

				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($user);
				$query = $this->Sahabat->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['NRP'] = $row->NRP;
						$notifikasi['Password'] = $row->Password;
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						//$notifikasi['NamaLengkapAtas'] = $this->session->userdata('namalengkap');
						$notifikasi['NamaPanggilan'] = $row->NamaPanggilan;
						$notifikasi['JenisKelamin'] = $row->JenisKelamin;
						$notifikasi['TempatLahir'] = $row->TempatLahir;
						$notifikasi['TanggalLahir'] = $row->TanggalLahir;
						$notifikasi['PTN'] = $row->PTN;
						$notifikasi['TahunMasuk'] = $row->TahunMasuk;
						$notifikasi['Jurusan'] = $row->Jurusan;
						$notifikasi['AlamatAsal'] = $row->AlamatAsal;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Instagram'] = $row->Instagram;
						$notifikasi['Line'] = $row->Line;
						$notifikasi['Blog'] = $row->Blog;
						$notifikasi['Email'] = $row->Email;
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
						$notifikasi['LinkFoto'] = $row->LinkFoto;
						//pesan error
						$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
						$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
						$notifikasi['nama_ptn_kosong'] = $this->session->flashdata('nama_ptn_kosong');
						$notifikasi['tahun_masuk_kosong'] = $this->session->flashdata('tahun_masuk_kosong');
						$notifikasi['nrp_kosong'] = $this->session->flashdata('nrp_kosong');
						$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
						$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
						$notifikasi['nama_ptn_tidak_terdaftar'] = $this->session->flashdata('nama_ptn_tidak_terdaftar');
						$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
						$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
						$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');

						//pesan error foto
						$notifikasi['file_fotoprofil'] = $this->session->flashdata('file_fotoprofil');
						$notifikasi['nama_fotoprofil'] = $this->session->flashdata('nama_fotoprofil');
						$notifikasi['ukuran_fotoprofil'] = $this->session->flashdata('ukuran_fotoprofil');
						$notifikasi['format_fotoprofil'] = $this->session->flashdata('format_fotoprofil');
						$notifikasi['error_fotoprofil'] = $this->session->flashdata('error_fotoprofil');
					}
				}
				$this->load->view('view_admin/view_updatedatasahabat', $notifikasi);
			}
			else
			{
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_updatedatasahabat()
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
				if ($this->input->post('inputNamaLengkap')==''
					|| $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputPTN')==''
					|| $this->input->post('inputTahunMasuk')==''
					|| $this->input->post('inputNRP')==''
					|| $this->input->post('inputPassword')=='')
					//|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNamaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputPTN')=='') $this->session->set_flashdata('nama_ptn_kosong','Nama PTN harus diisi');
					if ($this->input->post('inputTahunMasuk')=='') $this->session->set_flashdata('tahun_masuk_kosong','Tahun Masuk harus diisi');
					if ($this->input->post('inputNRP')=='') $this->session->set_flashdata('nrp_kosong','nrp harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					//if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');

					$this->load->helper('url');
					$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
				
				if ($this->input->post('inputPTN')!='ITS'
					&& $this->input->post('inputPTN')!='PENS'
					&& $this->input->post('inputPTN')!='PPNS')
				{
					$this->session->set_flashdata('nama_ptn_tidak_terdaftar','Nama PTN tidak terdaftar');
					
					$this->load->helper('url');
					$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
				
				


				/*
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
					$alamat = $this->input->post('alamatnrpTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatnrpTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatnrpTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
				*/
				
				$this->load->model('Sahabat');
				//upload foto
				$data['NamaLengkap'] = $this->session->userdata('namalengkap');
				$this->Sahabat->setNRP($nrp);
				$data['link'] = $this->Sahabat->getFoto();


				$target_dir = realpath(__DIR__) . '/../../assets2/profpic/';
				$linkfoto = '../assets2/profpic/' . basename($_FILES["fileToUpload"]["name"]);
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;

					//kalau kosong akan diupload sesuai dengan nama link foto database
					//$linkfoto = '../assets2/profpic/' . basename($_FILES["fileToUpload"]["name"]);

					//$LinkFoto = $this->input->post('LinkFoto');
					$uploadOk = 1;
					$foto = $this->input->post('fotoProfil');
					//$this->Sahabat->setLinkFoto($this->input->post($foto));

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk != 0) {
						//if (move_uploaded_file($_FILES["fotoProfil"]["tmp_name"], $target_file)) {
									//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
							$data['status'] = 1;
							$this->Sahabat->setNRP($nrp);
							$this->Sahabat->setLinkFoto($foto);
							$this->Sahabat->setFoto();
							$data['link'] = $foto;
						} 
						/*
						else {
									//echo "Sorry, there was an error uploading your file.";
							$this->session->set_flashdata('error_fotoprofil','Maaf, terdapat error saat penguplodan');
							$data['status'] = 2;
							$alamat = $this->input->post('alamatNRPTujuan');
							redirect("pilihadmin/updatedatasahabat/$alamat",'location');
						}
						*/
				}
				
				else{

				
				if($check != false) {
						//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				}
				else {
						//echo "File is not an image.";
					$this->session->set_flashdata('file_fotoprofil','Maaf, File bukan image');
					$uploadOk = 0;
					$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}
					// Check if file already exists
				if (file_exists($target_file)) {
						//echo "Sorry, file already exists.";
					$this->session->set_flashdata('nama_fotoprofil','Nama file foto sudah ada');
					$uploadOk = 0;
					$data['status'] = 2;
					$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}

					// Check file size
				if ($_FILES["fileToUpload"]["size"] > 350000) {
						//echo "Sorry, your file is too large.";
					$this->session->set_flashdata('ukuran_fotoprofil','Ukuran max foto 300 kB');
					$uploadOk = 0;
					$data['status'] = 4;
					$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
				}

					// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$this->session->set_flashdata('format_fotoprofil','Foto profil harus jpg|png|jpeg|gif');
				$uploadOk = 0;
				$data['status'] = 5;
				$alamat = $this->input->post('alamatNRPTujuan');
					redirect("pilihadmin/updatedatasahabat/$alamat",'location');
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
					} else {
								//echo "Sorry, there was an error uploading your file.";
						$this->session->set_flashdata('error_fotoprofil','Maaf, terdapat error saat penguplodan');
						$data['status'] = 2;
						$alamat = $this->input->post('alamatNRPTujuan');
						redirect("pilihadmin/updatedatasahabat/$alamat",'location');
					}
				}
			}

				//end upload foto


						$this->Sahabat->setNRP($this->input->post('inputNRP'));
						$this->Sahabat->setPassword($this->input->post('inputPassword'));
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
						$this->Sahabat->setInstagram($this->input->post('inputIDInstagram'));
						$this->Sahabat->setLine($this->input->post('inputIDLine'));
						$this->Sahabat->setBlog($this->input->post('inputAlamatBlog'));
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
						
						$query = $this->Sahabat->updateDatabaseFromAdmin();
						$this->session->set_flashdata('update_data_sahabat_berhasil',"Anda berhasil mengubah data sahabat");
						$this->load->helper('url');
						redirect('pilihadmin/caridatasahabat','location');
			}
			else
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
}


public function hapusdatasahabat($user)
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
		$this->load->model('Sahabat');
		$this->Sahabat->deleteThatnrpFromDatabase($user);

		$this->session->set_flashdata('hapus_data_sahabat_berhasil',"Anda berhasil menghapus akun sahabat dengan nrp $user");

		$this->load->helper('url');
		redirect('pilihadmin/caridatasahabat','location');
	}
	else 
	{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
		$this->load->helper('url');
		redirect('home','location');
	}
}



}

