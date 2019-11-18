@extends('layouts.master')

@section('title', 'Route Method')

@section('content')
  <h2>Test Route Match Post</h2>

  <form action="/blog/testing" method="post">
    <input type="text" name="title" value=""><br>
    <textarea name="description" cols="30" rows="10"></textarea><br>
    <button type="submit">Test Post</button>
    @csrf
  </form>
@endsection