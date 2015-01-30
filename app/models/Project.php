<?php 
	class Project extends Eloquent{

		public $timestamps = true; 
		protected $fillable = array("title", 'description', 'Category', 'hoursNeeded', 'teamSize', 'created_At', 'updated_At');

		public function  users(){
			return $this->belongsToMany('Users', 'projects_users', 'projects_id', 'users_id');
		}
	}
?>