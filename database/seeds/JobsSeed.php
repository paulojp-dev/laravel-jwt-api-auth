<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobsSeed extends Seeder {
	public function run() {
		Job::create([
			'title' => str_random(10),
			'description' => str_random(1000),
			'local' => 'São Paulo / SP',
			'title' => str_random(10),
			'remote' => 'no',
			'type' => 3,
			'company_id' => 1
		]);
	}
}
