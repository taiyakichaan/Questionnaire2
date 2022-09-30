
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    
    <body>
         <body>
            
        
           <p>投稿者:{{ $post->user->name }}</p>
            <div class="title">
                <h2>アンケートのタイトル</h2>
               <p>{{$post->title}} </p>
            </div>
            
            <div class="aim">
                <h2>アンケートの目的</h2>
            　  <p>{{$post->aim}}</p>
            </div>
            
            <div class=area>
                 <h2>分野</h2>
                <p>{{$post->area}}</p>
             </div>   
             
            <div class=target>
                 <h2>回答対象者</h2>
                 　<h3>分野</h3>
                   <p>{{$post->target_area}}</p>
                       
            　　　<h3>年齢層</h3>    
                    <p>{{$post->target_ages}}</p>
                    　 
                     
                　<h3>性別</h3>
                    <p>{{$post->target_gender}}</p>

             <div class=googleform>
                 <iframe src="{{$post->link}}" width="640" height="1376" frameborder="0" marginheight="0" marginwidth="0"></iframe>
             </div>     
          </div>
            
             <p class="edit"><a href="/posts/{{ $post->id }}/edit">投稿を編集する</a></p>
        
        <div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
        
       
    </body>
    
    @endsection
    
