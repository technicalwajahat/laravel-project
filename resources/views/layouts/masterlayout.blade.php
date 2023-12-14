<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>King - @yield('title', 'Website')</title>
</head>
<body>
    <header>This is Header Page</header>
    <main>
        <article>
            @hasSection('content')
                @yield('content')
            @else
                <h2>No Content Found!</h2>
            @endif
        </article>
    </main>
    <footer>This is Footer Page</footer>

    @stack('script')
</body>
</html>