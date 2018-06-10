<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Employee-Department CRUD</title>

    @include('partials.head')
    
  
    @include('partials.style')
</head>
<body class="background">
    @include('partials.nav')
    <div id="app">
        <main class="py-4">
            @yield('content')
            @include('modal')
        </main>
    </div>
    @include('partials.script')
</body>
</html>
