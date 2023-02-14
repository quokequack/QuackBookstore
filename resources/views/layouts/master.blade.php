<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta name='author' content='Alaquoke'>
    <link rel='stylesheet' href='/styles/styles.css'>
    <title>Layout</title>
    @include("partials.styles")
</head>
<body class='body'>
    @include("partials.header")
    <div class='title'>
        @yield('title')
    </div>
    <div class='container'>
        <main class='main'>
            <div class='row'>
                @if(session("msg"))
                <p class='msg'>{{session('msg')}}</p>
                @endif
                @yield("content")
            </div>
        </main>
        <div class='list'>
            @yield('list')
        </div>
        <div class='footer'>
            @include("partials.footer")
        </div>
    </div>
    @include("partials.scripts")
</body>
</html>