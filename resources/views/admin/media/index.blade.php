@extends('layouts.admin')

@section('content')
  @if(Session::has('deleted_media'))

    <p class="bg-danger">{{ session('deleted_media') }}</p>

  @endif

<h1>Media</h1>


</table>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Created at</th>
      </tr>
    </thead>
    @if($photos)

    @foreach($photos as $photo)
    <tbody>
      <tr>
        <td>{{ $photo->id }}</td>
        <td><img height="50" src="{{ $photo->file }}" alt=""></td>

        <td>{{ $photo->created_at->diffForHumans() }}</td>
        <td>
          {!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}

          {!! Form::submit('Delete Image',['class'=>'btn btn-danger']) !!}

          {!! Form::close() !!}

        </td>
      </tr>
    @endforeach

    @endif
    </tbody>
  </table>





@endsection

@section('footer')


@endsection
