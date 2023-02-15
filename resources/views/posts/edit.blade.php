<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>くえすちょねあ</title>
    </head>

<body>

  

    <div class="update">
        
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　

        @section('content')
        
        <body>
              <h1 class="title">編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            
            @if($errors->any())
            <p calss="error_message">入力内容をご確認ください。</p>
            @endif
                 <form action="/posts" method="POST">
            @csrf
            
            @if($errors->any())
            <p calss="error_message">入力内容をご確認ください。</p>
            @endif
            
            
            <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}"/>

 　 <div class="border col-5">
        <div class="title">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>アンケートのタイトル</label>
                        <input type="text" class="form-control" name="post[title]" size="100" style="width:500px"  value="{{ $post->title }}"/> 
                       <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="border col-5">
        <div class="aim">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>アンケートの目的</label>
                        <input class="form-control" name="post[aim]" size="100" style="width:500px"  value="{{ $post->aim }}"></input>
                       <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                       　 
                    </div>
                </form>
            </div>
        </div>
    </div>
                 
            </div>
            
 <div class="border col-5">
        <div class="area">
            <div class="col-lg">
                <form>
                    <div class="form-group" value="{{$post->area}}">>
                        <label>分野</label>
                         <select name="post[area]">
                      
                    　　<option value="法学系">法学系</option>
                        <option value="経営学系">経営学系</option>
                        <option value="経済学系">経済学系</option>
                        <option value="文学系">文学系</option>
                        <option value="言語学系">言語学系</option>
                        <option value="地理学系">地理学系</option>
                        <option value="政治学系">政治学系</option>
                        <optipn value="心理学系">心理学系</option>
                        <option value="教育学系">教育学系</option>
                        <option value="哲学">哲学系</option>
                        <option value="宗教学系">宗教学系</option>
                        <option value="文化人類学系">文化人類学系</option>
                        <option value="観光学系">観光学系</option>
                        <option value="歴史学系">歴史学系</option>
                        <option value="文化資源学系">文化資源学系</option>
                        <option value="芸術学系">芸術学系</option>
                        <option value="その他">その他</option>
                     </select>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
 　 <div class="border col-5">
        <div class="target">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>回答対象者</label>
                      　<h3>分野</h3>
                     <select name="post[target_area]">
                       
                        <option value="指定なし">指定なし</option>                 
                        <option value="今回の質問分野を専攻している・していた人">今回の質問分野を専攻している・していた人</option>   
                        <option value="今回の質問分野以外専攻している・していた人">今回の質問分野以外専攻している・していた人</option> 
                    </select>
            　　　<h3>年齢層</h3>    
                    　<select name="post[target_ages]">
                    　 
                        <option value="指定なし">指定なし</option> 
                    　　<option value="10代~20代">10~20代</option>  
                    　　<option value="30代~40代">30代~40代</option> 
                    　　<option value="50代~60代">50代~60代</option> 
                    　　<option value="70代以降">70代以降</option>
                    </select>
                　<h3>性別</h3>
                   　 <select name="post[target_gender]">
                      
                        <option value="指定なし">指定なし</option> 
                    　　<option value="男性">男性</option> 
                    　　<option value="女性">女性</option> 
                    　　<option value="LGBTs">LGBTs</option> 
                    </select>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="border col-5">
        <div class="url">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>Google FormのURL</label>
                        <input type="text" name="post[link]"  value="{{ old('post.link') }}"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
          
         <form>
         <input type="submit" value="保存"/>
         </form>
        
        <div class="border col-5">
        <div class="url">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                     <div class="back">[<a href="/">ホームへ戻る</a>]</div>     
                    </div>
                </form>
            </div>
        </div>
    </div>
          
            
            
            <div class="title">
                <h2>アンケートのタイトル</h2>
                <input type="text" name="post[title]" placeholder="アンケートのタイトル"  value="{{ $post->title }}"/> 
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            <div class="aim">
                <h2>アンケートの目的</h2>
            　  <input type="text" name="post[aim]" placeholder="アンケートの目的を入力" value="{{ $post->aim }}"></inut> 
            　  <p class="aim__error" style="color:red">{{ $errors->first('post.aim') }}</p>
            </div>
            
            <div class=area>
                 <h2>分野</h2>
                     <select name="post[area]"　value="{{$post->area}}">
                      
                    　　<option value="法学系">法学系</option>
                        <option value="経営学系">経営学系</option>
                        <option value="経済学系">経済学系</option>
                        <option value="文学系">文学系</option>
                        <option value="言語学系">言語学系</option>
                        <option value="地理学系">地理学系</option>
                        <option value="政治学系">政治学系</option>
                        <optipn value="心理学系">心理学系</option>
                        <option value="教育学系">教育学系</option>
                        <option value="哲学">哲学系</option>
                        <option value="宗教学系">宗教学系</option>
                        <option value="文化人類学系">文化人類学系</option>
                        <option value="観光学系">観光学系</option>
                        <option value="歴史学系">歴史学系</option>
                        <option value="文化資源学系">文化資源学系</option>
                        <option value="芸術学系">芸術学系</option>
                        <option value="その他">その他</option>
                     </select>
            </div>   
             
            <div class=target>
                 <h2>回答対象者</h2>
                 　<h3>分野</h3>
                     <select name="post[target_area]">
                       
                        <option value="指定なし">指定なし</option>                 
                        <option value="今回の質問分野を専攻している・していた人">今回の質問分野を専攻している・していた人</option>   
                        <option value="今回の質問分野以外を専攻している・していた人">今回の質問分野以外専攻している・していた人</option> 
                    </select>
            　　　<h3>年齢層</h3>    
                    　<select name="post[target_ages]">
                    　 
                        <option value="指定なし">指定なし</option> 
                    　　<option value="10代~20代">10~20代</option>  
                    　　<option value="30代~40代">30代~40代</option> 
                    　　<option value="50代~60代">50代~60代</option> 
                    　　<option value="70代以降">70代以降</option>
                    </select>
                　<h3>性別</h3>
                   　 <select name="post[target_gender]">
                      
                        <option value="指定なし">指定なし</option> 
                    　　<option value="男性">男性</option> 
                    　　<option value="女性">女性</option> 
                    　　<option value="LGBTs">LGBTs</option> 
                    </select>
                    
             
             
             <div class=googleform>
                 //ここにグーグルフォームを貼る
             </div>     
            </div>
            
         <input type="submit" value="保存"/>
        </form>
        
        <div class="back">[<a href="/">ホームへ戻る</a>]</div>     

    </div>
    
    </body>
 
     @endsection
 
