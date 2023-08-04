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
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddyferdiansyah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, debitis excepturi nostrum perferendis suscipit provident sint, nemo praesentium velit exercitationem id. Fuga laudantium voluptates similique qui maxime sunt voluptatibus, vel repudiandae quis! Rem autem illum unde, hic quis laborum provident ipsa molestias, omnis eius reprehenderit officia fuga libero? Similique dolore amet error vitae perspiciatis quisquam, illum quos quod repellat iusto facilis dignissimos suscipit ab culpa et nemo magni unde veritatis sapiente excepturi explicabo sint eius minus. Voluptas, autem. Distinctio amet, earum ipsam et quae odit voluptatibus dolor facilis corporis voluptate perspiciatis, blanditiis aspernatur nostrum repudiandae itaque id fugiat. Reiciendis, perspiciatis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, debitis excepturi nostrum perferendis suscipit provident sint, nemo praesentium velit exercitationem id. Fuga laudantium voluptates similique qui maxime sunt voluptatibus, vel repudiandae quis! Rem autem illum unde, hic quis laborum provident ipsa molestias, omnis eius reprehenderit officia fuga libero? Similique dolore amet error vitae perspiciatis quisquam, illum quos quod repellat iusto facilis dignissimos suscipit ab culpa et nemo magni unde veritatis sapiente excepturi explicabo sint eius minus. Voluptas, autem. Distinctio amet, earum ipsam et quae odit voluptatibus dolor facilis corporis voluptate perspiciatis, blanditiis aspernatur nostrum repudiandae itaque id fugiat. Reiciendis, perspiciatis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, debitis excepturi nostrum perferendis suscipit provident sint, nemo praesentium velit exercitationem id. Fuga laudantium voluptates similique qui maxime sunt voluptatibus, vel repudiandae quis! Rem autem illum unde, hic quis laborum provident ipsa molestias, omnis eius reprehenderit officia fuga libero? Similique dolore amet error vitae perspiciatis quisquam, illum quos quod repellat iusto facilis dignissimos suscipit ab culpa et nemo magni unde veritatis sapiente excepturi explicabo sint eius minus. Voluptas, autem. Distinctio amet, earum ipsam et quae odit voluptatibus dolor facilis corporis voluptate perspiciatis, blanditiis aspernatur nostrum repudiandae itaque id fugiat. Reiciendis, perspiciatis!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, debitis excepturi nostrum perferendis suscipit provident sint, nemo praesentium velit exercitationem id. Fuga laudantium voluptates similique qui maxime sunt voluptatibus, vel repudiandae quis! Rem autem illum unde, hic quis laborum provident ipsa molestias, omnis eius reprehenderit officia fuga libero? Similique dolore amet error vitae perspiciatis quisquam, illum quos quod repellat iusto facilis dignissimos suscipit ab culpa et nemo magni unde veritatis sapiente excepturi explicabo sint eius minus. Voluptas, autem. Distinctio amet, earum ipsam et quae odit voluptatibus dolor facilis corporis voluptate perspiciatis, blanditiis aspernatur nostrum repudiandae itaque id fugiat. Reiciendis, perspiciatis!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
