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
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Syahidan Fitrah',
            'email' => 'syahidan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Mahmudi gong',
            'email' => 'mahmudi@gmail.com',
            'password' => bcrypt('12345')
        ]);


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
            'excerpt' => 'Lorem ipsum pertama, dolor sit amet consectetur adipisicing elit. Maxime, quis.',
            'body' => '<p>Lorem  dolipsumor sit amet consectetur adipisicing elit. Sunt odit sapiente rerum cumque, nesciunt error minima placeat illo dicta optio assumenda repellat reiciendis</p><p> nobis, odio commodi eum tenetur voluptatibus at nihil saepe. Excepturi incidunt, numquam assumenda exercitationem nisi facere placeat doloribus porro totam dignissimos quia illum, aliquid unde. Voluptate animi consectetur, eveniet voluptatem, eum error laborum amet debitis praesentium quia perferendis</p><p> ut, aspernatur nam necessitatibus excepturi optio cupiditate officia. Veniam quis asperiores rerum dolor. Esse voluptatem exercitationem, libero facilis at, numquam quaerat quisquam totam et labore eius soluta cumque quod consequuntur quibusdam officia possimus eveniet molestias nobis molestiae? Ab iste nostrum aperiam sequi. Fuga, expedita iste similique aspernatur eum quae recusandae ut. Beatae, sequi eos culpa at odio nisi alias molestias reprehenderit error consequuntur! Impedit ipsa fugit eveniet! Porro deleniti, velit libero voluptatum sequi architecto commodi iste cum mollitia voluptatem, voluptatibus repellendus eius blanditiis necessitatibus illum inventore rem dicta. Molestias.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum ke dua, dolor sit amet consectetur adipisicing elit. Maxime, quis.',
            'body' => '<p>Lorem  dolipsumor sit amet consectetur adipisicing elit. Sunt odit sapiente rerum cumque, nesciunt error minima placeat illo dicta optio assumenda repellat reiciendis</p><p> nobis, odio commodi eum tenetur voluptatibus at nihil saepe. Excepturi incidunt, numquam assumenda exercitationem nisi facere placeat doloribus porro totam dignissimos quia illum, aliquid unde. Voluptate animi consectetur, eveniet voluptatem, eum error laborum amet debitis praesentium quia perferendis</p><p> ut, aspernatur nam necessitatibus excepturi optio cupiditate officia. Veniam quis asperiores rerum dolor. Esse voluptatem exercitationem, libero facilis at, numquam quaerat quisquam totam et labore eius soluta cumque quod consequuntur quibusdam officia possimus eveniet molestias nobis molestiae? Ab iste nostrum aperiam sequi. Fuga, expedita iste similique aspernatur eum quae recusandae ut. Beatae, sequi eos culpa at odio nisi alias molestias reprehenderit error consequuntur! Impedit ipsa fugit eveniet! Porro deleniti, velit libero voluptatum sequi architecto commodi iste cum mollitia voluptatem, voluptatibus repellendus eius blanditiis necessitatibus illum inventore rem dicta. Molestias.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum ke tiga, dolor sit amet consectetur adipisicing elit. Maxime, quis.',
            'body' => '<p>Lorem  dolipsumor sit amet consectetur adipisicing elit. Sunt odit sapiente rerum cumque, nesciunt error minima placeat illo dicta optio assumenda repellat reiciendis</p><p> nobis, odio commodi eum tenetur voluptatibus at nihil saepe. Excepturi incidunt, numquam assumenda exercitationem nisi facere placeat doloribus porro totam dignissimos quia illum, aliquid unde. Voluptate animi consectetur, eveniet voluptatem, eum error laborum amet debitis praesentium quia perferendis</p><p> ut, aspernatur nam necessitatibus excepturi optio cupiditate officia. Veniam quis asperiores rerum dolor. Esse voluptatem exercitationem, libero facilis at, numquam quaerat quisquam totam et labore eius soluta cumque quod consequuntur quibusdam officia possimus eveniet molestias nobis molestiae? Ab iste nostrum aperiam sequi. Fuga, expedita iste similique aspernatur eum quae recusandae ut. Beatae, sequi eos culpa at odio nisi alias molestias reprehenderit error consequuntur! Impedit ipsa fugit eveniet! Porro deleniti, velit libero voluptatum sequi architecto commodi iste cum mollitia voluptatem, voluptatibus repellendus eius blanditiis necessitatibus illum inventore rem dicta. Molestias.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum ke tiga, dolor sit amet consectetur adipisicing elit. Maxime, quis.',
            'body' => '<p>Lorem  dolipsumor sit amet consectetur adipisicing elit. Sunt odit sapiente rerum cumque, nesciunt error minima placeat illo dicta optio assumenda repellat reiciendis</p><p> nobis, odio commodi eum tenetur voluptatibus at nihil saepe. Excepturi incidunt, numquam assumenda exercitationem nisi facere placeat doloribus porro totam dignissimos quia illum, aliquid unde. Voluptate animi consectetur, eveniet voluptatem, eum error laborum amet debitis praesentium quia perferendis</p><p> ut, aspernatur nam necessitatibus excepturi optio cupiditate officia. Veniam quis asperiores rerum dolor. Esse voluptatem exercitationem, libero facilis at, numquam quaerat quisquam totam et labore eius soluta cumque quod consequuntur quibusdam officia possimus eveniet molestias nobis molestiae? Ab iste nostrum aperiam sequi. Fuga, expedita iste similique aspernatur eum quae recusandae ut. Beatae, sequi eos culpa at odio nisi alias molestias reprehenderit error consequuntur! Impedit ipsa fugit eveniet! Porro deleniti, velit libero voluptatum sequi architecto commodi iste cum mollitia voluptatem, voluptatibus repellendus eius blanditiis necessitatibus illum inventore rem dicta. Molestias.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);













        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
