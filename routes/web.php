<?php
use App\User;
use Illuminate\Support\Facades\Auth; 
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

Route::get('/verify/{hash}', function ($hash) {
    $id = decrypt($hash);

    $user = User::find($id);
    if(!blank($user)) {
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

})->name('verify.hash');


Route::group(['namespace' => 'Frontend'], function () {

    Route::get('home', 'HomepageController@index')->name('home');
    Route::get('team', 'TeamController@index')->name('team');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('photo', 'GalleryController@photo')->name('photo');
    Route::get('video', 'GalleryController@video')->name('video');
    
    Route::get('news', 'NewsController@index')->name('news');
    Route::get('news/details/{id}', 'NewsController@newsDetails')->name('newsDetails');

    Route::get('events', 'EventController@event')->name('events');
    Route::get('event/description/{id}', 'EventController@description')->name('event.description');
    Route::get('event/register/{id}', 'EventController@register')->name('event.register');
    Route::post('event/register/store/{id}', 'EventController@register_store')->name('event.register.store');


    Route::get('blog/index', 'BlogController@index')->name('blog');
    Route::get('blog/category/{id}', 'BlogController@blog_by_category')->name('blog_by_category');
    Route::get('blog/details/{id}', 'BlogController@view_blog')->name('view_blog');

    Route::get('peacePromoting', 'ActivitiesController@peacePromoting')->name('peacePromoting');
    Route::get('skillLeadership', 'ActivitiesController@skillLeadership')->name('skillLeadership');
    Route::get('publications', 'ActivitiesController@publications')->name('publications');
    Route::get('AwarnessRaising', 'ActivitiesController@AwarnessRaising')->name('AwarnessRaising');
    Route::get('WomenEmpowerment', 'ActivitiesController@WomenEmpowerment')->name('WomenEmpowerment');
    Route::get('WomenEmpowerment', 'ActivitiesController@WomenEmpowerment')->name('WomenEmpowerment');

    Route::get('user/login', 'UserController@index')->name('userLogin');
    Route::post('user/home', 'UserController@loign')->name('user.login');
    Route::get('user/logout', 'UserController@logout')->name('user.logout');


    Route::get('user/register', 'UserController@register')->name('userRegister');
    
   

    Route::get('user/profile', 'ProfileController@index')->name('user.profile');
    Route::get('user/blog', 'ProfileController@blog')->name('userBlog');
    Route::post('user/blog/create', 'ProfileController@userBlogCreate')->name('user.blog.create');

});



   Route::get('login', 'Admin\DashboardController@index')->name('login');
    Route::post('admin/dashboard', 'Admin\DashboardController@login')->name('admin-login');
    Route::get('admin/logout', 'Admin\DashboardController@logout')->name('admin.logout');


Route::group(['namespace' => 'Admin', 'middleware' => 'login' ], function () {

 
    Route::get('blog', 'BlogController@index')->name('blog.index');
    Route::get('blog/create', 'BlogController@create')->name('blog.create');
    Route::post('blog/save', 'BlogController@save')->name('blog.save');
    Route::get('blog/active/{id}', 'BlogController@active')->name('blog.active');
    Route::get('blog/unactive/{id}', 'BlogController@unactive')->name('blog.unactive');
    Route::post('blog/destroy/{id}', 'BlogController@destroy')->name('blog.destroy');
    Route::get('blog/view/{id}', 'BlogController@view')->name('blog.view');
    Route::get('blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::post('blog/update/{id}', 'BlogController@update')->name('blog.update');



    Route::get('event', 'EventController@index')->name('event.index');
    Route::get('event/create', 'EventController@create')->name('event.create');
    Route::post('event/save', 'EventController@save')->name('event.save');
    Route::get('event/active/{id}', 'EventController@active')->name('event.active');
    Route::get('event/unactive/{id}', 'EventController@unactive')->name('event.unactive');
    Route::post('event/destroy/{id}', 'EventController@destroy')->name('event.destroy');
    Route::get('event/view/{id}', 'EventController@view')->name('event.view');
    Route::get('event/edit/{id}', 'EventController@edit')->name('event.edit');
    Route::post('event/update/{id}', 'EventController@update')->name('event.update');
    Route::get('event/registerall', 'EventController@registerall')->name('eventRegister');




    Route::get('news/all', 'NewsController@index')->name('news.index');
    Route::get('news/manage', 'NewsController@manage')->name('news.manage');
    Route::get('news/create', 'NewsController@create')->name('news.create');
    Route::post('news/save', 'NewsController@save')->name('news.save');
    Route::get('news/active/{id}', 'NewsController@active')->name('active.news');
    Route::get('news/unactive/{id}', 'NewsController@unactive')->name('unactive.news');
    Route::post('news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');
    Route::get('news/view/{id}', 'NewsController@view')->name('news.view');
    Route::get('news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::post('news/update/{id}', 'NewsController@update')->name('news.update');



    Route::get('category', 'CategoryController@index')->name('category.index');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category/save', 'CategoryController@save')->name('category.save');
    Route::get('active/{id}', 'CategoryController@active_category')->name('category.active');
    Route::get('unactive/{id}', 'CategoryController@unactive_category')->name('category.unactive');


});







