<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
            'username' => 'Yoga',
			'useremail' => 'yoga@gmail.com',
			'userpassword' => password_hash('yoga', PASSWORD_DEFAULT),
        ]);
    }
}
