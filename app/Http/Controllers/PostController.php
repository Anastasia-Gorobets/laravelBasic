<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 05.03.2017
 * Time: 16:29
 */

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function  index(){
        //$posts=Post::all();
       // $posts=Post::latest('id')->get(); //сортировка по полю id от большего к меньшему
       // $posts=Post::latest('published_at')->get();
       // $posts=Post::latest('id')->where('published_at', '<=', Carbon::now())->get();  //меньше или равно текущей дате
         $postModel=new Post();
        $posts=$postModel->getPublishedPosts();

        return view('post.index',['posts'=>$posts]);
    }

    public function unPublished(){
        $postModel=new Post();
        $posts=$postModel->getUnPublishedPosts();
        return view('post.index',['posts'=>$posts]);
    }

    public function  create(){

        //создаем форму для новой записи
        //при нажатии на кнопку Сохранить передаем данные в store()

    return view('post.create');
    }

    public function store(Post $postModel,Request $request){
        $this->validate($request,
            [ 'title' => 'required|unique:posts|max:255',
                'slug' => 'required|unique:posts|max:255',
                'excerpt' => 'required|max:255',
                'content' => 'required|max:255',
                'published_at' => 'required|max:255', ]);

        $post = $postModel->create($request->all());
        if($post->published == "on"){
            $post->published = 1;
        }
        else {
            $post->published = 0;
        }
        $post->save();
        return redirect()->route('posts');


    }
    public function  show($id){
   //отображаем элемент
    }

    public function edit($id){
         //готовим форму для редактирования, потом в update
    }

    public function update($id){

    }

    public function destroy($id){

    }

}