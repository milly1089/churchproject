<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\LiteratureController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontEndEmailController;
use App\Http\Controllers\WeeklyProgrammeController;





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



Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    /* corporate routes */
    //testimonies routes
    Route::get('/testimonies',[TestimonyController::class,'getTestimonies'] );
    Route::post('/add-testimony',[TestimonyController::class,'addTestimony']);
    Route::get('/delete-testimony/{testimony}',[TestimonyController::class,'deleteTestimony']);

    //testimonies routes
    Route::get('/blogs',[BlogController::class,'getBlogs'] );
    Route::post('/add-blog',[BlogController::class,'addBlog']);
    Route::get('/delete-blog/{blog}',[BlogController::class,'deleteBlog']);


    //gallery routes
    Route::get('/admgallery',[GalleryController::class,'getGalleryImages']);
    Route::post('/add-gallery-image',[GalleryController::class,'addGalleryImage']);
    Route::get('/delete-gallery-image/{gallery}',[GalleryController::class,'deleteGalleryImage']);


    //mission routes
    Route::get('/mission', [MissionController::class,'getMissions']);
    Route::post('/add-mission', [MissionController::class,'addMission']);
    Route::get('/delete-mission/{mission}',[MissionController::class,'deleteMission']);



    //project routes
    Route::get('/projects',[ProjectController::class,'getProjects']);
    Route::post('/add-project',[ProjectController::class,'addProject']);
    Route::get('/delete-project/{project}',[ProjectController::class,'deleteProject']);


    //announcements routes
    Route::get('/admannouncements', [AnnouncementController::class,'getAnnouncements']);
    Route::post('/add-announcement',[AnnouncementController::class,'addAnnouncement']);
    Route::get('/delete-announcement/{announcement}',[AnnouncementController::class,'deleteAnnouncement']);

    //bulletin routes
    Route::get('/bulletin',[BulletinController::class,'getBulletins']);
    Route::post('/add-bulletin',[BulletinController::class,'addBulletin']);

    //weekly programme routes
    Route::get('/weekly-programme',[WeeklyProgrammeController::class,'getWeeklyProgrammes']);
    Route::post('/add-weekly-programme',[WeeklyProgrammeController::class,'addWeeklyProgramme']);
    Route::get('/delete-weekly-programme/{weeklyprogramme}',[WeeklyProgrammeController::class,'deleteWeeklyProgramme']);

    Route::get('/videos',[VideoController::class,'getVideos']);
    Route::post('/add-video',[VideoController::class,'addVideo']);
    Route::get('/delete-video/{video}',[VideoController::class,'deleteVideo']);

    Route::get('/members', [MemberController::class,'getMembers']);
    Route::post('/add-member',[MemberController::class,'addMember']);
    Route::get('/delete-member/{member}',[MemberController::class,'deleteMember']);

    Route::get('/admin', function(){ return view('admin-dashboard.admin'); });

    Route::get('/literature',[literatureController::class,'getLiteratures']);
    Route::post('/add-literature',[literatureController::class,'addLiterature']);
    Route::get('/delete-literature/{literature}',[literatureController::class,'deleteLiterature']);



});


// front-end routes
Route::get('/', [MainPageController::class,'sendDataToFrontEnd']);
Route::get('/index', [MainPageController::class,'sendDataToFrontEnd']);
Route::get('/about', [TestimonyController::class,'getTestimoniesForAboutPage']);
Route::get('/about2', function(){ return view('about2'); });
Route::get('/blog-single/{blog}', [BlogController::class,'getSingleBlogPage']);
Route::get('/blog',  [BlogController::class,'getBlogsForBlogPage']);
Route::get('/churchinfo', function(){ return view('churchinfo'); });
Route::get('/communication', function(){ return view('communication'); });
Route::get('/contact', function(){ return view('contact'); });
Route::get('/gallery',[GalleryController::class,'getImagesForGalleryPage']);
Route::get('/portfolio-details', function(){ return view('portfolio-details'); });
Route::get('/video-page', function(){ return view('video-page'); });
Route::get('/clerk', function(){ return view('clerk'); });
Route::post('/contact-kilifi-sda', [FrontEndEmailController::class,'sendContactEmail']);
Route::post('/contact-kilifi-sda-clerk', [FrontEndEmailController::class,'sendClerkEmail']);
Route::get('/announcements', function(){ return view('announcements'); });
Route::get('/church-projects', [ProjectController::class,'getProjectsForProjectsPage']);
Route::get('/church-missions',[MissionController::class,'getMissionsForMissionPage']);
Route::get('/church-announcements',[AnnouncementController::class,'getAnnouncementsForAnnouncementsPage']);
Route::get('/church-weekly-programme',[WeeklyProgrammeController::class,'getWeeklyProgrammesForWeeklyProgrammesPage']);
Route::get('/church-videos',[VideoController::class,'getVideosForFrentEnd']);
Route::get('/church-literature',[literatureController::class,'getLiteratureForFrentEnd']);
































