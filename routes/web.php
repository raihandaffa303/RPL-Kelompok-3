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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "name" => "Daffa Putra",
        "email" => "raihandaffa469@gmail.com",
        "image" => "daffa.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Postingan pertama",
            "author" => "Daffa",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laboriosam maxime nam officiis
            commodi quis nihil repellendus iste quos cupiditate cumque dignissimos, ipsa veritatis omnis 
            tempore incidunt corporis sunt iusto, molestias vitae ab voluptas expedita dolorum? Inventore 
            fuga qui deserunt iste laudantium nisi repudiandae dolores quam. Libero consectetur repellendus
            facilis fugiat esse? Aspernatur quis exercitationem sequi dolor vel? Laboriosam aut magnam quos
            temporibus vero repellendus exercitationem iste ipsam qui, ipsa, omnis dignissimos, nemo laudantium?
            Nobis magnam quidem sit animi possimus."
        ],
        [
            "title" => "Postingan kedua",
            "author" => "Saleh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero cupiditate nostrum, 
            voluptas autem in impedit a veritatis tempore iusto quidem ipsa similique quas
             repellat quae asperiores blanditiis nihil tenetur odit non? Velit dolorum, aut 
             recusandae doloribus dolore illo voluptas harum at dolores corporis incidunt 
             architecto. Ea vitae optio error repellendus totam nobis saepe eligendi rerum. Mo
             llitia voluptatibus quod perspiciatis ab nemo accusantium illum ut, perferendis 
             praesentium molestiae non. Totam, explicabo rem. Repudiandae commodi veritatis ad
             ipisci ut id, rerum nisi atque sapiente earum! Corporis eum, impedit voluptate ra
             tione dolore reiciendis, debitis at quibusdam quas ma"
        ],
    ];
    
    return view('Posts', [
        "title" => "Posts",
        "Posts" => $blog_posts
    ]);
});