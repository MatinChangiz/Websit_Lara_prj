<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AboutUsFirstController;
use App\Http\Controllers\AboutUsHeaderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerFirstController;
use App\Http\Controllers\CareerHeaderController;
use App\Http\Controllers\ContactFirstController;
use App\Http\Controllers\ContactHeaderController;
use App\Http\Controllers\FightPovertyController;
use App\Http\Controllers\IndexFirstController;
use App\Http\Controllers\IndexHeaderController;
use App\Http\Controllers\IndexSecondController;
use App\Http\Controllers\MissionAndVisionFirstController;
use App\Http\Controllers\MissionAndVisionHeaderController;
use App\Http\Controllers\OurLeadersFirstController;
use App\Http\Controllers\OurLeadersHeaderController;
use App\Http\Controllers\OurLeadersSecondController;
use App\Http\Controllers\OurLeadersThirdController;
use App\Http\Controllers\pressController;
use App\Http\Controllers\TabFiveFirstController;
use App\Http\Controllers\TabFourFirstController;
use App\Http\Controllers\TabFourHeaderController;
use App\Http\Controllers\TabFourSubOneFirstController;
use App\Http\Controllers\TabOneFirstController;
use App\Http\Controllers\TabOneHeaderController;
use App\Http\Controllers\TabOneSecondController;
use App\Http\Controllers\TabOneSubFourFirstController;
use App\Http\Controllers\TabOneSubFourFourthController;
use App\Http\Controllers\TabOneSubFourHeaderController;
use App\Http\Controllers\TabOneSubFourSecondController;
use App\Http\Controllers\TabOneSubFourThirdController;
use App\Http\Controllers\TabOneSubOneFirstController;
use App\Http\Controllers\TabOneSubOneFourthController;
use App\Http\Controllers\TabOneSubOneHeaderController;
use App\Http\Controllers\TabOneSubOneSecondController;
use App\Http\Controllers\TabOneSubOneThirdController;
use App\Http\Controllers\TabOneSubThreeFirstController;
use App\Http\Controllers\TabOneSubThreeHeaderController;
use App\Http\Controllers\TabOneSubThreeSecondController;
use App\Http\Controllers\TabOneSubThreeThirdController;
use App\Http\Controllers\TabOneSubTwoFirstController;
use App\Http\Controllers\TabOneSubTwoHeaderController;
use App\Http\Controllers\TabOneSubTwoSecondController;
use App\Http\Controllers\TabOneThirdController;
use App\Http\Controllers\TabThreeFirstController;
use App\Http\Controllers\TabTwoFirstController;
use App\Http\Controllers\TabTwoHeaderController;
use App\Http\Controllers\TabTwoSecondController;
use App\Http\Controllers\TabTwoSubOneFirstController;
use App\Http\Controllers\TabTwoThirdController;
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

