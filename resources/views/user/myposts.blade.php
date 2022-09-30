<?php

use Auth;  

public function getOwnPaginateByLimit(int $limit_count = 5)
{
    return $this::with('posts')->find(Auth::id())->posts()->orderBy('updated_at', 'DESC')->paginate($limit_count);
}