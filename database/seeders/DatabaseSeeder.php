<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bintang Khadafi',
            'username' => 'bintangkhd',
            'email' => 'bintang@gmail.com',
            'password' => bcrypt('bintang')
        ]);
        
        // User::create([
        //     'name' => 'Komet Netsui',
        //     'email' => 'komet@gmail.com',
        //     'password' => bcrypt('67890')
        // ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        
        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design'
        ]);
        
        Category::create([
            'name' => 'Life and Style',
            'slug' => 'life-and-style'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus sit. Necessitatibus, consequatur obcaecati. Nam ipsum harum itaque reiciendis perferendis necessitatibus optio nulla porro quaerat saepe, fuga esse aspernatur dignissimos at deleniti numquam animi. Dolorum soluta perferendis impedit iste numquam veritatis sapiente? Tenetur ad sunt quos, minima eligendi voluptatum temporibus ullam facere dignissimos sequi iure? Asperiores, corrupti a. Nisi amet maiores eos impedit modi sapiente odio velit dolores quisquam aut. Veritatis ex veniam amet impedit dicta cumque voluptatibus labore.',
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus sit. Necessitatibus, consequatur obcaecati. Nam ipsum harum itaque reiciendis perferendis necessitatibus optio nulla porro quaerat saepe, fuga esse aspernatur dignissimos at deleniti numquam animi. Dolorum soluta perferendis impedit iste numquam veritatis sapiente? Tenetur ad sunt quos, minima eligendi voluptatum temporibus ullam facere dignissimos sequi iure? Asperiores, corrupti a. Nisi amet maiores eos impedit modi sapiente odio velit dolores quisquam aut. Veritatis ex veniam amet impedit dicta cumque voluptatibus labore.',
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel quaerat molestias quam suscipit libero veniam magni at omnis dolor illum dolorum obcaecati autem nisi corrupti, atque, cupiditate voluptates. Iure, necessitatibus sit. Necessitatibus, consequatur obcaecati. Nam ipsum harum itaque reiciendis perferendis necessitatibus optio nulla porro quaerat saepe, fuga esse aspernatur dignissimos at deleniti numquam animi. Dolorum soluta perferendis impedit iste numquam veritatis sapiente? Tenetur ad sunt quos, minima eligendi voluptatum temporibus ullam facere dignissimos sequi iure? Asperiores, corrupti a. Nisi amet maiores eos impedit modi sapiente odio velit dolores quisquam aut. Veritatis ex veniam amet impedit dicta cumque voluptatibus labore.',
        // ]);


    }
}
