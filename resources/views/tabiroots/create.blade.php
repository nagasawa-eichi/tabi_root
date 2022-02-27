<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>みんなのルート</title>
        <script src="{{ asset('/css/tabi.css') }}"></script>

    </head>
    <body>
        <h1>ルート登録</h1>
        <form action="/roots" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="main_title">
                <h2>ルート名記入</h2>
                <input type="text" name="post[name]" placeholder="ルート名" value="{{ old('post.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
            </div>
            <div class="upload">
                <h2>メイン画像の保存</h2>
                  <input type="file" name="image">
            </div>
            <div class="comment">
                <h2>ルートの説明</h2>
                <textarea name="post[comment]" placeholder="説明文記入欄" value="{{ old('post.comment') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.comment') }}</p>
            </div>
            <div class="editer_name">
                <h2>編集者の種類</h2>
                <select name="post[editer_genre]" value="{{ old('post.editer_genre') }}">
                    <option value="standard">スタンダード</option>
                    <option value="pro" selected>プロ</option>
                    <option value="local">ローカル</option>
                    <option value="young">ヤング</option>
                </select>
            <div class="prefecure">
                <h2>県名</h2>
                <input type="text" name="post[prefecture]" placeholder="都道府県名" value="{{ old('post.prefecture') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.prefecture') }}</p>
            </div>
            <div class="root_comment">
                <h2>ルート入力</h2>
                <div>
                <input type="text" name="comment[destination_name][]" placeholder="目的地名" value="{{ old('comment.destination_name') }}"/>
                <textarea name="comment[root_comment][]" placeholder="ルート詳細" value="{{ old('comment.root_comment') }}"></textarea>
                <textarea name="comment[destination_link][]" placeholder="目的地のwebサイト" value="{{ old('comment.destination_link') }}"></textarea>
                </div>
                <div id="div2"></div>
                <button onclick="add()" type="button">
                    目的地を追加する
                </button>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script src="{{ asset('/js/tabi.js') }}"></script>
    </body>
</html>
