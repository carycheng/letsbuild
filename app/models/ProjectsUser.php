<?php

class ProjectsUser {
	Schema::create('projects', function($table)){
		$table->increment('project_id')->unique();
		$table->string('description');
		$table->string('rating');
		$table->mediumText('description');
		$table->timestamp('DateTimeAdded');
		$table->string('Category', 50);
		$table->integer('hoursNeeded');
		$table->integer('teamSize');
	});

	Schema::create('users', function($table2)){
		$table2->increment('user_id')->unique();
		$table2->string('name');
		$table2->string('projects_worked_on');
	});

	Schema::create('project_users', function($table3)){
		$table3->string('p_user_id')->unique();
		$table3->string('p_project_id')->unique();
		$table3->foreign('p_user_id')->references('user_id')->on('users');
		$table3->foreign('p_project_id')->references('project_id')->on('projects');
	});
}