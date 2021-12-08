<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",

            "author" => "Arel Smith",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, iure. Perspiciatis accusamus est sunt, veniam quaerat expedita minima aliquam pariatur facere fugit autem atque minus consectetur reprehenderit unde iure odit enim mollitia corporis sit at ullam illum ex consequuntur! Culpa voluptas laudantium dolorum est, nobis ea id nesciunt eum dicta pariatur tempora commodi asperiores libero iusto at dolore suscipit natus? Laborum tempora deleniti eum praesentium pariatur molestiae corporis nam, corrupti perferendis omnis obcaecati quis, vel dignissimos provident, nulla molestias itaque vitae expedita accusamus minus eligendi facilis? Quos cumque, similique nostrum doloribus minima rerum delectus inventore quaerat provident vero optio. Blanditiis!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "CryZent",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste distinctio eius iusto corporis quis vitae atque! Veniam accusamus optio repellendus ipsum deleniti doloribus laudantium magnam iure soluta reprehenderit laboriosam corporis quas, nesciunt autem officia eum cupiditate quisquam eligendi! Deleniti quia, tempora quo, culpa recusandae placeat sint quas possimus sed eos nemo odio iure atque aperiam sunt quam necessitatibus ut optio. Libero, in praesentium? Nulla quibusdam molestias perferendis? Mollitia natus, recusandae facilis accusantium velit maxime pariatur harum. Dolore quibusdam facere praesentium itaque quisquam quasi, molestiae iure voluptates enim hic! Sequi, commodi provident quidem iure vero tenetur assumenda nisi error possimus non."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();


        return $posts->firstWhere('slug', $slug);
    }
}
