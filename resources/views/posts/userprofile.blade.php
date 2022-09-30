
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    
    <body>
        <h3>ユーザープロフィール</h3>
       <p> {{Auth::user()->name}}</p>
        <p>{{Auth::user()->status}}</p>
        <h4>質問数</h4>
       <p> {{Auth::user()->q_count}}</p>
       <h4>回答数</h4>
       <p>{{Auth::user()->a_count}}</p>
        <h4>投稿</h4>
 
    <div class="own_posts">
        @foreach($posts as $post)
            <div>
                <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                <small>{{ $post->user->name }}</small>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
   
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>

    @endsection
    </body>
    
    

  