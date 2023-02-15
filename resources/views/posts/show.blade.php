
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    
    <body>

       
                <div style="text-align: center">
                    投稿者:{{ $post->user->name }}
                </div>    
                

<div class="card-deck">
    
<div class="card w-25">
  <div class="card-header">アンケート概要</div>
  <div class="card-body">

                  <table  border="1" rules="cols" frame="void" cellpadding="6" cellspacing="0" align="center">
                  <tr>
                    <td colspan="2">アンケートのタイトル</td>
                   
                    <td>{{$post->title}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">アンケートの目的</td>
                   
                    <td>{{$post->aim}}</td>
                  </tr>
                  <tr>
                     <td colspan="2">アンケート分野</td>
                     <td>{{$post->area}}</td>
                  </tr>
                  <tr>
                 </table>
 </div>
 </div>
 
 <div class="card w-25">
  <div class="card-header">回答対象者</div>
  <div class="card-body">
        <table  border="1" rules="cols" frame="void" cellpadding="6" cellspacing="0" align="center">
       
                     
                     <td>分野</td> 
                    <td>{{$post->target_area}}</td>
                  </tr>
                  <tr>
                      
                     <td>年齢層</td>
                    <td>{{$post->target_ages}}</td>
                  </tr>
                  <tr>
                      
                     <td>性別</td>
                     <td>{{$post->target_gender}}</td>
                  </tr>
                  
                 </table>
       </div>
       </div>
    </div>  
             <div align="center"class=googleform>
                 <iframe src="{{$post->link}}" width="500" height="800" frameborder="0" marginheight="0" marginwidth="0"></iframe>
             </div>     
         
         <div class="row">
            <div class="col-md">
                <button type="button" class="btn btn-primary btn-block"> <a class="edit" style="color:#ffffff" href="/posts/{{ $post->id }}/edit">投稿を編集する</a></button>
                <button type="button" class="btn btn-primary btn-block"><a style="color:#ffffff" href="/">ホームへ戻る</a></button>
            </div>
       
</div>
     
    @endsection
    
