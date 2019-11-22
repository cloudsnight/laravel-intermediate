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

  {{-- enctype="multipart/form-data" Untuk membolehkan form mengupload file, data atau gambar --}}
  <form action="/blog" method="post" enctype="multipart/form-data">
    <input type="text" name="title" value="">
    {{-- custom tampilan validasi --}}
    @if($errors->has('title'))
      <p>{{ $errors->first('title') }}</p>
    @endif
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    @if($errors->has('description'))
      <p>{{ $errors->first('description') }}</p>
    @endif
    <br>

    {{-- Featured Image --}}
    <h4>Upload Image</h4>
    <input type="file" name="featured_img">
    @if($errors->has('featured_img'))
      <p>{{ $errors->first('featured_img') }}</p>
    @endif
    <br>
    <button type="submit">Create</button>
    @csrf
  </form>
@endsection