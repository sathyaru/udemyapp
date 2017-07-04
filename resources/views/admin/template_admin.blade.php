@extends('layouts.admin')

@section('content')

      
@endsection 

@section('footer')

      
@endsection



<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

  {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
	<div class="form-group">
		{!! Form::label('title','Title:') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}

	</div>
	<div class="form-group">

		{!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}		
		
	</div>

{!! Form::close() !!}



@if(count($errors) > 0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)

				<li>{{$error}}</li>

				@endforeach

			</ul>

		</div>



	@endif