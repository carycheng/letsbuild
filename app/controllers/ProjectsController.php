<?php
	class ProjectsController extends BaseController{
		public function postProject(){
			if(Input:has('description', 'Category', 'hoursNeeded', 'teamSize', 'title')){
					$project = new Project;
					$project->description = $input['description'];
					$project->Category = $input['Category'];
					$project->hoursNeeded = intval($input['hoursNeeded']);
					$project->teamSize = intval($input['teamSize']);
					$project->title = $input['title'];
					$customer->save();
					return $customer;
			}
			else
				return Response:make("Fill in all the fields");
		}
		
		public function findProject(){
			if(Input:has('Category')){
				$category = Input::get('Category');
				$result = DB::table('projects')->where('Category', '=', $category)->get();
				return $result;
			}
			else{
				return Response:make("Fill in all the fields");
			}
		}
		
		public function deletePost(){
			$current_time = date('Y-m-d H:i:s', time());
			$now = strtotime($current_time);
			
		}
		
		public function updateRate(){
			if(Input:has('projects_id')){
				$id = Input::get('project_id');
				$project = DB::table('projects')->where('project_id', '=', $id)->get();
				DB::table('projects')->where('project_id', '=', $id)->update(array('rating'=>$project->rating + 1));
			}
		}
	}
?>
