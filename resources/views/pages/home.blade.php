
@extends('layout.template')

@section('navbar')
  @include('partial.navbar')
@endsection

@section('header')
  @include('partial.header')
@endsection

@section('main')
  <main class="main">
    <h2>Questa è la Home</h2>
    <div class="art">

      <div class="art-left">
        <h3>Articolo uno</h3>
        <p class="text-main">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A debitis odio adipisci rem praesentium illum voluptas aliquid, dolorum sunt non inventore incidunt laudantium reiciendis ipsum deleniti quaerat, nostrum enim suscipit? Harum assumenda repellat sit quidem dolores asperiores, officiis fugiat voluptatibus non rem exercitationem est voluptas quam temporibus. Dolorem, soluta temporibus!</p>
        <!-- /.text-main -->
      </div>
      <!-- /.main-left -->
      <div class="art-right">
        <h3>Articolo due</h3>
        <p class="text-main">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A debitis odio adipisci rem praesentium illum voluptas aliquid, dolorum sunt non inventore incidunt laudantium reiciendis ipsum deleniti quaerat, nostrum enim suscipit? Harum assumenda repellat sit quidem dolores asperiores, officiis fugiat voluptatibus non rem exercitationem est voluptas quam temporibus. Dolorem, soluta temporibus!</p>
        <!-- /.text-main -->
      </div>
      <!-- /.main-right -->
    </div>
    <!-- /.art -->
  </main>
@endsection

@section('footer')
  @include('partial.footer')
@endsection