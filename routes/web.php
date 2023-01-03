<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Pramudya",
        "email" => "pramudyalutfi@gmail.com",
        "image" => 'user.png'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Pramudya Lutfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Andri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Pramudya Lutfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Andri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In aut ex deleniti similique pariatur aliquam, nostrum, alias fuga culpa, placeat perferendis ipsa temporibus sed vitae? Expedita, veritatis obcaecati! Exercitationem architecto id aliquid. Iste debitis maxime vero numquam delectus minus dolorum rem, autem aliquam, perspiciatis distinctio molestiae. Eius quibusdam vel incidunt nihil dolore iusto adipisci aliquid fugiat? A, esse. Aliquam unde doloremque dolorum, quibusdam cumque et placeat quis voluptate reiciendis perferendis molestias architecto recusandae quos amet culpa velit, ipsum dolore modi!"
        ],
    ]; 

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});