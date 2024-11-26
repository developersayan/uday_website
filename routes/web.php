<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Notification\NotificationController;
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

Route::get('/',[App\Http\Controllers\Pages\HomepageController::class,'index'])->name('home.page');
Route::get('/about-us',[App\Http\Controllers\Pages\HomepageController::class,'aboutUs'])->name('about.us');
Route::get('/services',[App\Http\Controllers\Pages\HomepageController::class,'services'])->name('service.page');

Route::get('/whats-new',[App\Http\Controllers\Pages\HomepageController::class,'whats'])->name('whats.new.page');

Route::get('/events',[App\Http\Controllers\Pages\HomepageController::class,'events'])->name('events.page');


Route::get('/gallery',[App\Http\Controllers\Pages\HomepageController::class,'gallery'])->name('gallery.page');
Route::get('/blog',[App\Http\Controllers\Pages\HomepageController::class,'blog'])->name('blog.page');
Route::get('/notifications',[App\Http\Controllers\Pages\HomepageController::class,'notification'])->name('notifications.page');
Route::get('/contact',[App\Http\Controllers\Pages\HomepageController::class,'contact'])->name('contact.page');
Route::post('contact-post',[App\Http\Controllers\Pages\HomepageController::class,'contactPost'])->name('contact.post');
Route::get('post-details/{id}',[App\Http\Controllers\Pages\HomepageController::class,'blog_details'])->name('blog-details.page');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/custom-login',[LoginController::class,'customLogin'])->name('custom.login');
Route::get('logout',[LoginController::class, 'logout'])->name('logout.user');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::group(['middleware' => 'auth'], function () {
// banner
Route::get('manage-banner',[App\Http\Controllers\Banner\BannerController::class,'index'])->name('manage.banner');
Route::post('manage-banner/insert',[App\Http\Controllers\Banner\BannerController::class,'insert'])->name('manage.banner.insert');
Route::get('manage-banner/delete/{id}',[App\Http\Controllers\Banner\BannerController::class,'delete'])->name('manage.banner.delete');

// gallery
Route::get('manage-gallery',[App\Http\Controllers\Gallery\GalleryController::class,'index'])->name('manage.gallery');
Route::post('manage-gallery/insert',[App\Http\Controllers\Gallery\GalleryController::class,'insert'])->name('manage.gallery.insert');    
Route::get('manage-gallery/delete/{id}',[App\Http\Controllers\Gallery\GalleryController::class,'delete'])->name('manage.gallery.delete');
Route::get('manage-gallery/show/{id}',[App\Http\Controllers\Gallery\GalleryController::class,'show'])->name('manage.gallery.show');

// testimonial
Route::get('manage-testimonial',[App\Http\Controllers\Testimonial\TestimonialController::class,'index'])->name('manage.testimonial');

Route::get('manage-testimonial/add',[App\Http\Controllers\Testimonial\TestimonialController::class,'add'])->name('manage.testimonial.add');

Route::post('manage-testimonial/insert',[App\Http\Controllers\Testimonial\TestimonialController::class,'insert'])->name('manage.testimonial.insert');

Route::get('manage-testimonial/edit/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'edit'])->name('manage.testimonial.edit');
Route::post('manage-testimonial/update',[App\Http\Controllers\Testimonial\TestimonialController::class,'update'])->name('manage.testimonial.update');
Route::get('manage-testimonial/delete/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'delete'])->name('manage.testimonial.delete');


// blog

Route::get('manage-blog',[App\Http\Controllers\Blog\BlogController::class,'index'])->name('manage.blog');
Route::get('manage-blog/add',[App\Http\Controllers\Blog\BlogController::class,'add'])->name('manage.blog.add');
Route::post('manage-blog/insert',[App\Http\Controllers\Blog\BlogController::class,'insert'])->name('manage.blog.insert');
Route::get('manage-blog/edit/{id}',[App\Http\Controllers\Blog\BlogController::class,'edit'])->name('manage.blog.edit');
Route::post('manage-blog/update',[App\Http\Controllers\Blog\BlogController::class,'update'])->name('manage.blog.update');
Route::get('manage-blog/delete/{id}',[App\Http\Controllers\Blog\BlogController::class,'delete'])->name('manage.blog.delete');
Route::get('manage-blog/images/{id}',[App\Http\Controllers\Blog\BlogController::class,'images'])->name('manage.blog.images');
Route::post('manage-blog/images/upload-images',[App\Http\Controllers\Blog\BlogController::class,'upload'])->name('manage.blog.images.upload');
Route::get('manage-blog/images/delete-images/{id}',[App\Http\Controllers\Blog\BlogController::class,'deleteImages'])->name('manage.blog.images.delete');


// member-management
Route::get('manage-member',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberIndex'])->name('member.management');
Route::get('manage-member/add',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberAdd'])->name('member.management.add');
Route::post('manage-member/insert',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberInsert'])->name('member.management.insert');
Route::get('manage-member/edit/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberedit'])->name('member.management.edit');
Route::post('manage-member/update',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberupdate'])->name('member.management.update');
Route::get('manage-member/delete/{id}',[App\Http\Controllers\Testimonial\TestimonialController::class,'memberdelete'])->name('member.management.delete');




Route::get('contact-us',[App\Http\Controllers\Contact\ContactController::class,'index'])->name('manage.contact');
Route::get('contact-us/delete/{id}',[App\Http\Controllers\Contact\ContactController::class,'delete'])->name('manage.contact.delete');
Route::get('contact-us/view/{id}',[App\Http\Controllers\Contact\ContactController::class,'view'])->name('manage.contact.view');

Route::get('change-password',[App\Http\Controllers\Contact\ContactController::class,'change'])->name('change.password');
Route::post('change-password/post',[App\Http\Controllers\Contact\ContactController::class,'changePassword'])->name('change.password.post');





});


