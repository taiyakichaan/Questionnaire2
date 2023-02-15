
    
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    
    <body style="text-align:center">
        <form action="/posts" method="POST">
            @csrf
            
            @if($errors->any())
            <p calss="error_message">入力内容をご確認ください。</p>
            @endif
            
            
            <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}"/>

 
        <div class="title">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>１．アンケートのタイトル</label>
                        <input type="text" class="form-control" name="post[title]" size="100" style="text-align:center" style="width:500px" value="{{ old('post.title') }}"> 
                       <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
        <div class="aim">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <label>２．アンケートの目的</label>
                        <textarea class="form-control" name="post[aim]" size="100" style="text-align:center" style="text-align:center" value="{{ old('post.title') }}"> </textarea>
                       <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
                 
            </div>
            

        <div class="area">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <br><label>３．質問分野</label></br>
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
    
    
 　
        <div class="target">
            <div class="col-lg" style="text-align:center">
                <form>
                    <div class="form-group">
                        <br><label>４．回答対象者</label></br>
                      　<br><label>分野</label></br>
                     <select name="post[target_area]">
                       
                        <option value="指定なし">指定なし</option>                 
                        <option value="今回の質問分野を専攻している・していた人">今回の質問分野を専攻している・していた人</option>   
                        <option value="今回の質問分野以外専攻している・していた人">今回の質問分野以外専攻している・していた人</option> 
                    </select>
            　　　<br><label>年齢層</label></br>
                    　<select name="post[target_ages]">
                    　 
                        <option value="指定なし">指定なし</option> 
                    　　<option value="10代~20代">10~20代</option>  
                    　　<option value="30代~40代">30代~40代</option> 
                    　　<option value="50代~60代">50代~60代</option> 
                    　　<option value="70代以降">70代以降</option>
                    </select>
                　<br><label>性別</label></br>
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

  
        <div class="url">
            <div class="col-lg">
                <form>
                    <div class="form-group">
                        <br><label>５．Google FormのURL</label></br>
                        <input type="text" name="post[link]" style="width:500px" value="{{ old('post.link') }}"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
          
         <form>
         <input type="submit"value="保存"/>
         </form>
        
     
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
    </div>
          
        

    </body>
    
    @endsection
    
