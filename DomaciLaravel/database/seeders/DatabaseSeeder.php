<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Library;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Library::truncate();
        Book::truncate();
        Author::truncate();
        User::truncate();

        $user = User::create([
            'name'=>'Dunja',
            'email'=>'dunjatikvicki11@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('dunja11')
        ]);

        $lib1 = Library::factory()->create();
        $lib2 = Library::factory()->create();

        $aut1=Author::factory()->create();
        $aut2=Author::factory()->create();
        $aut3=Author::factory()->create();

        Book::factory(2)->create([
            'author_id'=>$aut1->id,
            'library_id'=>$lib2->id,
        ]);

        Book::factory(2)->create([
            'author_id'=>$aut2->id,
            'library_id'=>$lib1->id,
        ]);
        
        Book::factory(2)->create([
            'author_id'=>$aut3->id,
            'library_id'=>$lib2->id,
        ]);
    }
}
