<?php 

namespace App\Models;

use App\Interfaces\Kendaraan;

class Motor implements Kendaraan
{
	public function hidupkanMesin()
	{
		return 'mesin hidup';
	}
	public function matikanMesin()
	{
		return 'mesin mati';
	}
}