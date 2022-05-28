<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function getDetailPasien($id) {
		$query = "SELECT * FROM pasien WHERE id='$id'";
		return $this->execute($query);
	}

	function createPasien($data) {
		$query = "INSERT INTO pasien VALUES (null, '" . $data->getNik() . "', '" . $data->getNama() . "', '" . $data->getTempat() . "', '" . $data->getTl() . "', '" . $data->getGender() . "', '" . $data->getEmail() . "', '" . $data->getTelp() . "')";
		return $this->execute($query);
	}

	function updatePasien($data) {
		$query = "UPDATE pasien SET nik='" . $data->getNik() . "', nama='" . $data->getNama() . "', tempat='" . $data->getTempat() . "', tl='" . $data->getTl() . "', gender='" . $data->getGender() . "', email='" . $data->getEmail() . "', telp='" . $data->getTelp() . "' WHERE id='" . $data->getId() . "'";
		return $this->execute($query);
	}
	
	function deletePasien($id) {
		$query = "DELETE FROM pasien WHERE id='$id'";
		return $this->execute($query);
	}
}
