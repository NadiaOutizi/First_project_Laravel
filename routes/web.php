<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;


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
    return view('welcome');
});
// Route::get('/first/name', function ($name) {
//     return view('first');
// });
// // Route::get('/user', [UserController::class, 'index']);

// Route::get('user/{id}', function($id)
// {
//     return var_dump('User '.$id);
// });
// Route::redirect('/here', '/there', 301);
// Route::redirect('/here', '/there', 302);
// Route::get('/nona/{id?}', function (Request $request, $id=null) {
//     return 'User '.$id;
// });
// Route::get('stagiaire/{id?}/{nom?}', function ($id=null,$nom=null) {
//     return view('stagiaire',['id'=>$id,'nom'=>$nom,'note'=>[1,2,3,4,5,6,7]]);
// });
        

// Route::view('/', 'welcome', ['name' => 'Taylor']);
// Route::get('/test',function (Request $request){
//      dd($request);
// });
// Route::get('/test',function (Request $request){
//          ddd($request);
//     });

// Route::get('/test',function (Request $request){
//         return($request->nom.' '.  $request->prenom);
            
// });
Route::get('/Produit',function(){
   return view('Produit',[
    'Produis'=> [
    [
       'id'=>1,
       'Nom'=>'Galaxy S22 5G',
       'type'=>'Smart Phone',
       'marque'=>'SUMSUNG Galaxy S',
       'Image'=> 'images/galaxys22.jpeg',
      
    ],
       [
        'id'=>2,
        'Nom'=>'iPhone 13 Pro Max',
        'type'=>'Smart Phone',
        'marque'=>'IPHONE',
        'Image'=> 'images/iphone13Pro.jpeg',
       ],
       [
        'id'=>3,
        'Nom'=>'Galaxy S22 Ultra 5G',
        'type'=>'Smart Phone',
        'marque'=>'Sumsung Galaxy S',
        'Image'=> 'images/galaxys22ultra.jpeg',
     ],
     [
        'id'=>4,
        'Nom'=>'iPhone SE 3',
        'type'=>'Smart Phone',
        'marque'=>'IPHONE',
        'Image'=> 'images/iphoneSE3.jpeg',
       ],
     [
        'id'=>5,
        'Nom'=>'Galaxy Z Flip',
        'type'=>'Smart Phone',
        'marque'=>' Samsung Galaxy Z',
        'Image'=> 'images/galaxyZFlip.jpeg',
     ],
     [
        'id'=>6,
        'Nom'=>'Galaxy A51 5G',
        'type'=>'Smart Phone',
        'marque'=>'  Samsung Galaxy A ',
        'Image'=> 'images/galaxyA51.jpeg',
     ]
    ]
]);
});

// Route::get('Listings', function () {
//     return view('Types',[
//       'heading'=>'All Listings',
//       'listings'=>Types::All()
//     ]);
// });
// Route::get('Listings/{id}', function ($id) {
//    return view('listing',[
//       'list'=>Listings::find($id)
//    ]);
// });