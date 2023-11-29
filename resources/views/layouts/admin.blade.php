<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>Home dashboard</title>
</head>
<body>

    @include('admin.partials.header')

    <div class="container my-5">
        @yield('content')
    </div>

</body>
</html>
