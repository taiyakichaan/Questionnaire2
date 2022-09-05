<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    
    <head>
        <meta charset "utf-8">
        <title>くえすちょねあ</title>
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <h1>くえすちょねあ</h1>
        
        <a href='/posts/create'>アンケートを投稿する</a>
        
        <div class=posts>
            
            @foreach($posts as $post)
            <div class=post>
                <h2 class=titile> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p calss=body>{{$post->body}}</p>
            </div>    
            @endforeach
            
        </div>
        
         <div class='paginate'>
            {{ $posts->links() }}
         </div>
    </body>
    
</html>