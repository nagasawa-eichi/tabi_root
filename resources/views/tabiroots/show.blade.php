<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>みんなのルート</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>みんなのルート</h1>
        <div class="name">
            <h2>{{ $root->name }}</h2>
        </div>
        <div class="mainimages">
            <img src="https://tabibacket.s3.ap-northeast-1.amazonaws.com/{{ $tabiimage }}">
        </div>
        <div class="detail">
            <h3>ルート概要</h3>
            <p>{{ $root->comment }}</p>    
        </div>
        <div class="editer">
            <h3>編集者の種類</h3>
            <p>{{ $root->editer_genre }}</p>    
        </div>
        <div class="prefecture">
            <h3>都道府県</h3>
            <p>{{ $root->prefecture }}</p>    
        </div>
        <p class="edit">[<a href="/roots/{{ $root->id }}/edit">ルートを編集する</a>]</p>
        <form action="/roots/{{ $root->id }}" id="form_{{ $root->id }}" method="post" style="display:inline">
                 @csrf
                 @method('DELETE')
             <button type="submit">削除</button> 
             <p id="txt"></p>

        </form>
             <div class="footer">
                 <a href="/">戻る</a>
             </div>
    </body>
</html>
