<!doctype html>
<html>
<head>
    @include('partial.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('partial.header')
    </header>

    <nav>
      @include('partial.navbar')
    </nav>

    <div id="main" class="row">

            <h1>Questa è About</h1>
            @yield('content')

    </div>

    <footer class="row">
        @include('partial.footer')
    </footer>

</div>
</body>
</html>