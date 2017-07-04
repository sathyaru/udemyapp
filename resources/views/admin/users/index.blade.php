@extends('layouts.admin')

@section('content')

<h1>Users</h1>

 <table class="table">
    <thead>
      <tr>
      	<th>User id</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>

      </tr>
    </thead>
    <tbody>
    @if($users)
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHUmans()}}</td>
        <td>{{$user->updated_at->diffForHUmans()}}</td>
      </tr>
     @endforeach
     @endif
      
    </tbody>
  </table>


@endsection



@section('footer')


@endsection