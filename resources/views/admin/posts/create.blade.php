@extends('layouts.admin')

@section('content')

<h1>Create Post</h1>
<div class = "row">

{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files' => true]) !!}
	<div class="form-group">
		{!! Form::label('title','Title:') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}

	</div>

	<div class="form-group">
		{!! Form::label('cateory_id','Category:') !!}
		{!! Form::select('category_id',[''=>'Choose Category'] + $categories,null,['class'=>'form-control']) !!}

	</div>

	<div class="form-group">
		{!! Form::label('photo_id','Photo:') !!}
		{!! Form::file('photo_id',['class'=>'form-control']) !!}

	</div>

	<div class="form-group">
		{!! Form::label('body','Description:') !!}
		{!! Form::textarea('body',null,['class'=>'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}		
		
	</div>

{!! Form::close() !!}
</div>

<div class="row">

@include('includes.error')

</div>

@endsection

@section('footer')
@endsection