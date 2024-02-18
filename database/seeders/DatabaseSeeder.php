<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ainur Rofiq',
            'email' => 'rofiq123@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Rifqi Aziz',
            'email' => 'rifqi123@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Arva Beltham',
            'email' => 'arva123@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::factory(2)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 3,
        //     'user_id' => 3,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Enam',
        //     'slug' => 'judul-ke-enam',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint id repellat eveniet quas culpa, blanditiis in, et, at rem minima quia officia labore ex? Nisi laborum excepturi natus quaerat harum magni fugiat eius omnis, consequatur at odit rem ipsa velit incidunt architecto veniam ad illo consectetur non dicta minus? Ipsam corporis non modi reiciendis obcaecati hic ea unde quae quibusdam cumque sed in perferendis alias, saepe voluptatum ex, iusto est vitae ut atque. Enim quidem voluptates adipisci reiciendis quibusdam, reprehenderit possimus veritatis sed omnis recusandae. Culpa ipsa atque adipisci soluta labore. Iusto dolorum omnis aperiam, deleniti rerum porro atque veniam praesentium distinctio voluptas reprehenderit asperiores aut esse maiores nisi eum dolorem exercitationem eaque sapiente adipisci repellat quisquam perspiciatis eius! Voluptatibus ea commodi quaerat error adipisci deleniti optio eaque cum. Repellat vero a, fugiat, praesentium aperiam eius odit ratione dolore facilis quidem dignissimos quod at molestias! Magnam nulla corporis iure.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
    }
}
