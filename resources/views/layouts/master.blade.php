<!DOCTYPE html>
<!-- ©Laurens de Hoop | v0.01 -->
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Copyrighted by &copy;Copyrighthouse http://www.copyrighthouse.nl/">
    <link rel="icon" href="#" type="image/icon type">
    <meta name="author" content="Lau de Hoop">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') 404 @show | Redelijk Reisbureau</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-white">
    @include('layouts.blocks.header')
    @include('layouts.blocks.nav')

    <main>
        @yield('content')
    </main>
    <article></article>
    <aside></aside>

    @include('layouts.blocks.footer')
</body>
</html>
