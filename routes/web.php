<?php

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

//without controller
//    Route::get('adnan', function () {
//       return view('adnan');
//  });

//with controller
//Route::get('/adnan', 'AdnanController@adnan');//this is for adnan page


Route::get('/', 'UserController@index');//this is user home

//===========================About US============================

Route::get('/aboutus', 'About\AboutUsController@index');

//===========================About US============================

//=========================Start user Most Wanted===================
Route::get('most/wanted', 'MostWanted\UserMostWantedController@index');
//=========================End user Most Wanted===================

//===============================Contact===========================
Route::post('/save', 'UserController@save');
//===============================Contact===========================


//=========================Start user Profile===================
Route::get('dashboard/profile/edit', 'User\UserController@edit');
Route::get('dashboard/profile', 'User\UserController@profileView');
//=========================End Profile===================


//=========================Start Missing Goods===================
Route::get('goods', 'Missing\UserGoodsController@index');
Route::get('goods/{id}', 'Missing\UserGoodsController@goods_session');
//=========================End Missing Goods===================

//=========================Start Missing Person===================
Route::get('persons', 'Missing\UserPersonController@index');
Route::get('persons/search', 'Missing\UserPersonController@search');
//=========================End Missing Person===================


//=========================Start Blog===================
Route::get('blog', 'Blog\UserBlogController@index');
Route::get('blogPost/{id}', 'Blog\CategoryWiseController@index');
//=========================End Blog===================

//=========================Start Single Blog===================
Route::get('/blog/details/{id}', 'Blog\SingleBlogController@index');
//=========================End single Blog===================


//=========================End user History===================
Route::get('history', 'History\HistoryController@userhistory');
//=========================End user History===================

