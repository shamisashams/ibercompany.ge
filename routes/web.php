<?php

/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\AboutUsController;
use App\Http\Controllers\Client\ServiceController;
use Illuminate\Support\Facades\Route;

Route::post('ckeditor/image_upload/{type}', [CKEditorController::class, 'upload'])->name('upload');

Route::redirect('', config('translatable.fallback_locale'));
Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');


            Route::middleware('auth')->group(function () {
                Route::get('logout', [LoginController::class, 'logout'])->name('logout');

                Route::redirect('', '/admin/project',);

                // Language
                Route::resource('language', LanguageController::class);
                Route::get('language/{language}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');

                //subscribers
                Route::resource('subscribers', SubscribersController::class);
                Route::get('subscribers/{subscribers}/destroy', [SubscribersController::class, 'destroy'])->name('subscribers.destroy');

                // Translation
                Route::resource('translation', TranslationController::class);

                // Category
                Route::resource('category', CategoryController::class);
                Route::get('category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

                // Project
                Route::resource('project', ProjectController::class);
                Route::get('project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

                // Blog
                Route::resource('blog', BlogController::class);
                Route::get('blog/{blog}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');

                // Team
                Route::resource('team', TeamController::class);
                Route::get('team/{team}/destroy', [TeamController::class, 'destroy'])->name('team.destroy');

                // profession
                Route::resource('profession', ProfessionController::class);
                Route::get('profession/{profession}/destroy', [ProfessionController::class, 'destroy'])->name('profession.destroy');

                // Company
                Route::resource('company', CompanyController::class);
                Route::get('company/{company}/destroy', [CompanyController::class, 'destroy'])->name('company.destroy');

                // Slider
                Route::resource('slider', SliderController::class);
                Route::get('slider/{slider}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

                // Page
                Route::resource('page', PageController::class);
                Route::get('page/{page}/destroy', [PageController::class, 'destroy'])->name('page.destroy');

                // Setting
                Route::resource('setting', SettingController::class);
                Route::get('setting/{setting}/destroy', [SettingController::class, 'destroy'])->name('setting.destroy');
            });
        });
        Route::middleware(['active'])->group(function () {


            // Home Page
            Route::get('', [HomeController::class, 'index'])->name('client.home.index');

            // Contact Page
            Route::get('/contact', [ContactController::class, 'index'])->name('client.contact.index');
            Route::post('/contact-us', [ContactController::class, 'mail'])->name('client.contact.mail');


            // About Page
            Route::get('/about', [AboutUsController::class, 'index'])->name('client.about.index');

            // Product Page
            Route::get('/product', [\App\Http\Controllers\Client\ProductController::class, 'index'])->name('client.product.index');
            Route::get('/product/{product}', [\App\Http\Controllers\Client\ProductController::class, 'show'])->name('client.product.show');

            // Project Page
            Route::get('/project', [\App\Http\Controllers\Client\ProjectController::class, 'index'])->name('client.project.index');
            Route::get('/project/view/{project}', [\App\Http\Controllers\Client\ProjectController::class, "show"])->name('client.project.show');
            Route::get('/project/{type}', [\App\Http\Controllers\Client\ProjectController::class, 'projectsByType'])->name('client.project-type.index');

            // Blog Page
            Route::get('/blog', [\App\Http\Controllers\Client\BlogController::class, 'index'])->name('client.blog.index');
            Route::get('/blog/{blog}', [\App\Http\Controllers\Client\BlogController::class, "show"])->name('client.blog.show');

            // Team Page
            Route::get('/team', [\App\Http\Controllers\Client\TeamController::class, 'index'])->name('client.team.index');
            Route::get('/team/{team}', [\App\Http\Controllers\Client\TeamController::class, 'show'])->name('client.team.show');

            // Search Page
            Route::get('/search', [\App\Http\Controllers\Client\SearchController::class, 'index'])->name('client.search.index');

            //Company Page

            Route::post("/sentsub", [\App\Http\Controllers\Client\CompanyController::class, 'subscriber'])->name("client.sendsub");

            Route::get('/company', [\App\Http\Controllers\Client\CompanyController::class, 'index'])->name('client.company.index');
            Route::get('/company/{company}', [\App\Http\Controllers\Client\CompanyController::class, 'show'])->name('client.company.show');


            // Service Page
            Route::get('/service', [ServiceController::class, "index"])->name('client.service.index');
        });
    });
