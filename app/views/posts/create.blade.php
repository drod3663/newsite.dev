@extends('layouts.master')




@section('content')

{{ Form::token() }}
{{ Form::open(array('action' => array('PostsController@store'))) }}
	@include('posts.create-edit-form')
{{ Form::close() }}

{{Form::open(array('action'=>'PostsController@store', 'method' => 'POST', 'id' => 'create-post-form', 'files' =>true))}}
{{Form::label('Add Picture', 'Add Picture')}}
{{Form::file('image')}}
{{Form::close()}}

@stop