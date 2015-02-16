@extends('layout')

@section('content')
	<div class="content">
		 <h2 class="content-head is-center">Search for Projects</h2>

		 <form class="pure-form pure-form-aligned" method="post">
		    <fieldset>
		        <div class="pure-control-group">
		            <label for="aligned-search">Search</label>
		            <input id="aligned-search" name="term" type="text">
		        </div>

		        <div class="pure-controls">
		            <input type="submit" class="pure-button pure-button-primary" value="Post">
		        </div>
		    </fieldset>
		</form>
	</div>
@stop