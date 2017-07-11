@extends('layouts.admin')
@section('styles')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">

@endsection
@section('content')
  <h1>Upload Media</h1>
  {!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store', 'class' => 'dropzone']) !!}


  {!! Form::close() !!}


@endsection

@section('footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js" charset="utf-8"></script>

@endsection
