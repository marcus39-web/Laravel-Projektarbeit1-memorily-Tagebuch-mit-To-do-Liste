<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorily Tagebuch</title>
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.2/dist/paper.min.css">
    <style>
        body {
            background: #f8fafc;
        }
        .paper-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 2rem 0.5rem 2rem;
            border-bottom: 2px solid #444;
            margin-bottom: 2rem;
        }
        .paper-navbar a {
            font-size: 2rem;
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            text-decoration: none;
            color: #333;
        }
        .paper-navbar .nav-links {
            display: flex;
            gap: 2rem;
        }
        .paper-navbar .nav-links a {
            font-size: 1.3rem;
            border-bottom: 3px solid #444;
            padding-bottom: 0.1em;
        }
        main {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        h1, h2, h3 {
            color: #3b3b3b;
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
        }
        .btn-primary, .btn-success, .btn-warning, .btn-danger, .btn-info, .btn-secondary {
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            font-size: 1.1rem;
            box-shadow: 2px 2px 0 #888;
        }
    </style>
</head>
<body>

<nav class="paper-navbar">
    <a href="{{ url('/') }}"><b>memorily</b></a>
    <div class="nav-links">
        <a href="{{ route('memories.index') }}">memories</a>
        <a href="{{ route('todos.index') }}">todo</a>
    </div>
</nav>


<main>
    @yield('content')
</main>


</body>
</html>
