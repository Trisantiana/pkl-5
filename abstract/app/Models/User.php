<?php 

namespace App\Models;

use App\Interfaces\UserInterface;
use App\Traits\Authentication;

class User implements UserInterface
{
	use Authentication;
	
	public function getAll()
	{
		return 'sukses';
	}
}