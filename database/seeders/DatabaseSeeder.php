<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Post::factory(49)->create();
        
        User::factory(3)->create();
        
        User::create([
            'name' => "Adzeni Rustianda",
            'email' => 'rustiandazen09@gmail.com',
            'password' => bcrypt('password'),
            'username' => 'rustiandazen'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

    }
}
