<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder {
	
	public function run() {
		Company::create([
			'name' => str_random(10),
			'email' => str_random(10) . '@gmail.com',
			'website' => str_random(10) . '.com',
			'logo' => str_random(10) . '.gif',
			'password' => bcrypt('secret')
		]);
	}
	
}
