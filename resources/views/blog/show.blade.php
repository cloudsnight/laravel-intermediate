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

  {{-- Jgn lupa membuat akses ke public utama dari public storage. php artisan storage:link --}}
  <img src="{{ asset('storage/img/'. $blog->featured_img) }}" width="250" height="150">

  <h3>Isi Blog</h3>
  <p>{{ $blog->description }}</p>
  <hr>
@endsection