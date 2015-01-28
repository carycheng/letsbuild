<?php 
	class Project extends Eloquent{

		protected $fillable = array('description', 'hoursNeeded', 'teamSize');

		public function  users(){
			return $this->belongsToMany('Users', 'projects_users', 'projects_id', 'users_id');
		}
	}
?>