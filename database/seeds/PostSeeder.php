<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;
use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $faker)
    {


      for ($i = 0; $i < 10; $i++){
          $newPost = new Post();
          $newPost->title = $faker->cityPrefix();
          $newPost->content = $faker->text(300);
          $slug = Str::slug($newPost->title);
          $slufBeginner = $slug;

          $postPresente = Post::where('slug',$slug)->first();
          $cont = 1;

          while($postPresente){
            $slug = $slufBeginner.'-'.$cont;
            $postPresente = Post::where('slug',$slug)->first();
              $cont++;
          }

          $newPost->slug = $slug;


          $users = User::all();
          $users = $users->toArray();
          $users = Count($users);
          $newPost->user_id = rand(1,$users);

          $newPost->save();
        }
    }
}
