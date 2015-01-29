<?php 
	class Project extends Eloquent{

		public $timestamps = false; 
		protected $fillable = array(/*"title", */'description', 'Category', 'hoursNeeded', 'teamSize');

		public function  users(){
			return $this->belongsToMany('Users', 'projects_users', 'projects_id', 'users_id');
		}
	}
?>