Route::group(['middleware' => 'auth'], function () {


//======================Start User Panel==========================
//=================================================================

//=========================Start Fir Registration===================
    Route::get('fir', 'Fir\FirController@index');
    Route::post('fir/save', 'Fir\FirController@save');
    Route::get('fir/show{id}', 'Fir\FirController@fir_details');

//=========================End Fir Registration===================

//=========================Start General Dairy===================
    Route::get('gd', 'Gd\GdController@index');
    Route::post('gd/save', 'Gd\GdController@save');
    Route::post('gd/edit', 'Gd\GdController@edit')->name('gd.edit');
    Route::get('gd/show{id}', 'Gd\GdController@show_details');
//=========================End General Dairy===================


//=========================Start Dashboard===================
    Route::get('dashboard', 'Dashboard\DashboardController@index');
    Route::post('dashboard/good', 'Dashboard\DashboardController@good_save');
    Route::post('dashboard/good/edit', 'Dashboard\DashboardController@good_edit');
    Route::post('dashboard/person', 'Dashboard\DashboardController@person_save');
    Route::post('dashboard/person/edit', 'Dashboard\DashboardController@person_edit');
//=========================End Dashboard===================




//======================End User Panel==========================






//======================Start Admin==========================
//===========================================================

    Route::group(['middleware' => ['admin']], function () {
        //admin index
        Route::get('/admin', 'AdminController@index');

//    // new email
//    Route::get('admin/new-email', function () {
//        return view('admin.email.newEmail');
//    });
//    // inbox email
//    Route::get('admin/inbox-email', function () {
//        return view('admin.email.inboxEmail');
//    });


//======================================Start Contact====================================


        Route::get('admin/contact/list', 'Contact\ContactController@admin_contact');
        Route::get('admin/contact/details{id}', 'Contact\ContactController@massage_details');
//======================================End Contact====================================

//==========================Start Blog =====================
        Route::get('admin/blog/list', 'Blog\AdminBlogController@index');
        Route::post('admin/blog/list/save', 'Blog\AdminBlogController@save');
        Route::post('admin/blog/list/edit', 'Blog\AdminBlogController@edit');
        Route::get('admin/blog/list/del{id}', 'Blog\AdminBlogController@del');
//===========================End Blog======================

//==========================Start Missing Goods=====================
        Route::get('admin/missing/goods', 'Missing\MissingGoodsController@index');
        Route::Post('admin/missing/goods/save', 'Missing\MissingGoodsController@save');
        Route::Post('admin/missing/goods/edit', 'Missing\MissingGoodsController@edit');
        Route::get('admin/missing/goods/del{id}', 'Missing\MissingGoodsController@del');
        Route::get('admin/missing/goods/show', 'Missing\MissingGoodsController@show');
        Route::get('admin/missing/goods/running', 'Missing\MissingGoodsController@running_goods');
        Route::get('admin/missing/goods/running/show{id}', 'Missing\MissingGoodsController@running');
        Route::get('admin/missing/goods/complete/', 'Missing\MissingGoodsController@completed_goods');
        Route::get('admin/missing/goods/complete/end{id}', 'Missing\MissingGoodsController@complete');
//===========================End Missing Goods======================

//=========================Start missing person=========================
        Route::get('admin/missing/person', 'Missing\MissingPersonController@index');
        Route::Post('admin/missing/person/save', 'Missing\MissingPersonController@save');
        Route::Post('admin/missing/person/edit', 'Missing\MissingPersonController@edit');
        Route::get('admin/missing/person/del{id}', 'Missing\MissingPersonController@del');
        Route::get('admin/missing/person/show', 'Missing\MissingPersonController@show');
        Route::get('admin/missing/person/running', 'Missing\MissingPersonController@running_person');
        Route::get('admin/missing/person/running/show{id}', 'Missing\MissingPersonController@running');
        Route::get('admin/missing/person/complete/', 'Missing\MissingPersonController@completed_person');
        Route::get('admin/missing/person/complete/end{id}', 'Missing\MissingPersonController@complete');

//=========================End missing Person===========================

//==========================Start Most Wanted=====================
        Route::get('admin/most/wanted/running', 'MostWanted\MostWantedController@index');
        Route::post('admin/most/wanted/save', 'MostWanted\MostWantedController@save');
        Route::post('admin/most/wanted/edit', 'MostWanted\MostWantedController@edit');
        Route::get('admin/most/wanted/del{id}', 'MostWanted\MostWantedController@del');
        Route::get('admin/most/wanted/show', 'MostWanted\MostWantedController@show');
        Route::get('admin/most/wanted/complete', 'MostWanted\MostWantedController@completed_mostwanted');
        Route::get('admin/most/wanted/complete/end{id}', 'MostWanted\MostWantedController@complete');
//===========================End Most Wanted======================

//==========================Start General Dairy=====================
        Route::get('admin/gd', 'Gd\AdminGdController@index');
        Route::get('admin/gd/del{id}', 'Gd\AdminGdController@del');
        Route::get('admin/gd/running/show{id}', 'Gd\AdminGdController@running');
        Route::get('admin/gd/running', 'Gd\AdminGdController@running_gd');
        Route::get('admin/gd/complete/end{id}', 'Gd\AdminGdController@complete');
        Route::get('admin/gd/complete', 'Gd\AdminGdController@complete_gd');
        Route::get('admin/gd/show{id}', 'Gd\AdminGdController@show_details');
//===========================End General Dairy======================

//==========================Start Fir Registration=====================
        Route::get('admin/fir', 'Fir\AdminFirController@index');
        Route::get('admin/fir/del{id}', 'Fir\AdminFirController@del');
        Route::get('admin/fir/running/show{id}', 'Fir\AdminFirController@running');
        Route::get('admin/fir/running', 'Fir\AdminFirController@running_fir');
        Route::get('admin/fir/complete/end{id}', 'Fir\AdminFirController@complete');
        Route::get('admin/fir/complete', 'Fir\AdminFirController@complete_fir');
        Route::get('admin/fir/details{id}', 'Fir\AdminFirController@fir_details');
//===========================End Fir Registration======================

// blog
        Route::get('admin/blog/create', function () {
            return view('blog.blogs');
        });

    });

//=============================End Admin==============================




//============================Start Super Admin==========================
    Route::group(['middleware' => ['superadmin']], function () {



    Route::get('/sadmin', 'MainController@index');

//==========================Start Blog Category=====================
    Route::get('sadmin/blog/category', 'Blog\BlogCategoryController@index');
    Route::post('sadmin/blog/category/save', 'Blog\BlogCategoryController@save');
    Route::post('sadmin/blog/category/edit', 'Blog\BlogCategoryController@edit');
    Route::get('sadmin/blog/category/del{id}', 'Blog\BlogCategoryController@del');
//===========================End Blog Category======================

//==========================Start Crime type=====================
    Route::get('sadmin/crime/category', 'CrimeType\CrimeTypeController@index');
    Route::post('sadmin/crime/category/save', 'CrimeType\CrimeTypeController@save');
    Route::post('sadmin/crime/category/edit', 'CrimeType\CrimeTypeController@edit');
    Route::get('sadmin/crime/category/del{id}', 'CrimeType\CrimeTypeController@del');
//===========================End Crime type======================

//==========================Start Division=====================
    Route::get('sadmin/division', 'Division\DivisionController@index');
    Route::post('sadmin/division/save', 'Division\DivisionController@save');
    Route::post('sadmin/division/edit', 'Division\DivisionController@edit');
    Route::get('sadmin/division/del{id}', 'Division\DivisionController@del');
//===========================End Division======================

//===========================Start Zila======================
    Route::get('sadmin/zila', 'Zila\ZilaController@index');
    Route::post('sadmin/zila/save', 'Zila\ZilaController@save');
    Route::post('sadmin/zila/edit', 'Zila\ZilaController@edit');
    Route::get('sadmin/zila/del{id}', 'Zila\ZilaController@del');
//===========================End Zila======================


//===========================Start Upazila======================
    Route::get('sadmin/upazila', 'Upazila\UpazilaController@index');
    Route::post('sadmin/upazila/save', 'Upazila\UpazilaController@save');
    Route::post('sadmin/upazila/edit', 'Upazila\UpazilaController@edit');
    Route::get('sadmin/upazila/del{id}', 'Upazila\UpazilaController@del');
//===========================End Upazila======================


//==========================Start Police Station=====================
    Route::get('sadmin/police/station', 'PoliceStation\PoliceStationController@index');
    Route::post('sadmin/police/station/save', 'PoliceStation\PoliceStationController@save');
    Route::post('sadmin/police/station/edit', 'PoliceStation\PoliceStationController@edit');
    Route::get('sadmin/police/station/del{id}', 'PoliceStation\PoliceStationController@del');
//===========================End Police Station======================


//==========================Start Gender=====================
    Route::get('sadmin/gender', 'Gender\GenderController@index');
    Route::post('sadmin/gender/save', 'Gender\GenderController@save');
    Route::post('sadmin/gender/edit', 'Gender\GenderController@edit');
    Route::get('sadmin/gender/del{id}', 'Gender\GenderController@del');
//===========================End Gender======================


//==========================Start Goods Category=====================
    Route::get('sadmin/goods/category', 'Goods\GoodsCategoryController@index');
    Route::post('sadmin/goods/category/save', 'Goods\GoodsCategoryController@save');
    Route::post('sadmin/goods/category/edit', 'Goods\GoodsCategoryController@edit');
    Route::get('sadmin/goods/category/del{id}', 'Goods\GoodsCategoryController@del');
//===========================End Goods Category======================

//==========================Start Goods SubCategory=====================
    Route::get('sadmin/goods/subcategory', 'Goods\GoodsSubcategoryController@index');
    Route::post('sadmin/goods/subcategory/save', 'Goods\GoodsSubcategoryController@save');
    Route::post('sadmin/goods/subcategory/edit', 'Goods\GoodsSubcategoryController@edit');
    Route::get('sadmin/goods/subcategory/del{id}', 'Goods\GoodsSubcategoryController@del');
//===========================End Goods SubCategory======================

//==========================Start User List=====================
    Route::get('sadmin/user/list', 'User\UserlistController@index');
    Route::get('sadmin/user/list/admin', 'User\UserlistController@userToAdmin');
    Route::get('sadmin/admin/list', 'User\UserlistController@adminList');
    Route::get('sadmin/user/list/del{id}', 'User\UserlistController@del');
//===========================End User List======================

//==========================Start History=====================
        Route::get('sadmin/history', 'History\HistoryController@index');
        Route::post('sadmin/history/save', 'History\HistoryController@save');
        Route::post('sadmin/history/edit', 'History\HistoryController@edit');
        Route::get('sadmin/history/del{id}', 'History\HistoryController@del');

//===========================End History======================


//======================================End Super Admin ===================================

});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
