<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    public function getPaginateByLimit(int $limit_count=10)
    {
      return $this::with('user')->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'title',
    'aim',
    'area',
    'target_area',
    'target_ages',
    'target_gender',
    'user_id',
    'link',
    ];
  
  public function user(){
    return $this->belongsTo('App\User');
  }
}
