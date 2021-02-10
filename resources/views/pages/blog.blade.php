@extends('layout.template')

@section('header')
  @include('partial.navbar')
  @include ('partial.header')
@endsection

@section('main')
  <h2>Questa è Blog</h2>
@endsection

@section('footer')
  @include('partial.footer')
@endsection