//login
Route::controller(AuthController::class)->group(function(){
    Route::get('ssawo/admindashboard/register','register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('ssawo/admindashboard/login','login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('ssawo/admindashboard', function (){
        return view('adminDashboard.dashboard');
    })->name('ssawo/admindashboard');


    Route::controller(pressController::class)->prefix('ssawo/admindashboard/press')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/press');
        Route::get('create','create')->name('ssawo.admindashboard.news.create');
        Route::post('create','store')->name('ssawo.admindashboard.news.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.news.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.news.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.news.delete');
    });

    Route::controller(FightPovertyController::class)->prefix('ssawo/admindashboard/what-we-do')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/what-we-do');
        Route::get('create','create')->name('ssawo.admindashboard.what-we-do.create');
        Route::post('create','store')->name('ssawo.admindashboard.what-we-do.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.what-we-do.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.what-we-do.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.what-we-do.delete');
    });

    Route::controller(IndexHeaderController::class)->prefix('ssawo/admindashboard/indexHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/indexHeader');
        Route::get('create','create')->name('ssawo.admindashboard.indexHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.indexHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.indexHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.indexHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.indexHeader.delete');
    });

    Route::controller(IndexFirstController::class)->prefix('ssawo/admindashboard/indexFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/indexFirst');
        Route::get('create','create')->name('ssawo.admindashboard.indexFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.indexFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.indexFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.indexFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.indexFirst.delete');
    });

    Route::controller(IndexSecondController::class)->prefix('ssawo/admindashboard/indexSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/indexSecond');
        Route::get('create','create')->name('ssawo.admindashboard.indexSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.indexSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.indexSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.indexSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.indexSecond.delete');
    });

    //tab One
    Route::controller(TabOneHeaderController::class)->prefix('ssawo/admindashboard/tabOneHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneHeader.delete');
    });

    Route::controller(TabOneFirstController::class)->prefix('ssawo/admindashboard/tabOneFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneFirst.delete');
    });

    Route::controller(TabOneSecondController::class)->prefix('ssawo/admindashboard/tabOneSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSecond.delete');
    });

    Route::controller(TabOneThirdController::class)->prefix('ssawo/admindashboard/tabOneThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneThird');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneThird.delete');
    });

    //tab One sub one
    Route::controller(TabOneSubOneHeaderController::class)->prefix('ssawo/admindashboard/tabOneSubOneHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubOneHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubOneHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubOneHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubOneHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubOneHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubOneHeader.delete');
    });

    Route::controller(TabOneSubOneFirstController::class)->prefix('ssawo/admindashboard/tabOneSubOneFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubOneFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubOneFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubOneFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubOneFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubOneFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubOneFirst.delete');
    });

    Route::controller(TabOneSubOneSecondController::class)->prefix('ssawo/admindashboard/tabOneSubOneSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubOneSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubOneSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubOneSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubOneSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubOneSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubOneSecond.delete');
    });

    Route::controller(TabOneSubOneThirdController::class)->prefix('ssawo/admindashboard/tabOneSubOneThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubOneThird');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubOneThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubOneThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubOneThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubOneThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubOneThird.delete');
    });

    Route::controller(TabOneSubOneFourthController::class)->prefix('ssawo/admindashboard/tabOneSubOneFourth')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubOneFourth');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubOneFourth.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubOneFourth.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubOneFourth.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubOneFourth.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubOneFourth.delete');
    });

    //tab One sub two
    Route::controller(TabOneSubTwoHeaderController::class)->prefix('ssawo/admindashboard/tabOneSubTwoHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubTwoHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubTwoHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubTwoHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubTwoHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubTwoHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubTwoHeader.delete');
    });

    Route::controller(TabOneSubTwoFirstController::class)->prefix('ssawo/admindashboard/tabOneSubTwoFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubTwoFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubTwoFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubTwoFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubTwoFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubTwoFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubTwoFirst.delete');
    });

    Route::controller(TabOneSubTwoSecondController::class)->prefix('ssawo/admindashboard/tabOneSubTwoSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubTwoSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubTwoSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubTwoSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubTwoSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubTwoSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubTwoSecond.delete');
    });

    //tab One sub three
    Route::controller(TabOneSubThreeHeaderController::class)->prefix('ssawo/admindashboard/tabOneSubThreeHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubThreeHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubThreeHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubThreeHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubThreeHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubThreeHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubThreeHeader.delete');
    });

    Route::controller(TabOneSubThreeFirstController::class)->prefix('ssawo/admindashboard/tabOneSubThreeFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubThreeFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubThreeFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubThreeFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubThreeFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubThreeFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubThreeFirst.delete');
    });

    Route::controller(TabOneSubThreeSecondController::class)->prefix('ssawo/admindashboard/tabOneSubThreeSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubThreeSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubThreeSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubThreeSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubThreeSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubThreeSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubThreeSecond.delete');
    });
    Route::controller(TabOneSubThreeThirdController::class)->prefix('ssawo/admindashboard/tabOneSubThreeThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubThreeThird');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubThreeThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubThreeThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubThreeThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubThreeThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubThreeThird.delete');
    });

    //tab One sub four
    Route::controller(TabOneSubFourHeaderController::class)->prefix('ssawo/admindashboard/tabOneSubFourHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubFourHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubFourHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubFourHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubFourHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubFourHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubFourHeader.delete');
    });

    Route::controller(TabOneSubFourFirstController::class)->prefix('ssawo/admindashboard/tabOneSubFourFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubFourFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubFourFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubFourFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubFourFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubFourFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubFourFirst.delete');
    });

    Route::controller(TabOneSubFourSecondController::class)->prefix('ssawo/admindashboard/tabOneSubFourSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubFourSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubFourSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubFourSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubFourSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubFourSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubFourSecond.delete');
    });
    Route::controller(TabOneSubFourThirdController::class)->prefix('ssawo/admindashboard/tabOneSubFourThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubFourThird');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubFourThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubFourThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubFourThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubFourThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubFourThird.delete');
    });
    Route::controller(TabOneSubFourFourthController::class)->prefix('ssawo/admindashboard/tabOneSubFourFourth')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabOneSubFourFourth');
        Route::get('create','create')->name('ssawo.admindashboard.tabOneSubFourFourth.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabOneSubFourFourth.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabOneSubFourFourth.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabOneSubFourFourth.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabOneSubFourFourth.delete');
    });

    //tab two
    Route::controller(TabTwoHeaderController::class)->prefix('ssawo/admindashboard/tabTwoHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabTwoHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabTwoHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabTwoHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabTwoHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabTwoHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabTwoHeader.delete');
    });

    Route::controller(TabTwoFirstController::class)->prefix('ssawo/admindashboard/tabTwoFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabTwoFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabTwoFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabTwoFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabTwoFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabTwoFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabTwoFirst.delete');
    });

    Route::controller(TabTwoSecondController::class)->prefix('ssawo/admindashboard/tabTwoSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabTwoSecond');
        Route::get('create','create')->name('ssawo.admindashboard.tabTwoSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabTwoSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabTwoSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabTwoSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabTwoSecond.delete');
    });

    Route::controller(TabTwoThirdController::class)->prefix('ssawo/admindashboard/tabTwoThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabTwoThird');
        Route::get('create','create')->name('ssawo.admindashboard.tabTwoThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabTwoThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabTwoThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabTwoThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabTwoThird.delete');
    });

    //tab two sub one
    Route::controller(TabTwoSubOneFirstController::class)->prefix('ssawo/admindashboard/tabTwoSubOneFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabTwoSubOneFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabTwoSubOneFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabTwoSubOneFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabTwoSubOneFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabTwoSubOneFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabTwoSubOneFirst.delete');
    });

    //tab three
    Route::controller(TabThreeFirstController::class)->prefix('ssawo/admindashboard/tabThreeFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabThreeFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabThreeFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabThreeFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabThreeFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabThreeFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabThreeFirst.delete');
    });

    //tab four
    Route::controller(TabFourHeaderController::class)->prefix('ssawo/admindashboard/tabFourHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabFourHeader');
        Route::get('create','create')->name('ssawo.admindashboard.tabFourHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabFourHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabFourHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabFourHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabFourHeader.delete');
    });

    Route::controller(TabFourFirstController::class)->prefix('ssawo/admindashboard/tabFourFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabFourFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabFourFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabFourFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabFourFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabFourFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabFourFirst.delete');
    });

    //tab four sub one
    Route::controller(TabFourSubOneFirstController::class)->prefix('ssawo/admindashboard/tabFourSubOneFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabFourSubOneFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabFourSubOneFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabFourSubOneFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabFourSubOneFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabFourSubOneFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabFourSubOneFirst.delete');
    });

    //tab five
    Route::controller(TabFiveFirstController::class)->prefix('ssawo/admindashboard/tabFiveFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/tabFiveFirst');
        Route::get('create','create')->name('ssawo.admindashboard.tabFiveFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.tabFiveFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.tabFiveFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.tabFiveFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.tabFiveFirst.delete');
    });

    //about us
    Route::controller(AboutUsHeaderController::class)->prefix('ssawo/admindashboard/aboutUsHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/aboutUsHeader');
        Route::get('create','create')->name('ssawo.admindashboard.aboutUsHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.aboutUsHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.aboutUsHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.aboutUsHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.aboutUsHeader.delete');
    });

    Route::controller(AboutUsFirstController::class)->prefix('ssawo/admindashboard/aboutUsFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/aboutUsFirst');
        Route::get('create','create')->name('ssawo.admindashboard.aboutUsFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.aboutUsFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.aboutUsFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.aboutUsFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.aboutUsFirst.delete');
    });

    Route::controller(AboutUsController::class)->prefix('ssawo/admindashboard/aboutUs')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/aboutUs');
        Route::get('create','create')->name('ssawo.admindashboard.aboutUs.create');
        Route::post('create','store')->name('ssawo.admindashboard.aboutUs.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.aboutUs.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.aboutUs.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.aboutUs.delete');
    });

    //mission and vision
    Route::controller(MissionAndVisionHeaderController::class)->prefix('ssawo/admindashboard/missionAndVisionHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/missionAndVisionHeader');
        Route::get('create','create')->name('ssawo.admindashboard.missionAndVisionHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.missionAndVisionHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.missionAndVisionHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.missionAndVisionHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.missionAndVisionHeader.delete');
    });

    Route::controller(MissionAndVisionFirstController::class)->prefix('ssawo/admindashboard/missionAndVisionFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/missionAndVisionFirst');
        Route::get('create','create')->name('ssawo.admindashboard.missionAndVisionFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.missionAndVisionFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.missionAndVisionFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.missionAndVisionFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.missionAndVisionFirst.delete');
    });

    //Our Leaders
    Route::controller(OurLeadersHeaderController::class)->prefix('ssawo/admindashboard/ourLeadersHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/ourLeadersHeader');
        Route::get('create','create')->name('ssawo.admindashboard.ourLeadersHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.ourLeadersHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.ourLeadersHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.ourLeadersHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.ourLeadersHeader.delete');
    });

    Route::controller(OurLeadersFirstController::class)->prefix('ssawo/admindashboard/ourLeadersFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/ourLeadersFirst');
        Route::get('create','create')->name('ssawo.admindashboard.ourLeadersFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.ourLeadersFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.ourLeadersFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.ourLeadersFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.ourLeadersFirst.delete');
    });

    Route::controller(OurLeadersSecondController::class)->prefix('ssawo/admindashboard/ourLeadersSecond')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/ourLeadersSecond');
        Route::get('create','create')->name('ssawo.admindashboard.ourLeadersSecond.create');
        Route::post('create','store')->name('ssawo.admindashboard.ourLeadersSecond.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.ourLeadersSecond.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.ourLeadersSecond.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.ourLeadersSecond.delete');
    });

    Route::controller(OurLeadersThirdController::class)->prefix('ssawo/admindashboard/ourLeadersThird')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/ourLeadersThird');
        Route::get('create','create')->name('ssawo.admindashboard.ourLeadersThird.create');
        Route::post('create','store')->name('ssawo.admindashboard.ourLeadersThird.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.ourLeadersThird.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.ourLeadersThird.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.ourLeadersThird.delete');
    });

    //contact
    Route::controller(ContactHeaderController::class)->prefix('ssawo/admindashboard/contactHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/contactHeader');
        Route::get('create','create')->name('ssawo.admindashboard.contactHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.contactHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.contactHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.contactHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.contactHeader.delete');
    });

    Route::controller(ContactFirstController::class)->prefix('ssawo/admindashboard/contactFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/contactFirst');
        Route::get('create','create')->name('ssawo.admindashboard.contactFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.contactFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.contactFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.contactFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.contactFirst.delete');
    });

    //career
      Route::controller(CareerHeaderController::class)->prefix('ssawo/admindashboard/careerHeader')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/careerHeader');
        Route::get('create','create')->name('ssawo.admindashboard.careerHeader.create');
        Route::post('create','store')->name('ssawo.admindashboard.careerHeader.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.careerHeader.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.careerHeader.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.careerHeader.delete');
    });

    Route::controller(CareerFirstController::class)->prefix('ssawo/admindashboard/careerFirst')->group(function (){
        Route::get('','index')->name('ssawo/admindashboard/careerFirst');
        Route::get('create','create')->name('ssawo.admindashboard.careerFirst.create');
        Route::post('create','store')->name('ssawo.admindashboard.careerFirst.store');
        Route::get('edit/{id}','edit')->name('ssawo.admindashboard.careerFirst.edit');
        Route::post('edit/{id}','update')->name('ssawo.admindashboard.careerFirst.update');
        Route::get('destroy/{id}','destroy')->name('ssawo.admindashboard.careerFirst.delete');
    });

});


