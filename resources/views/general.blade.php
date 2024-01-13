<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Burmese Recipes</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <nav class="header">
        <h1>Burmese Recipes</h1>
    </nav>
    @yield('content')
</body>

@stack('scripts')

</html>
