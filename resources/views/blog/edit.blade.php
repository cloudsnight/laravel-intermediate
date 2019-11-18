@extends('layouts.master')

@section('title', 'Edit Page')

@section('style')
  <style>
    #edit{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('nav-link')
  <a id="edit">Edit Mode</a>
@endsection

@section('content')
  <h1>Disini tempat anda meng-edit !</h1>

  <form action="/blog/{{ $blog->id }}" method="post">
    <input type="text" name="title" value="{{ $blog->title }}"><br>
    <textarea name="description" cols="30" rows="10">{{ $blog->description }}</textarea><br>
    <button type="submit">Edit</button>

    @csrf
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection