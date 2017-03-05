<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->call('PostSeeder');

        Model::reguard();
    }
}

class PostSeeder extends  Seeder{

    public  function  run()
    {
        DB::table('Posts')->delete();

        Post::create([
            'title'=>"First Post",
            'slug'=>'first-post',
            'excerpt'=>'<b>First post body</b>',
            'content'=>'<b>Content first body</b>',
            'published'=>true,
            'published_at'=>'2017-05-03'
        ]);
 Post::create([
     'title'=>"Second Post",
     'slug'=>'second-post',
     'excerpt'=>'<b>Second post body</b>',
     'content'=>'<b>Content second body</b>',
     'published'=>true,
     'published_at'=>'2017-05-03'
        ]);
}


}
