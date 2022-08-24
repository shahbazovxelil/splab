<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'admin','middleware'=>'isLogin'],function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginpost'])->name('admin.login.post');
});
Route::group(['prefix'=>'admin','middleware'=>'isAdmin'],function (){


    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('admin.logout');
    Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
    Route::resource('settings',App\Http\Controllers\SettingController::class);
    Route::resource('useful_links',App\Http\Controllers\UsefulLinksController::class);
    Route::resource('our_team',\App\Http\Controllers\OurTeamController::class);
    Route::get('/statistic',[\App\Http\Controllers\StatisticController::class,'index'])->name('statistic.index');
    Route::post('/statistic/update{id}',[\App\Http\Controllers\StatisticController::class,'update'])->name('statistic.update');
    Route::resource('sliders',\App\Http\Controllers\SliderController::class);
    Route::get('/package_services',[\App\Http\Controllers\PackageServiceController::class,'index'])->name('package_services.index');
    Route::get('/edit_package_services/{id}',[\App\Http\Controllers\PackageServiceController::class,'edit'])->name('edit_package_services.edit');
    Route::post('/edit_package_services/update{id}',[\App\Http\Controllers\PackageServiceController::class,'update'])->name('edit_package_services.update');
    Route::resource('customer_says',\App\Http\Controllers\CustomerSayController::class);
    Route::get('/cooperation_update',[\App\Http\Controllers\CooperationWithusController::class,'edit'])->name('cooperation_update.edit');
    Route::post('/cooperation_update/update{id}',[\App\Http\Controllers\CooperationWithusController::class,'update'])->name('cooperation_update.update');
    Route::get('/aboutus_update',[\App\Http\Controllers\AboutusController::class,'edit'])->name('aboutus_update.edit');
    Route::post('/aboutus_update/update{id}',[\App\Http\Controllers\AboutusController::class,'update'])->name('aboutus_update.update');
    Route::get('/services',[\App\Http\Controllers\ServiceController::class,'index'])->name('services.index');
    Route::get('/services/create',[\App\Http\Controllers\ServiceController::class,'create'])->name('services.create');
    Route::post('/services/store',[\App\Http\Controllers\ServiceController::class,'store'])->name('services.store');
    Route::post('/services/getselect',[\App\Http\Controllers\ServiceController::class,'getSelect'])->name('services.getselect');
    Route::post('/services/adddata',[\App\Http\Controllers\ServiceController::class,'AddData'])->name('services.adddata');
    Route::get('/services/edit/{id}',[\App\Http\Controllers\ServiceController::class,'edit'])->name('services.edit');
    Route::post('/services/update/{id}',[\App\Http\Controllers\ServiceController::class,'update'])->name('services.update');
    Route::delete('/services/delete/{id}',[\App\Http\Controllers\ServiceController::class,'destroy'])->name('services.destroy');
    Route::resource('galleries',\App\Http\Controllers\GalleryController::class);
    Route::resource('news',\App\Http\Controllers\NewsController::class);
});

    Route::get('/',[\App\Http\Controllers\FrontController::class,'index'])->name('front.index');
    Route::get('/about',[\App\Http\Controllers\FrontController::class,'about'])->name('front.about');
    Route::get('/services',[\App\Http\Controllers\FrontController::class,'services'])->name('front.services');
    Route::get('/galleries',[\App\Http\Controllers\FrontController::class,'galleries'])->name('front.galleries');
    Route::get('/news',[\App\Http\Controllers\FrontController::class,'news'])->name('front.news');
    Route::get('/contact',[\App\Http\Controllers\FrontController::class,'contact'])->name('front.contact');
    Route::post('/contact',[\App\Http\Controllers\FrontController::class,'sendmail'])->name('front.contact.post');





