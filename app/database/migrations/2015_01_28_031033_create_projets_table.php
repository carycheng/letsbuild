<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			// $table->increments('id');
			// $table->timestamps();
			// $table->
				$table->text('title');
				$table->increments('id');
				$table->integer('projects_id');
				$table->string('rating');
				$table->mediumText('description');
				$table->timestamp('DateTimeAdded');
				$table->string('Category', 50);
				$table->integer('hoursNeeded');
				$table->integer('teamSize');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
