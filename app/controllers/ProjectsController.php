<?php
	class ProjectsController extends BaseController{
		public function postProject(){
			if(Input::has('description', 'hoursNeeded'/*, 'teamSize', 'title'*/)){
					//$title = Input::get('title');
					$description = Input::get('description');
					//$category = Input::get('Category');
					//$teamSize = intval(Input::get('teamSize'));
					$hoursNeeded = intval(Input::get('hoursNeeded'));
					DB::table('projects')->insert(array('description' => $description,'hoursNeeded' => $hoursNeeded));
					//$project = new Project;
					//$project->description = $description;
					//$project->Category = $category
					//$project->hoursNeeded = $hoursNeeded;
					//$project->teamSize = $teamSize;
					//$project->title = $title;
					//$project->save();
					//return $project;
			}
			// else
			// 	return Response::make("Fill in all the fields");
		}
		
		// public function findProject(){
		// 	if(Input::has('Category')){
		// 		$category = Input::get('Category');
		// 		$result = DB::table('projects')->where('Category', '=', $category)->get();
		// 		return $result;	
		// 	}
		// 	else{
		// 		return Response::make("Fill in all the fields");
		// 	}
		// }
		
		// public function deletePost(){
		// 	$current_time = date('Y-m-d H:i:s', time());
		// 	$now = strtotime($current_time);
			
		// }
		
		// public function updateRate(){
		// 	if(Input::has('projects_id')){
		// 		$id = Input::get('project_id');
		// 		$project = DB::table('projects')->where('project_id', '=', $id)->get();
		// 		DB::table('projects')->where('project_id', '=', $id)->update(array('rating'=>$project->rating + 1));
		// 	}
		// }
	}
?>
