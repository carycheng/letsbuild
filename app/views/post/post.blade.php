@extends('layout')

@section('content')
	<div class="content">
		 <h2 class="content-head is-center">Post a Project</h2>

		 <form class="pure-form pure-form-aligned" method="post">
		    <fieldset>
		        <div class="pure-control-group">
		            <label for="aligned-title">Title</label>
		            <input id="aligned-title" name="title" type="text">
		        </div>

		        <div class="pure-control-group">
		            <label for="aligned-description">Description</label>
		            <input id="aligned-description" name="description" type="text">
		        </div>

		        <div class="pure-control-group">
		            <label for="aligned-category">Category</label>
		            <input id="aligned-category" name="category" type="text">
		        </div>

		        <div class="pure-control-group">
		            <label for="aligned-hours">Number of Hours</label>
		            <input id="aligned-hours" name="hoursNeeded" type="number">
		        </div>

		        <div class="pure-control-group">
		            <label for="aligned-hours">Team Size</label>
		            <input id="aligned-hours" name="teamSize" type="number">
		        </div>

		        <div class="pure-controls">
		            <input type="submit" class="pure-button pure-button-primary" value="Post">
		        </div>
		    </fieldset>
		</form>
	</div>
@stop