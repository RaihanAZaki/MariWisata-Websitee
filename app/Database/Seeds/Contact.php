<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contact extends Seeder
{
    public function run()
    {
        // membuat data
		$contact_data = [
			[
				'name' => 'Ini tes seeder contact',
				'slug'  => 'ini-tes-seeder-contact',
				'email'  => 'Tes@mail.com',
				'telp'  => '0812123123',
				'message' => 'Ini merupakan hanya tes seeder ke data base'
			],
			[
				'name' => 'Ini tes seeder contact 2',
				'slug'  => 'ini-tes-seeder-contact-2',
				'email'  => 'Tes2@mail.com',
				'telp'  => '0812123100',
				'message' => 'Ini merupakan hanya tes seeder ke database'
			]
		];

		foreach($contact_data as $data){
			// insert semua data ke tabel
			$this->db->table('contact')->insert($data);
		}
    }
}
