<!--<h1>
  Questa è la home
</h1>
@include('partial.navbar')
@include('partial.footer')
-->

@extends('layout.template')

@section('header')
  @include('partial.navbar')
@endsection

@section('main')
  <h1>Questa è la Home</h1>
@endsection

@section('footer')
  @include('partial.footer')
@endsection