<?php

use Illuminate\Database\Seeder;
use App\Models\Word;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Word::class, 80)->create()
        // ->each(function(Word $post) {
        //     $post->user()->associate(factory(App\User::class)->create());
        // });
        factory(Word::class, 30)->create();
    }
}
