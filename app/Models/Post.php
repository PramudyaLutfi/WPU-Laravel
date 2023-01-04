<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [    
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Andri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
}
