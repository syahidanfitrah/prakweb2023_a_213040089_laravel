<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Syahidan Fitrah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, ad nostrum? Aperiam repudiandae molestiae quod esse? Earum atque eligendi, commodi blanditiis repudiandae ea quia, ipsam consectetur quas quae laborum, nam et mollitia minus! Excepturi, ratione. Amet illum quae voluptatibus dicta cumque, excepturi esse aperiam iusto possimus odio non, repellendus, sequi itaque laboriosam dolorem quisquam. Accusamus quia, libero deserunt sunt autem molestias, quae, suscipit maiores doloribus neque ut! Deserunt dolores non accusantium, adipisci fugiat vel saepe tempora at culpa blanditiis natus labore laboriosam totam praesentium doloremque iste dignissimos eos quas nulla itaque qui quod iusto quos. Sint corrupti libero similique sapiente!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Doddy Mahmudi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste adipisci dolores pariatur quis expedita! Iste deleniti aut nesciunt labore beatae, assumenda hic aspernatur qui voluptatum nihil fugiat officiis consequatur. Earum ullam minima accusantium est, repellat aut sint doloremque, libero facere tenetur unde assumenda corporis enim rem itaque esse eius nesciunt non nobis repellendus praesentium nulla modi ipsa? Sint consequatur nemo possimus veniam, magni maiores sed in facilis eos accusamus similique provident, aperiam alias laboriosam! Libero fugiat nulla pariatur debitis tempore tempora ipsam, repellendus, dolorum laudantium soluta qui odit iste placeat cumque deleniti expedita fugit ratione. Dignissimos est neque amet exercitationem quos perferendis nam. Repellendus nam dignissimos minus, sequi hic labore reiciendis nemo laborum? Doloremque minima, quas similique pariatur quasi est laudantium iure architecto impedit sint minus atque non aliquid ipsum nisi autem obcaecati, porro quam sed deserunt accusantium saepe culpa. Ullam earum quidem, delectus laboriosam voluptas cumque amet nulla!"
        ]
    ]; 

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();  
        return $posts->firstWhere('slug', $slug);
    }
}
