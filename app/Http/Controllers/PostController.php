<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 05.03.2017
 * Time: 16:29
 */

namespace App\Http\Controllers;
use App\Models\Post;



class PostController extends Controller
{
    public function  index(Post $postModel){
        //$posts=Post::all();
       // $posts=Post::latest('id')->get(); //сортировка по полю id от большего к меньшему
       // $posts=Post::latest('published_at')->get();
       // $posts=Post::latest('id')->where('published_at', '<=', Carbon::now())->get();  //меньше или равно текущей дате

        $posts=$postModel->getPublishedPosts();

        return view('post.index',['posts'=>$posts]);
    }

    public function  create(){

    }

    public function  show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

    }

}