    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')

         
    <div style="text-align: center"  class=posts>
        
            @foreach($posts as $post)
            <div class="card-deck">
                
             <div class="mx-auto">
                 <div class="card-header">タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
                    
                    <div class="card-body">
                   投稿者：<a href='/posts/user/{{$post->user_id}}'>{{ $post->user->name }}</a></div>
                 　質問分野： {{$post->area}}
                 　<p>投稿日時：{{$post->created_at}}</p>
                    </div>
                </div>
            </div>    
            @endforeach
            
       
        <div class="counter" style="text-align:center">
            {{ $posts->total() }}件中
            {{ $posts->firstItem() }}〜{{ $posts->lastItem() }} 件目を表示
        </div>
        
         <div class="d-flex justify-content-center">
             {{ $posts->links() }}
        </div>     
    </div>
      
      <div class="url">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                     <div class="back" style="text-align:center"> 
                        <a href="/"> 
                            <i class="fa-solid fa-house"></i>ホームへ戻る</a></div>     
                    </div>
                </form>
            </div>
        </div>
        
    @endsection
