<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tabiroot</title>

        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/tabi.css') }}>

       
    </head>
    <body>
        <h1>たびルート</h1>
        [<a href='/roots/create'>ルート登録</a>]
        <div class='tabi_roots'>
            @foreach($roots as $root)
               <div class="top-right links">
                  <h2 class='title'>
                      <a href="/roots/{{ $root->id }}">{{ $root->name }}</a>
                  </h2>
                  <p class='body'>{{ $root->comment }}</p>
               </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $roots->links() }}
        </div>
    </body>
</html>
