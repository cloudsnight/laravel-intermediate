@extends('layouts.master')

@section('title', 'Blog Page')

@section('style')
  <style>
    #blog{
      background: darkred;
      color: white;
    }
    
    #btn-action{
      display: flex;
      width: 100px;
    }
  </style>
@endsection

@section('content')
  <h1>Selamat datang diblog kami !</h1>

  <h2>Daftar Blog :</h2>
  <ul>
    @foreach($blogs as $blog)
      <li>
        <a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a>
        <div id="btn-action">
          <form action="/blog/{{ $blog->id }}/edit" method="get">
            <button type="submit">Edit</button>
            @csrf
          </form>

          <form action="/blog/{{ $blog->id }}/delete" method="post">
            <button type="submit">Delete</button>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
          </form>
        </div>
      </li>
    @endforeach
  </ul>
@endsection