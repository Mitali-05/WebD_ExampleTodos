<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Todos</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Todo Application</strong></li>
        </ul>
        <ul>
            <li><a href="{{route('todos.index')}}">List Todos</a></li>
            <li><a href="{{route('todos.create')}}">Add Todo</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    @yield('content')
</main>
</body>
</html>