<?php

	class home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$notifikasi;
				//pesan gagal
				$notifikasi['nrp_kosong'] = $this->session->flashdata('nrp_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['nrp_password_salah'] = $this->session->flashdata('nrp_password_salah');
				$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');
				$notifikasi['nrp_sudah_ada'] = $this->session->flashdata('nrp_sudah_ada');
				
				//pesan berhasil
				$notifikasi['logout_berhasil'] = $this->session->flashdata('logout_berhasil');
				$notifikasi['registrasi_berhasil'] = $this->session->flashdata('registrasi_berhasil');

				$this->load->view('view_login',$notifikasi);
			}
			else if ($nrp[0]=='A') 
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				$notifikasi['FotoProfil'] = $this->session->userdata('foto');
				//pesan berhasil
				$notifikasi['tambah_akun_admin_berhasil'] = $this->session->flashdata('tambah_akun_admin_berhasil');
				$notifikasi['tambah_akun_berhasil'] = $this->session->flashdata('tambah_akun_berhasil');
				$notifikasi['hapus_data_sahabat_berhasil'] = $this->session->flashdata('hapus_data_sahabat_berhasil');
				$notifikasi['ganti_data_sahabat_berhasil'] = $this->session->flashdata('ganti_data_sahabat_berhasil');
				$notifikasi['ubah_data_berhasil'] = $this->session->flashdata('ubah_data_berhasil');
				

				//Total Sahabat, Laki2, Perempuan
				$this->load->model('Admin');
				$query = $this->Admin->getCountUsers();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalSahabat'] = $row->TotalSahabat;
					}
				}
				$query = $this->Admin->getCountMaleUser();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalLakiLaki'] = $row->TotalLakiLaki;
					}
				}
				$query = $this->Admin->getCountFemaleUser();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalPerempuan'] = $row->TotalPerempuan;
					}
				}
				
				//Total Sahabat di ITS
				$query = $this->Admin->getCountITS();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalITS'] = $row->TotalITS;
					}
				}
				$query = $this->Admin->getCountPENS();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalPENS'] = $row->TotalPENS;
					}
				}
				$query = $this->Admin->getCountPPNS();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['TotalPPNS'] = $row->TotalPPNS;
					}
				}

				//Mendapatkan notifikasi login
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				
				$this->load->view('view_admin/view_berandaadmin',$notifikasi);
			}
			else 
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				//pesan berhasil
				$notifikasi['ubah_data_pribadi_berhasil'] = $this->session->flashdata('ubah_data_pribadi_berhasil');
				$notifikasi['ubah_password_berhasil'] = $this->session->flashdata('ubah_password_berhasil');
				
				$this->load->view('view_sahabat/view_beranda',$notifikasi);
			}
		}

		function register()
		{
					if ($this->input->post('inputPTN')!='ITS'
				    && $this->input->post('inputPTN')!='PENS'
					&& $this->input->post('inputPTN')!='PPNS')
				{
					$this->session->set_flashdata('nama_ptn_tidak_terdaftar','Nama PTN tidak terdaftar');
					
					$this->load->helper('url');
					redirect('home','location');
				}

				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('home','location');
				}
				
				$this->load->model('Sahabat');
				$this->Sahabat->setNRP($this->input->post('inputnrp'));
				$query = $this->Sahabat->getnrpFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('nrp_sudah_ada','nrp sudah ada! Silahkan masukkan nrp lain');
					$this->load->helper('url');
					redirect('home','location');
				}
				
				$this->Sahabat->setNamaLengkap($this->input->post('inputNamaLengkap'));
				$this->Sahabat->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Sahabat->setPTN($this->input->post('inputPTN'));
				$this->Sahabat->setJurusan($this->input->post('inputJurusan'));
				$this->Sahabat->setTahunMasuk($this->input->post('inputTahunMasuk'));
				$this->Sahabat->setNoHP($this->input->post('inputNoHP'));
				$this->Sahabat->setEmail($this->input->post('inputEmail'));
				$this->Sahabat->setPassword($this->input->post('inputPassword'));
				
				
				$query = $this->Sahabat->addToDatabase();
				$this->session->set_flashdata('registrasi_berhasil','Anda telah berhasil registrasi, Silahkan login !');
				$this->load->helper('url');
				redirect('home','location');
				//$this->load->view('view_login');

		}

		function sign_in()
		{			
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');
			if ($nrp==false)
			{
				$nrp = $this->input->post('nrp');
				$password = $this->input->post('password');
				if ($nrp=='' || $password=='')
				{
					if ($nrp=='') $this->session->set_flashdata('nrp_kosong','Maaf! Bagian nrp harus diisi');
					if ($password=='') $this->session->set_flashdata('password_kosong','Maaf! Bagian password harus diisi');
					//header('location : ../home');
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($nrp[0]=='A')
				{
					$this->load->model('Admin');
					$this->Admin->setNRP($nrp);
					$this->Admin->setPassword($password);

					
					$query = $this->Admin->getFromDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'nrp' => $row->NRP,
										'namalengkap' => $row->Nama,
										'foto' => $row->LinkFoto
											);
							$this->session->set_userdata($newdata);
						}
						
						//notifikasi login
						//$query = $this->Admin->setNotificationLogin();
						
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						$this->session->set_flashdata('nrp_password_salah','Maaf! nrp atau password anda salah');
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}


					
				}
				else
				{
					$this->load->model('Sahabat');
					$this->Sahabat->setNRP($nrp);
					$this->Sahabat->setPassword($password);
					$query = $this->Sahabat->getFromDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'nrp' => $row->NRP,
										'namalengkap' => $row->NamaLengkap,
										'tahunmasuk' => $row->TahunMasuk
											);
							$this->session->set_userdata($newdata);
						}

						//notifikasi login
						$query = $this->Sahabat->setNotificationLogin();
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						$this->session->set_flashdata('nrp_password_salah','Maaf! nrp atau password anda salah');
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
				}
			}
			else if ($nrp[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
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


		function sign_out()
		{
			
			$this->load->library('session');
			$nrp = $this->session->userdata('nrp');

			//Notifikasi SignOut Masih diperbaiki
			$this->load->model('Sahabat');
			$this->Sahabat->setNRP($nrp);
			$query = $this->Sahabat->setNotificationLogout();

			$this->session->unset_userdata('nrp');

			$this->session->set_flashdata('logout_berhasil','Anda berhasil logout');

			//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
			$this->load->helper('url');
			redirect('home','location');
		
		}
	}
