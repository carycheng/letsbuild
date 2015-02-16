<?php
	class ProjectsController extends BaseController{
		public function postProject(){
			if(Input::has('description', 'category', 'hoursNeeded', 'teamSize' /*'title'*/)){
				//	$result = Input::all();
					$title = Input::get("title");
					$description = Input::get('description');
					$category = Input::get('category');
					$teamSize = intval(Input::get('teamSize'));
					$hoursNeeded = intval(Input::get('hoursNeeded'));
					$date = new \DateTime;
					DB::table('projects')->insert(array('title' =>$title, 'description' => $description, 
						'category' => $category, 'teamSize' => $teamSize, 'hoursNeeded' => $hoursNeeded, 'created_at' => $date, 'updated_at' => $date));
					return Redirect::to('redirect');

			}
			else
				return Response::make("Fill in all the fields");
		}
		
		public function findProject(){
			if(Input::has('term')){
				$category = Input::get('term');
				$result = DB::table('projects')->select('description')->where('description', 'LIKE', '%'.$category.'%' )->get();
				return $result;	
			}
			// else{
			// 	return Response::make("Fill in all the fields");
			// }
			return 'problem';
		}
		
		public function deletePost(){
			$current_time = date('Y-m-d H:i:s', time());

			echo $current_time;
			$now = strtotime($current_time);

			echo $now;

			$expire = $now - 86400;
			echo '<br>';
			echo $expire;


			DB::table('projects')->where('created_at' , '<' , $expire)->delete();
			
		}
		
		// public function updateRate(){
		// 	if(Input::has('projects_id')){
		// 		$id = Input::get('project_id');
		// 		$project = DB::table('projects')->where('project_id', '=', $id)->get();
		// 		DB::table('projects')->where('project_id', '=', $id)->update(array('rating'=>$project->rating + 1));
		// 	}
		// }

	}
?>
