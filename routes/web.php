<?php
use App\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductController@show');

//Cart

Route::get('cart/show', 'CartController@show');
Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
Route::get('cart/remove/{rowId}', 'CartController@remove')->name('cart.remove');
Route::get('cart/destroy', 'CartController@destroy')->name('cart.destroy');
Route::post('cart/update', 'CartController@update')->name('cart.update');

// Route::get('/admin/post/{cat_id}/page/{page}', function($cat_id,$page){
//     return $cat_id . '-' . $page;
// });


// // Dat ten cho dinh tuyen 
// // Ten route nay se duoc goi qua view
// Route::get('admin/profile', function(){
//     return route('profile');
// })->name('profile');


// Route::get('product/add', function(){
//     return route('product.add');
// })->name('product.add');


// //Định tuyến tham số tùy chọn

// Route::get('users/{id?}', function($id=0){
//     return $id;
// });

// //Định tuyến với tham số có ràng buộc biểu thức chính quy
// Route::get('product/{id}',function($id){
//     return $id;
// }) -> where('id', '[0-9]+');

// Route::get('product/{slug}/{id}', function($slug,$id){
//  return $id.'---'.$slug;
// })->where(['slug' => '[A-Za-z0-9-_]+']);

// //Định tuyến qua 1 view
// Route::view('post','post', ['id' =>20]);

// //Định tuyến qua controller

// Route::get('admin/post/{id}', 'PostController@detail');
// Route::get('admin/post/add', 'PostController@addPost');
// Route::get('admin/post/show', 'PostController@listPost');
// Route::get('admin/post/update/{id}', 'PostController@updatePost');
// Route::get('admin/post/delete/{id}', 'PostController@deletePost');



// Route::get('admin/product/create', 'Productcontroller@create');
// Route::get('admin/product/show/{id}/{price}', 'Productcontroller@show');
// Route::get('admin/product/update/{id}', 'Productcontroller@update');
// Route::get('admin/product/delete/{id}', 'Productcontroller@delete');

// Route resource

// Route::resource('posts', 'PostController');

// Route::get('admin/post/create', 'AdminPostcontroller@create');
// Route::get('admin/post/show', 'AdminPostcontroller@show');
// Route::get('admin/post/update/{id}', 'AdminPostcontroller@update');
// Route::get('admin/post/delete/{id}', 'AdminPostcontroller@delete');

// Route::get('child', function(){
//     return view('child', ['data' => 4]);
// });

// Route::get('loop', function(){
//     return view('loop', ['n' => 6]);
// });

// Route::get('demo', function(){
//     $users = array(
//         1 => array(
//             'username' => 'ThieuCuong'
//         ),
//         2 => array(
//             'username' => 'Huy Hoang'
//         ),
//     );
//     return view('demo', compact('users'));
// });


// insert data su dung query builder

// Route::get('users/insert', function(){
//     DB::table('users')->insert(
//         ['name' => 'Cuong1997', 'email' => 'cuongth36@gmail.com', 'password' => bcrypt('admin')]
//     );
// });

// Route::get('posts/add', 'PostController@add');
// Route::get('posts/show', 'PostController@show');
// Route::get('posts/update/{id}', 'PostController@update');
// Route::get('posts/delete/{id}', 'PostController@delete');


// Route::get('products/add', 'ProductController@add');
// Route::get('products/show', 'ProductController@show');
// Route::get('products/update/{id}', 'ProductController@update');
// Route::get('products/delete/{id}', 'ProductController@delete');


//ORM
// Route::get('posts/read', function(){
//     return Post::all();
// });

Route::get('posts/read', 'PostController@read');
// Route::get('posts/restore/{id}', 'PostController@restore');
// Route::get('posts/permanentlydelete/{id}', 'PostController@permanentlyDelete');


// Relation ship one to one

Route::get('image/read', 'FeatureImagesController@read');

// Relationship one to many
// Route::get('user/read','UserController@read');


// Relationship many to many

Route::get('role/show', 'RoleController@show');

// Route::get('user/add', 'UserController@add');

// Form
Route::get('post/read', 'PostController@read');
Route::get('post/add', 'PostController@add');
Route::post('post/store', 'PostController@store');
Route::get('post/show', 'PostController@show')->name('post.show');
Route::get('user/reg', function(){
    return view('user.reg');
});

//helper url 
// Route::get('helper/url', 'HelperController@url');

//helper string
Route::get('helper/string','HelperController@string');

// //Session 
Route::get('session/add', 'SessionController@add');
Route::get('session/show', 'SessionController@show');

// //Flash session
Route::get('session/add_flash', 'SessionController@add_flash');
Route::get('session/delete', 'SessionController@delete');

// //Cookie 

// Route::get('cookie/set', 'CookieController@set');
// Route::get('cookie/get', 'CookieController@get');

// //Gui mail 
// Route::get('demo/sendmail', 'DemoMailController@sendmail');


Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});