<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <header class="flex h-16 bg-purple-300">
        <h1 class="mr-auto ml-5 pt-5 text-white">DAY SCHEDULE</h1>
        <nav class="nav">
            <ul>
                <li class="p-5 text-pink-200"><a href="{{ route('index') }}">TOP</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
