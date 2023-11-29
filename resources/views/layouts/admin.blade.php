<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.css' integrity='sha512-imTMcrMfwTWMwbgH3ComWWGCoDCo2jO1Qrvoa7B/Kcy7MrP5XMojK/Ede5uYofzcYyx4aFXdwzsm1QxdQXZreg==' crossorigin='anonymous'/>
    <title>Home dashboard</title>
</head>
<body>

    @include('admin.partials.header')

    <div class="container my-5">
        @yield('content')
    </div>

</body>
</html>
