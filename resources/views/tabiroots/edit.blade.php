<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>みんなのルート</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
　　　　<link rel="stylesheet" href="/css/app.css">
       
    </head>
    <body>
      <h1 class="title">ルート編集画面</h1>
      <div class="content">
          <form action="/roots/{{ $root->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class='content__title'>
                  <h2>ルート名</h2>
                  <input type='text' name='post[name]' value="{{ $root->name }}">
              </div>
              <div class='content__body'>
                  <h2>ルート説明</h2>
            <input type='text' name='post[comment]' value="{{ $root->comment }}">
              </div>
              <div class="editer_name">
                <h2>編集者の種類</h2>
                <select name="post[editer_genre]" value="{{ $root->editer_genre }}">
                    <option value="standard">スタンダード</option>
                    <option value="pro" selected>プロ</option>
                    <option value="local">ローカル</option>
                    <option value="young">ヤング</option>
                </select>
              <div class="prefecure">
                  <h2>県名</h2>
                  <input type="text" name="post[prefecture]" value="{{ $root->prefecture }}"/>
              </div>
            <input type="submit" value="登録"/>
          </form>
      </div>
    </body>
</html>
