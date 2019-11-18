@extends('layouts.master')

@section('title', 'Create Blog')

@section('style')
  <style>
    #create{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Disini tempat anda membuat blog baru !</h1>
  <form action="/blog" method="post">
    <input type="text" name="title" value=""><br>
    <textarea name="description" cols="30" rows="10"></textarea><br>
    <button type="submit">Create</button>
    @csrf
  </form>
@endsection