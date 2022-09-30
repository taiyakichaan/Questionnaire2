    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    

       @guest
    <h5>
                        ようこそゲストさん！
                    </h5>
                    @else
                    <h5>
                        ようこそ{{Auth::user()->name}}さん！
                        
                    </h5>
                    @endguest

          
        <h1>くえすちょねあ</h1>
        
      
        
        <p><a href='/posts/create'>アンケートを投稿する</a></p>
        
        <p><a href='/posts/userprofile'>プロフィール</a></p>
         
        <div class=posts>
            
            @foreach($posts as $post)
            <div class=post>
               <small><a href='/posts/user/{{$post->user_id}}'>{{ $post->user->name }}</a></small>
                <h2 class=titile> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p calss=body>{{$post->body}}</p>
            </div>    
            @endforeach
            
        </div>
        
         <div class='paginate'>
            {{ $posts->links() }}
         </div>
      
    
    
    @endsection
