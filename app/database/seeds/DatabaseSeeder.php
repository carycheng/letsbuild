<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User app seeds finished.');
	}
}

class UserTableSeeder extends Seeder{
	public function run(){

		//clear our database
		DB::table('projects')->delete();
		DB::table('users')->delete();
		DB::table('projects_users')->delete();

		//seed dummy data for testing
		$jason = User::create(array(
			'name'				=>'Jason',
			'projects_worked_on'=>'5'
			));

		$joseph = User::create(array(
			'name'				=>'Joseph',
			'projects_worked_on'=>'3'
			));

		$this->command->info('Teammates seeded');

		//seed dummy project data for testing

		$androidApplication = Project::create(array(
			'description'		=> "Simple android application",
			'hoursNeeded'		=> '8',
			'teamSize'			=> '5'
			));

		$iosApplication = Project::create(array(
			'description'		=> "Simple ios Application",
			'hoursNeeded'		=> '7',
			'teamSize'			=> '3'
			));

		//link users to projects

		$jason->projects()->attach($androidApplication->id);
		$joseph->projects()->attach($iosApplication->id);

		$this->command->info('Connected users to projects');


	}
}
