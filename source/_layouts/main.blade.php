<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->meta_description }}">
        <link rel="icon" href="/favicon.ico">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <title>{{ $page->meta_title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link href="//fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">
    </head>
    <body class="text-gray-900 font-default antialiased leading-normal tracking-normal">
    @include('_partials/dropdown')
    {{-- Wrapper --}}
    @include('_partials/header')
    <div role="main" class="container shadow-lg mx-auto bg-white mt-24 md:mt-28">
        @yield('body')
    </div>
    @include('_partials.up')
    @include('_partials.footer')
    </body>
</html>
