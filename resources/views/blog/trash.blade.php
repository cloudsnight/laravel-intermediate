@extends('layouts.master')

@section('title', 'Trash Page')

@section('style')
  <style>
    #trash{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Disini tempat anda daur ulang yang terbuang !</h1>

  @if($blogs->count() == 0)
    <p>Kosong</p>
  @else
    <ul>
      @foreach($blogs as $blog)
        <li>
          {{ $blog->title }}
          <div>
            <form action="/blog/{{ $blog->id }}/force_delete" method="post">
              <button type="submit" onclick="return confirm('Are you sure want to delete this forever ?');">Delete Permanent</button>
              @csrf
              <input type="hidden" name="_method" value="DELETE">
            </form>

            <form action="/blog/{{ $blog->id }}/restore" method="post">
              <button type="submit">Restore</button>
              @csrf
            </form>
          </div>
        </li>
      @endforeach
    </ul>
  @endif
@endsection