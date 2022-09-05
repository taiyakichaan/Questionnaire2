<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>

<body>

    <h1 class="title">編集画面</h1>

    <div class="update">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class='update_title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='update_aim'>
                <h2>本文</h2>
                <textarea name='post[body]' value="{{ $post->aim }}">
            </div>
            
            <input type="submit" value="保存">
        </form>
    </div>
    
 </body>