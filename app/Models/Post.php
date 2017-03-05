<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function  getPublishedPosts(){
        $posts=$this->latest('published_at')->published()->get();
        return $posts;
    }
//scope
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now())->where('published',1);
    }
}
