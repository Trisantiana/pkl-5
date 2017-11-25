<?php 

require __DIR__ . '/vendor/autoload.php';

use App\Models\User;

$user = new User;

var_dump($user->login('tes', 'coba'));