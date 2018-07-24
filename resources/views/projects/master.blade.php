<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/bootstrap.js">

    <title>Document</title>

</head>

<body>

    <div class="bg-info text-white p-5 mb-3">

        {{--  <a href="{{ route('posts.index') }}" class="btn btn-secondary">Home</a>

        <a href="{{ route('posts.create') }}" class="btn btn-secondary">Create Post</a>  --}}

    </div>


    <div class="container mt-5">

         @yield('content')

    </div>

    <div class="bg-dark text-white p-4 text-center">

        All rights reversed Douglas  {{ date('Y') }}

    </div>

</body>

</html>