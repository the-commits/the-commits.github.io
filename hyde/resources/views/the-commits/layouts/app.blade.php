<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">
<head>
    <style>
        body {
            font-family: monospace;
            background-color: #2b2b2b;
            color: #fff;
            margin: 0;
            padding: 0;
        }
    </style>
    @include('hyde::layouts.head')
</head>
<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <section>
        @yield('content')
    </section>
    @include('hyde::layouts.scripts')
</body>
</html>
