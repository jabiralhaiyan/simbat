<?php
	class Sahabat extends CI_Model
	{
		private $NRP;
		private $Password;
		private $NamaLengkap;
		private $NamaPanggilan;
		private $JenisKelamin;
		private $TempatLahir;
		private $TanggalLahir;
		private $PTN;
		private $Jurusan;
		private $TahunMasuk;
		private $AlamatAsal;
		private $AlamatSekarang;
		private $Blog;
		private $Facebook;
		private $Twitter;
		private $Instagram;
		private $Line;
		private $Email;
		private $NoHP;
		private $MAPABA;
		private $SI;
		private $PKD;
		private $Hobi;
		private $Cita_Cita;
		private $Motto;
		private $Prestasi;
		private $TempatKerja;
		private $Kesibukan;
		private $NamaOrtu;
		private $PendidikanOrtu;
		private $PekerjaanOrtu;
		private $KontakOrtu;
		private $LinkFoto;
		//private $TanggalUpdate;
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function setNRP($NRP)
		{
			$this->NRP = $NRP;
		}
		public function setPassword($Password)
		{
			$this->Password = $Password;
		}
		public function setNamaLengkap($NamaLengkap)
		{
			$this->NamaLengkap = $NamaLengkap;
		}
		public function setNamaPanggilan($NamaPanggilan)
		{
			$this->NamaPanggilan = $NamaPanggilan;
		}
		public function setJenisKelamin($JenisKelamin)
		{
			$this->JenisKelamin = $JenisKelamin;
		}
		public function setTempatLahir($TempatLahir)
		{
			$this->TempatLahir = $TempatLahir;
		}
		public function setTanggalLahir($TanggalLahir)
		{
			$this->TanggalLahir = $TanggalLahir;
		}
		public function setPTN($PTN)
		{
			$this->PTN = $PTN;
		}
		public function setJurusan($Jurusan)
		{
			$this->Jurusan = $Jurusan;
		}
		public function setTahunMasuk($TahunMasuk)
		{
			$this->TahunMasuk = $TahunMasuk;
		}
		public function setAlamatAsal($AlamatAsal)
		{
			$this->AlamatAsal = $AlamatAsal;
		}
		public function setAlamatSekarang($AlamatSekarang)
		{
			$this->AlamatSekarang = $AlamatSekarang;
		}
		public function setBlog($Blog)
		{
			$this->Blog = $Blog;
		}
		public function setFacebook($Facebook)
		{
			$this->Facebook = $Facebook;
		}
		public function setTwitter($Twitter)
		{
			$this->Twitter = $Twitter;
		}
		public function setInstagram($Instagram)
		{
			$this->Instagram = $Instagram;
		}
		public function setLine($Line)
		{
			$this->Line = $Line;
		}
		public function setEmail($Email)
		{
			$this->Email = $Email;
		}
		public function setNoHP($NoHP)
		{
			$this->NoHP = $NoHP;
		}
		public function setMAPABA($MAPABA)
		{
			$this->MAPABA = $MAPABA;
		}
		public function setSI($SI)
		{
			$this->SI = $SI;
		}
		public function setPKD($PKD)
		{
			$this->PKD = $PKD;
		}
		public function setHobi($Hobi)
		{
			$this->Hobi = $Hobi;
		}
		public function setCita_Cita($Cita_Cita)
		{
			$this->Cita_Cita = $Cita_Cita;
		}
		public function setMotto($Motto)
		{
			$this->Motto = $Motto;
		}
		public function setPrestasi($Prestasi)
		{
			$this->Prestasi = $Prestasi;
		}
		public function setTempatKerja($TempatKerja)
		{
			$this->TempatKerja = $TempatKerja;
		}
		public function setKesibukan($Kesibukan)
		{
			$this->Kesibukan = $Kesibukan;
		}
		public function setNamaOrtu($NamaOrtu)
		{
			$this->NamaOrtu = $NamaOrtu;
		}
		public function setPendidikanOrtu($PendidikanOrtu)
		{
			$this->PendidikanOrtu = $PendidikanOrtu;
		}
		public function setPekerjaanOrtu($PekerjaanOrtu)
		{
			$this->PekerjaanOrtu = $PekerjaanOrtu;
		}
		public function setKontakOrtu($KontakOrtu)
		{
			$this->KontakOrtu = $KontakOrtu;
		}
		public function setLinkFoto($LinkFoto)
		{
			$this->LinkFoto = $LinkFoto;
		}
		/*public function setTanggalUpdate($TanggalUpdate)
		{
			$this->TanggalUpdate = $TanggalUpdate;
		}*/
		public function setPenerima($Penerima)
		{
			$this->Penerima = $Penerima;
		}
		public function setPesan($Pesan)
		{
			$this->Pesan = $Pesan;
		}

/*--------------------------------------------------------------------------*/		
		//Notifikasi Last Login
		public function setNotificationLogin()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO notifikasi (Nama, TahunMasuk, PTN, LinkFoto, User, Notifikasi, Waktu, Tanggal)
				SELECT sahabat.NamaLengkap, sahabat.TahunMasuk, sahabat.PTN, sahabat.LinkFoto, 'Sahabat' ,'Telah Login', NOW(), NOW() 
				FROM Sahabat
				WHERE sahabat.NRP='$this->NRP'
			");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Logout
		public function setNotificationLogout()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO notifikasi (Nama, TahunMasuk, PTN, LinkFoto, User, Notifikasi, Waktu, Tanggal)
				SELECT sahabat.NamaLengkap, sahabat.TahunMasuk, sahabat.PTN, sahabat.LinkFoto, 'Sahabat' ,'Telah Logout', NOW(), NOW() 
				FROM Sahabat
				WHERE sahabat.NRP='$this->NRP'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Update Data
		public function setNotificationUpdate()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO notifikasi (Nama, TahunMasuk, PTN, LinkFoto, User, Notifikasi, Waktu, Tanggal)
				SELECT sahabat.NamaLengkap, sahabat.TahunMasuk, sahabat.PTN, sahabat.LinkFoto, 'Sahabat' ,'Telah Update Data', NOW(), NOW() 
				FROM Sahabat
				WHERE sahabat.NRP='$this->NRP'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Upload Foto
		public function setNotificationUploadPhoto()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO notifikasi (Nama, TahunMasuk, PTN, LinkFoto, User, Notifikasi, Waktu, Tanggal)
				SELECT sahabat.NamaLengkap, sahabat.TahunMasuk, sahabat.PTN, sahabat.LinkFoto, 'Sahabat' ,'Telah Ganti Foto', NOW(), NOW() 
				FROM Sahabat
				WHERE sahabat.NRP='$this->NRP'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Change Password
		public function setNotificationChangePassword()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO notifikasi (Nama, TahunMasuk, PTN, LinkFoto, User, Notifikasi, Waktu, Tanggal)
				SELECT sahabat.NamaLengkap, sahabat.TahunMasuk, sahabat.PTN, sahabat.LinkFoto, 'Sahabat' ,'Telah Ganti Password', NOW(), NOW() 
				FROM Sahabat
				WHERE sahabat.NRP='$this->NRP'
				");
			$this->db->close();
			return $query;
		}
