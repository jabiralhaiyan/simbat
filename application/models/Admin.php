<?php

class Admin extends CI_Model
{

	private $Nama;
	private $Alamat;
	private $NoHP;
	private $NRP;
	private $Password;
	private $LinkFoto;

	public function __construct()
	{
		parent::__construct();
	}
	public function setNRP($NRP)
	{
		$this->NRP = $NRP;
	}
	public function setPassword($Password)
	{
		$this->Password = $Password;
	}
	public function setNamaLengkap($Nama)
	{
		$this->Nama = $Nama;
	}
	public function setAlamat($Alamat)
	{
		$this->Alamat = $Alamat;
	}
	public function setNoHP($NoHP)
	{
		$this->NoHP = $NoHP;
	}
	public function setLinkFoto($LinkFoto)
	{
		$this->LinkFoto = $LinkFoto;
	}
	public function setPenerima($Penerima)
	{
		$this->Penerima = $Penerima;
	}
	public function setPesan($Pesan)
	{
		$this->Pesan = $Pesan;
	}

	
	//Get Log Notifikasi
	public function getNotificationLogin()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat' AND Notifikasi='Telah Login' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}

	public function getNotificationLogout()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat' AND Notifikasi='Telah Logout' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}

	public function getNotificationUpdate()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat' AND Notifikasi='Telah Update Data' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}

	public function getNotificationUploadPhoto()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat' AND Notifikasi='Telah Ganti Foto' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}

	public function getNotificationChangePassword()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat' AND Notifikasi='Telah Ganti Password' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}

	public function getNotification()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat'
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
		");
		$this->db->close();
		return $query;
	}
	
	public function getAllNotification()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT * FROM notifikasi
			WHERE User='Sahabat'
		");
		$this->db->close();
		return $query;
	}
/*-----------------------------------------------------------------*/

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
			SELECT pesan.IdPesan, pesan.Pengirim, pesan.Pesan, admin.LinkFoto as LinkFotoAdmin, sahabat.LinkFoto as LinkFotoSahabat, pesan.Waktu
			FROM pesan, sahabat, admin
			WHERE pesan.Pengirim = sahabat.NRP 
									AND pesan.Penerima=admin.NRP 
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
			SELECT pesan.IdPesan, pesan.Penerima, pesan.Pesan, admin.LinkFoto as LinkFotoAdmin, pesan.Waktu
			FROM pesan, sahabat, admin
			WHERE pesan.Penerima = sahabat.NRP 
									AND pesan.Pengirim=admin.NRP 
			ORDER BY pesan.Waktu
			DESC LIMIT 10
		");
		$this->db->close();
		return $query;
	}

	//delete inbox
	public function deleteInboxFromMessage($IdPesan)
	{
		$this->IdPesan = $IdPesan;
		$this->load->database();
		$query = $this->db->query
		("
			DELETE FROM pesan
			WHERE
			pesan.IdPesan = '$this->IdPesan'
			");
		$this->db->close();
		return ;
	}

	//delete outbox
	public function deleteOutboxFromMessage($IdPesan)
	{
		$this->IdPesan = $IdPesan;
		$this->load->database();
		$query = $this->db->query
		("
			DELETE FROM pesan
			WHERE
			pesan.IdPesan = '$this->IdPesan'
			");
		$this->db->close();
		return ;
	}
/*-----------------------------------------------------------------*/	
	public function getFromDatabase()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT NRP, Nama, LinkFoto
			FROM admin
			WHERE 
			NRP = '$this->NRP' AND
			Password = '$this->Password'
			");
		$this->db->close();
		return $query;
	}

	public function getSomeFromDatabase()
	{
		$this->load->database();
		$query = $this->db->query
		("
			SELECT Nama, Alamat, NoHP, NRP
			FROM Admin
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
			FROM Admin
			WHERE 
			NRP = '$this->NRP'	
			");
		$this->db->close();
		return $query;
	}

	public function getAllFromDatabaseByNRP($NRP)
	{
		//$this->NRP = $NRP;
		$this->load->database();
		$query = $this->db->query
		("
			SELECT *
			FROM Admin
			WHERE 
			NRP = '$NRP'	
			");
		$this->db->close();
		return $query;
	}

	public function addToDatabase()
	{
		$this->load->database();
		$query = $this->db->query
		("
			INSERT INTO Admin (NRP, Password, Nama, Alamat, NoHP)
			VALUES
			(						
				'$this->NRP',
				'$this->Password',
				'$this->Nama',
				'$this->Alamat',
				'$this->NoHP'
				)							
		");
		$this->db->close();
		return $query;
	}
	
	public function updateDatabase()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE Admin
			SET 
			Nama = '$this->Nama',
			Alamat = '$this->Alamat',
			NoHP = '$this->NoHP',
			Password = '$this->Password'
			
			WHERE 
			NRP = '$this->NRP'	
			");
		$this->db->close();
		return $query;
	}

	//LinkFoto = '$this->LinkFoto'
	public function updateProfilAdmin()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE Admin
			SET 
			Nama = '$this->Nama',
			Alamat = '$this->Alamat',
			NoHP = '$this->NoHP',
			Password = '$this->Password'
			
			WHERE 
			NRP = '$this->NRP'
			");
		$this->db->close();
		return $query;
	}

	public function getFoto()
	{
		$link = ' ';
		$this->load->database();
		$query = $this->db->query
		("
			SELECT LinkFoto
			FROM Admin
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
			UPDATE Admin
			SET LinkFoto = '$this->LinkFoto'
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
			DELETE FROM Admin
			WHERE
			NRP = '$this->NRP'
			");
		$this->db->close();
		return ;
	}

//Counting Dashboard Beranda
	public function getCountUsers()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT  COUNT(*) as TotalSahabat 
						FROM sahabat	
					");
			$this->db->close();
			return $query;
		}

		//Jumlah Laki-Laki
		public function getCountMaleUser()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT COUNT(JenisKelamin) as TotalLakiLaki
						FROM sahabat
						WHERE JenisKelamin='L'

					");
			$this->db->close();
			return $query;
		}

		//Jumlah Perempuan
		public function getCountFemaleUser()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT COUNT(JenisKelamin) as TotalPerempuan
						FROM sahabat
						WHERE JenisKelamin='P'
					");
			$this->db->close();
			return $query;
		}

		//Jumlah PTN ITS
		public function getCountITS()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT COUNT(PTN) as TotalITS
						FROM sahabat
						WHERE PTN='ITS'
					");
			$this->db->close();
			return $query;
		}

		//Jumlah PTN PENS
		public function getCountPENS()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT COUNT(PTN) as TotalPENS
						FROM sahabat
						WHERE PTN='PENS'
					");
			$this->db->close();
			return $query;
		}

		//Jumlah PTN PPNS
		public function getCountPPNS()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT COUNT(PTN) as TotalPPNS
						FROM sahabat
						WHERE PTN='PPNS'
					");
			$this->db->close();
			return $query;
		}

//end counting dashboard
}

