@extends('layouts.master')

@section('title', '404 Tidak ditemukan !')

@section('style')
  <style>
    header>nav>a{
      background: darkblue;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Halaman tidak ditemukan ! Kode 404.</h1>
@endsection