<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $faker)
    {
      $name = ['tech', 'auto', 'videogame', 'natura', 'bambini', 'sport', 'moda', 'apprendimento', 'cultura', 'società', 'giornalismo'];

  for ($i = 0; $i < 7; $i++){
      $newTag = new Tag();
      $random = array_rand($name);
      $newTag->name = $name[$random];;
      $slug = Str::slug($newTag->name);
      $slugBeginner = $slug;
      $tagPresente = Tag::where('slug',$slug)->first();
      $cont = 1;
      while($tagPresente){
        $slug = $slugBeginner.'-'.$cont;
        $tagPresente = Tag::where('slug',$slug)->first();
          $cont++;
      }
      $newTag->slug = $slug;
      $newTag->save();
    }
    }
}
