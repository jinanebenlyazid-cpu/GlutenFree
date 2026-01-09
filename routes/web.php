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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::fallback(function () { 
    return view('erreur'); 
});

// Route::get('/produits/{cat}', function ($cat) { 
//     $produits = []; 

//     if ($cat == 'pains-viennoiseries') { 
//         $produits =[
//         'Pain complet sans gluten' => [
//             'description' => 'Pain riche en fibres, bio',
//             'prix' => 15.50,
//             'image' => '/images/produits/pain_complet.jpg'
//         ],
//         'Croissant sans gluten' => [
//             'description' => 'Croissant léger et croustillant',
//             'prix' => 3.00,
//             'image' => '/images/produits/croissant.jpg'
//         ],
//     ]; 
//     } elseif ($cat == 'cereales-farines') { 
//         $produits = [
//         'Farine de riz bio' => [
//             'description' => 'Idéale pour pâtisserie et pain sans gluten',
//             'prix' => 72,
//             'image' => '/images/produits/farine_riz.jpg'
//         ],
//         'Flocons d’avoine sans gluten' => [
//             'description' => 'Pour petit-déjeuner sain',
//             'prix' => 69,
//             'image' => '/images/produits/flocons_avoine.jpg'
//         ],
//     ]; 
//     } 
//      elseif ($cat == 'biscuits-snacks') { 
//         $produits = [
//         'Cookies chocolat sans gluten' => [
//             'description' => 'Cookies croustillants, bio',
//             'prix' => 6.50,
//             'image' => '/images/produits/cookies.jpg'
//         ],
//         'Barres énergétiques sans gluten' => [
//             'description' => 'Snack sain pour la randonnée',
//             'prix' => 4.00,
//             'image' => '/images/produits/barres.jpg'
//         ],
//     ]; 
//     } 
//     else{
//         return view('erreur');
//     }
 
//     return view('Produits', [ 
//         'products' => $produits, 
//         'categorie' => $cat 
//     ]); 
// }); 

Route::get('/produits', function () { 
    $produits = [
        'Pains & Viennoiseries' => [
            [
                'nom' => 'Pain complet sans gluten',
                'description' => 'Pain riche en fibres, bio',
                'prix' => 15.50,
                'image' => 'pain_complet.png'
            ],
            [
                'nom' => 'Croissant sans gluten',
                'description' => 'Croissant léger et croustillant',
                'prix' => 3.00,
                'image' => 'croissant.png'
            ],
        ],
        'Céréales & Farines' => [
            [
                'nom' => 'Farine de riz bio',
                'description' => 'Idéale pour pâtisserie et pain sans gluten',
                'prix' => 72,
                'image' => 'farine_riz.webp'
            ],
            [
                'nom' => 'Flocons d’avoine sans gluten',
                'description' => 'Pour petit-déjeuner sain',
                'prix' => 69,
                'image' => 'flocons_avoine.png'
            ],
        ],
        'Biscuits & Snacks' => [
            [
                'nom' => 'Cookies chocolat sans gluten',
                'description' => 'Cookies croustillants, bio',
                'prix' => 6.50,
                'image' => 'cookies.avif'
            ],
            [
                'nom' => 'Barres énergétiques sans gluten',
                'description' => 'Snack sain pour la randonnée',
                'prix' => 4.00,
                'image' => 'barres.png'
            ],
        ],
    ];

    return view('produits', ['allProducts' => $produits]);
});
