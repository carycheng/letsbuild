<?php
	class User extends Eloquent{
		//need to include updated_at and created_at parameters to utilize timestamp()
		public $timestamps = false; 
		protected $fillable = array('name', 'projects_worked_on');

		public function projects(){
			return $this->belongsToMany('Project' , 'projects_users', 'users_id', 'projects_id');
		}
	}

?>