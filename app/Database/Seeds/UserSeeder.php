<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'dimasreza',
			'useremail' => 'dimasrezanugraha@gmail.com',
			'userpassword' => password_hash('admin', PASSWORD_DEFAULT),
		]);
	}
}