// Pages
Route::get('/',[pressController::class,'press'])->name('index');
Route::get('/news',[pressController::class,'news'])->name('news');


//general Pages
//about========================
Route::get('about-us', function() {
    return view('layoutPages/about/about-us');
})->name('about');

// our-leaders
Route::get('our-leaders', function() {
    return view('layoutPages/ourleaders/our-leaders');
})->name('our-leaders');

// our-leaders
Route::get('mission-and-vision', function() {
    return view('layoutPages/missionAndVission/mission-and-vision');
})->name('mission-and-vision');

//contact=====================
Route::get('contact', function() {
    return view('layoutPages/contact/contact');
})->name('contact');

//careers=====================
Route::get('careers', function() {
    return view('layoutPages/careers/careers');
})->name('careers');



//who we are===================
Route::get('who-we-are', function() {
    return view('layoutPages/who_we_are/who-we-are');
})->name('who-we-are');

// focus-women
Route::get('focus-women', function() {
    return view('layoutPages/who_we_are/focus-women');
})->name('focus-women');

// global-network
Route::get('global-network', function() {
    return view('layoutPages/who_we_are/global-network');
})->name('global-network');

// technical-specialists
Route::get('technical-specialists', function() {
    return view('layoutPages/who_we_are/technical-specialists');
})->name('technical-specialists');

// years-ssawo
Route::get('years-ssawo', function() {
    return view('layoutPages/who_we_are/years-ssawo');
})->name('years-ssawo');



//what we do=======================
Route::get('what-we-do', function() {
    return view('layoutPages/what_we_do/what-we-do');
})->name('what-we-do');

Route::resource('/fight', FightPovertyController::class);


// where-we-work=======================
Route::get('where-we-work', function() {
    return view('layoutPages/where_we_work/where-we-work');
})->name('where-we-work');


//impact-data=======================
Route::get('impact-data', function() {
    return view('layoutPages/our_impact/impact-data');
})->name('impact-data');

// stories
Route::get('stories', function() {
    return view('layoutPages/our_impact/stories');
})->name('stories');


//resources===============
Route::get('resources', function() {
    return view('layoutPages/research_and_reports/resources');
})->name('resources');

// Route::get('/search',[FightPovertyController::class,'search']);
