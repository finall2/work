<?php

use IlluminateDatabaseSeeder;
use IlluminateDatabaseEloquentModel;

use AppPage;

class PagesTableSeeder extends Seeder {

	public function run()
	{
			DB::table('users')->delete();

			User::create([
			 'login' => 'user'
			 ]);
			
			User::create([
			 'login' => 'admin',
			 'write' => TRUE,
			 'edit'  => TRUE
					 ]);
		
	}

}

?>