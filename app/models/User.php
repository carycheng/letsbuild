<?php
	class User extends Eloquent{
		//need to include updated_at and created_at parameters to utilize timestamp()
		protected $fillable = array('name', 'projects_worked_on', 'updated_at', 'created_at');

		public function projects(){
			return $this->belongsToMany('Project' , 'projects_users', 'users_id', 'projects_id');
		}
	}

?>