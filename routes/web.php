<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Muhammad Haekal Irsan Sembiring",
        "email" => "irsanhaekal6@gmail.com",
        "image" => "sucrose.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Muhammad Haekal Irsan Sembiring",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aut molestias cumque veniam maxime et, quam iure similique delectus quasi est voluptate reiciendis sapiente ipsum impedit! Assumenda ipsam dolores nihil animi veniam. Numquam quos veniam provident tempora quae fugit molestiae inventore nostrum iste dolore minus deleniti quas vitae suscipit veritatis explicabo repellendus, incidunt expedita perspiciatis sunt harum! Dolor vero, perspiciatis porro, assumenda, accusamus vitae atque libero molestias voluptatibus temporibus soluta molestiae quo nulla tempore repellendus consectetur odit! Neque, qui itaque."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Muhammad Haidar Khalish Khairy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolores provident voluptatem, necessitatibus velit placeat aperiam cupiditate magni fugiat, cum, iure neque sequi et vero voluptas impedit accusamus esse tenetur maxime libero obcaecati enim quae est vel? Dolorum ex praesentium eveniet alias quis. Placeat nostrum sint deleniti velit nisi aliquam quaerat officia incidunt, rerum reiciendis, omnis molestiae quisquam veniam dicta error est? Nisi necessitatibus neque optio quia eligendi laboriosam cum, consectetur, consequatur earum voluptatem fuga! Nobis sapiente deleniti tempore reiciendis voluptates autem, ex sint possimus eveniet quis sed? Asperiores eveniet nisi minima eum odit sint! Eius dolores assumenda ullam id"
        ],
    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});