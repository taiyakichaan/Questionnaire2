
    
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    
    <body>
        <form action="/posts" method="POST">
            @csrf
            
            @if($errors->any())
            <p calss="error_message">入力内容をご確認ください。</p>
            @endif
            
            <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}"/>

            <div class="title">
                <h2>アンケートのタイトル</h2>
                <input type="text" name="post[title]" placeholder="アンケートのタイトルを入力"  value="{{ old('post.title') }}"> 
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            <div class="aim">
                <h2>アンケートの目的</h2>
            　  <textarea name="post[aim]" placeholder="何のためのアンケートなのか、アンケート結果を何に用いるのかなどを入力" value="{{ old('post.aim') }}"></textarea> 
            　  <p class="aim__error" style="color:red">{{ $errors->first('post.aim') }}</p>
            </div>
            
            <div class=area>
                 <h2>分野</h2>
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
             
            <div class=target>
                 <h2>回答対象者</h2>
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
                    
             
             
             <div class=googleform name="post[link]">
                 <h3>Google FormのURL</h3>
                 <input type="text" name="post[link]"  value="{{ old('post.link') }}"> 
             </div>     
            </div>
            
         <input type="submit" value="保存"/>
        </form>
        
        <div class="back">[<a href="/">ホームへ戻る</a>]</div>     

    </body>
    
    @endsection
    
