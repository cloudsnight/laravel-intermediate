@extends('layouts.master')

@section('title', 'Show Single Blog')

@section('style')
  <style>
    #content{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Disini tempat anda melihat detail !</h1>

  <h3>Judul Blog</h3>
  <p>{{ $blog->title }}</p>
  <hr>

  <h3>Isi Blog</h3>
  <p>{{ $blog->description }}</p>
  <hr>
@endsection