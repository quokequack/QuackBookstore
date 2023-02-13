<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta name='author' content='Alaquoke'>
    <style>
        .container{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .main{
            margin-top:5%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-family:'Poppins';
        }
        .footer{
            display:flex;
            justify-content:center;
            text-align:center;
            flex:1;
        }
        .list{
            margin-top:5%;
        }
        .title{
            display:flex;
            justify-content:center;
            align-items:Center;
            margin-top:5%;
        }
    </style>
    <title>Layout</title>
    @include("partials.styles")
</head>
<body>
    @include("partials.header")
    <div class='title'>
        @yield('title')
    </div>
    <div class='container'>
        <main class='main'>
            @yield("content")
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