/*--------------------------------------------------------------*/
	
	//Pesan
	public function sendMessage()
	{
		$this->load->database();
		$query = $this->db->query
		("
			INSERT INTO pesan (Pengirim, Penerima, Pesan, Waktu)
			VALUES
			(						
				'$this->NRP',
				'$this->Penerima',
				'$this->Pesan',
				NOW()
				)							
		");
		$this->db->close();
		return $query;
	}

	//Kotak Masuk
	public function getInboxMessage()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT pesan.IdPesan, pesan.Pengirim, pesan.Pesan, pesan.Waktu
			FROM pesan
			WHERE pesan.Penerima = '$this->NRP'
			ORDER BY pesan.Waktu
			DESC LIMIT 10
		");
		$this->db->close();
		return $query;
	}

	//Kotak Keluar
	public function getOutboxMessage()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT pesan.IdPesan, pesan.Penerima, pesan.Pesan , pesan.Waktu
			FROM pesan, admin
			WHERE pesan.Penerima = admin.NRP 
									AND pesan.Pengirim='$this->NRP' 
			ORDER BY pesan.Waktu
			DESC LIMIT 10
		");
		$this->db->close();
		return $query;
	}

/*-----------------------------------------------------------------*/
	
		public function getFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, TahunMasuk, LinkFoto
						FROM Sahabat
						WHERE 
							NRP = '$this->NRP' AND
							Password = '$this->Password'	
					");
			$this->db->close();
			return $query;
		}

		public function addToDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						INSERT INTO Sahabat 
						
						VALUES
						(
							'$this->NRP',
							'$this->Password',
							'$this->NamaLengkap',
							'$this->NamaPanggilan',
							'$this->JenisKelamin',
							'$this->TempatLahir',
							STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							'$this->PTN',
							'$this->TahunMasuk',
							'$this->Jurusan',
							'$this->AlamatAsal',
							'$this->AlamatSekarang',
							'$this->Facebook',
							'$this->Twitter',
							'$this->Blog',
							'$this->Instagram',
							'$this->Line',
							'$this->Email',
							'$this->NoHP',
							'$this->MAPABA',
							'$this->SI',
							'$this->PKD',
							'$this->Hobi',
							'$this->Cita_Cita',
							'$this->Motto',
							'$this->Prestasi',
							'$this->TempatKerja',
							'$this->Kesibukan',
							'$this->NamaOrtu',
							'$this->PendidikanOrtu',
							'$this->PekerjaanOrtu',
							'$this->KontakOrtu',
							'$this->LinkFoto',
							NOW()
						)
					");
			$this->db->close();
			return $query;
		}


		public function updateDatabaseFromAdmin()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Sahabat
						SET
							NRP = '$this->NRP',
							Password = '$this->Password',
							NamaLengkap = '$this->NamaLengkap',
							NamaPanggilan = '$this->NamaPanggilan',
							JenisKelamin = '$this->JenisKelamin',
							TempatLahir = '$this->TempatLahir',
							TanggalLahir = STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							PTN = '$this->PTN',
							TahunMasuk = '$this->TahunMasuk',
							Jurusan = '$this->Jurusan',
							AlamatAsal = '$this->AlamatAsal',
							AlamatSekarang = '$this->AlamatSekarang',
							Facebook = '$this->Facebook',
							Twitter = '$this->Twitter',
							Blog = '$this->Blog',
							Instagram = '$this->Instagram',
							Line = '$this->Line',
							Email = '$this->Email',
							NoHP = '$this->NoHP',
							MAPABA = '$this->MAPABA',
							SI = '$this->SI',
							PKD = '$this->PKD',
							Hobi = '$this->Hobi',
							Cita_Cita = '$this->Cita_Cita',
							Motto = '$this->Motto',
							Prestasi = '$this->Prestasi',
							TempatKerja = '$this->TempatKerja',
							Kesibukan = '$this->Kesibukan',
							NamaOrtu = '$this->NamaOrtu',
							PendidikanOrtu = '$this->PendidikanOrtu',
							PekerjaanOrtu = '$this->PekerjaanOrtu',
							KontakOrtu = '$this->KontakOrtu',
							LinkFoto = '$this->LinkFoto',
							TanggalUpdate = NOW()
						WHERE
							NRP = '$this->NRP'
					");
			$this->db->close();
			return $query;
		}

		public function updateDatabaseFromSahabat()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Sahabat
						SET
							NamaLengkap = '$this->NamaLengkap',
							NamaPanggilan = '$this->NamaPanggilan',
							JenisKelamin = '$this->JenisKelamin',
							TempatLahir = '$this->TempatLahir',
							TanggalLahir = STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							PTN = '$this->PTN',
							TahunMasuk = '$this->TahunMasuk',
							Jurusan = '$this->Jurusan',
							AlamatAsal = '$this->AlamatAsal',
							AlamatSekarang = '$this->AlamatSekarang',
							Facebook = '$this->Facebook',
							Twitter = '$this->Twitter',
							Blog = '$this->Blog',
							Instagram = '$this->Instagram',
							Line = '$this->Line',
							Email = '$this->Email',
							NoHP = '$this->NoHP',
							MAPABA = '$this->MAPABA',
							SI = '$this->SI',
							PKD = '$this->PKD',
							Hobi = '$this->Hobi',
							Cita_Cita = '$this->Cita_Cita',
							Motto = '$this->Motto',
							Prestasi = '$this->Prestasi',
							TempatKerja = '$this->TempatKerja',
							Kesibukan = '$this->Kesibukan',
							NamaOrtu = '$this->NamaOrtu',
							PendidikanOrtu = '$this->PendidikanOrtu',
							PekerjaanOrtu = '$this->PekerjaanOrtu',
							KontakOrtu = '$this->KontakOrtu',
							TanggalUpdate = NOW()
						WHERE
							NRP = '$this->NRP'
					");
			$this->db->close();
			return $query;
		}

		public function changePassword()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Sahabat
						SET
							NRP = '$this->NRP',
							Password = '$this->Password'
						WHERE
							NRP = '$this->NRP'
					");
			$this->db->close();
			return $query;
		}

		public function getAllFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT *
						FROM Sahabat
						WHERE 
							NRP = '$this->NRP'	
					");
			$this->db->close();
			return $query;
		}
		public function getFoto()
		{
			$link = '';
			$this->load->database();
			$query = $this->db->query
					("
						SELECT LinkFoto
						FROM Sahabat
						WHERE 
							NRP = '$this->NRP'	
					");
			$this->db->close();
			foreach($query->result() as $row):
				$link = $row->LinkFoto;
			endforeach;
			return $link;
		}
		public function setFoto()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Sahabat
						SET LinkFoto = '$this->LinkFoto'
						WHERE 
							NRP = '$this->NRP'	
					");
			$this->db->close();
			return $query;
		}
		public function getNRPFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT NRP
						FROM Sahabat
						WHERE 
							NRP = '$this->NRP'	
					");
			$this->db->close();
			return $query;
		}
		public function deleteThatNRPFromDatabase($NRP)
		{
			$this->NRP = $NRP;
			$this->load->database();
			$query = $this->db->query
					("
						DELETE FROM Sahabat
						WHERE 
							NRP = '$this->NRP'	
					");
			$this->db->close();
			return $query;
		}
		
		public function searchMhs($status)
		{
			$this->load->database();
			
			//nama, nrp, jurusan, ptn dicari
			if($status == 1)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							NRP = '$this->NRP' AND
							Jurusan = '$this->Jurusan' AND
							PTN = '$this->PTN'

					");
			}

			//nama dicari
			else if($status == 2)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk, LinkFoto, Facebook, Twitter,  Instagram, Line, Blog, Email
						FROM Sahabat
						WHERE 
							NamaLengkap Like '%$this->NamaLengkap%'
					");
			}

			//nrp dicari
			else if($status == 3)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE 
							NRP = '$this->NRP'
					");
			}

			//jurusan dicari
			else if($status == 4)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE 
							Jurusan = '$this->Jurusan'
					");
			}

			//PTN dicari
			else if($status == 5)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE 
							PTN = '$this->PTN'
					");
			}

			/*---------------------------------------------------------------------------------------*/
			
			//nama dan nrp dicari
			else if($status == 6)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							NRP = '$this->NRP'
					");
			}
			
			//nama dan jurusan dicari
			else if($status == 7)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Jurusan = '$this->Jurusan'
					");
			}

			//nama dan ptn dicari
			else if($status == 8)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							PTN = '$this->PTN'
					");
			}

			//nrp dan jurusan dicari
			else if($status == 9)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NRP = '$this->NRP' AND
							Jurusan = '$this->Jurusan'
					");
			}

			//nrp dan ptn dicari
			else if($status == 10)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NRP = '$this->NRP' AND
							PTN = '$this->PTN'
					");
			}

			//jurusan dan ptn dicari
			else if($status == 11)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE Jurusan = '$this->Jurusan' AND
							PTN = '$this->PTN'
					");
			}

			/*---------------------------------------------------------------------------------------*/
			
			//nama, nrp, dan jurusan dicari
			else if($status == 12)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND 
							NRP = '$this->NRP' AND
							Jurusan = '$this->Jurusan'
					");
			}
			
			//nama, nrp, dan ptn dicari
			else if($status == 13)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND 
							NRP = '$this->NRP' AND
							PTN = '$this->PTN'
					");
			}

			//nama, jurusan, dan ptn dicari
			else if($status == 14)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND 
							Jurusan = '$this->Jurusan' AND
							PTN = '$this->PTN'
					");
			}			

			//nrp, jurusan, dan ptn dicari
			else if($status == 15)
			{
				$query = $this->db->query
					("
						SELECT NRP, NamaLengkap, PTN, Jurusan, AlamatSekarang, NoHP, Email, TahunMasuk
						FROM Sahabat
						WHERE NRP = '$this->NRP' AND 
							Jurusan = '$this->Jurusan' AND
							PTN = '$this->PTN'
					");
			}

			$this->db->close();
			return $query;
		}

	}
