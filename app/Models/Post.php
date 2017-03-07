<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];


    public function  getPublishedPosts(){
        $posts=$this->latest('published_at')->published()->get();
        return $posts;
    }
    public function  getUnPublishedPosts(){
        $posts=$this->latest('published_at')->unPublished()->get();
        return $posts;
    }
//scope
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now())->where('published',1);
    }
    public function scopeUnPublished($query){
        $query->where('published_at', '>', Carbon::now())->orWhere('published',0);
    }

}
