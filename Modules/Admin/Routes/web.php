<?php
use Modules\Admin\Http\Controllers\AdminCategoryController;
use Modules\Admin\Http\Controllers\AdminProductController;
use Modules\Admin\Http\Controllers\AdminArticleController;
use Modules\Admin\Http\Controllers\AdminUserController;
use Modules\Admin\Http\Controllers\AdminCartController;
use Modules\Admin\Http\Controllers\AdminAuthController;
use Modules\Admin\Http\Controllers\Auth\LoginController;





Route::prefix('admin')->group(function() {

    //login admin
    Route::get('/login',   [LoginController::class, 'getLogin'])->name('admin.login');
    Route::post('/login',  [LoginController::class, 'postLogin']);

    Route::middleware('auth:admin')->group(function (){
        Route::get('/dashboad', 'AdminController@index')->name('admin');
        Route::get('/logout',       [LoginController::class, 'logOut'])->name('admin.logout');

        //CATEGORY
        $prefix = 'category';
        $controllerName = 'admin.category';
        Route::group(['prefix' => $prefix], function() use($controllerName){
            Route::get('/',             [AdminCategoryController::class, 'index'])->name($controllerName);
            Route::get('/create',       [AdminCategoryController::class, 'create'])->name($controllerName.'.create');
            Route::post('/store',       [AdminCategoryController::class, 'store']);
            Route::get('/update/{id}',  [AdminCategoryController::class, 'edit'])->name($controllerName.'.update');
            Route::post('/update/{id}', [AdminCategoryController::class, 'update']);
            Route::get('{action}/{id}', [AdminCategoryController::class, 'action'])->name($controllerName.'.action');
        });

        //PRODUCT
        $prefix = 'product';
        $controllerName = 'admin.product';   
        Route::group(['prefix' => $prefix], function() use($controllerName) {
            Route::get('/',             [AdminProductController::class, 'index'])->name('admin.product');
            Route::post('/',            [AdminProductController::class, 'index'])->name('admin.product');
            Route::get('/create',       [AdminProductController::class, 'create'])->name('admin.product.create');
            Route::post('store',        [AdminProductController::class, 'store']);
            Route::get('/update/{id}',  [AdminProductController::class, 'edit'])->name($controllerName.'.update');
            Route::post('/update/{id}', [AdminProductController::class, 'update']);
            Route::get('{action}/{id}', [AdminProductController::class, 'action'])->name($controllerName.'.action');

        });


        //Bài viết
        $prefix = 'article';
        $controllerName = 'admin.article';   
        Route::group(['prefix' => $prefix], function() use($controllerName) {
            Route::get('/',                [AdminArticleController::class, 'index'])->name('admin.article');
            Route::post('/',               [AdminArticleController::class, 'index']);
            Route::get('/create',          [AdminArticleController::class, 'create'])->name($controllerName.'.create');
            Route::post('store',           [AdminArticleController::class, 'store']);
            Route::get('/update/{id}',     [AdminArticleController::class, 'edit'])->name($controllerName.'.update');
            Route::post('/update/{id}',    [AdminArticleController::class, 'update']);
            Route::get('{action}/{id}',    [AdminArticleController::class, 'action'])->name($controllerName.'.action');

        });





        //user
        $prefix = 'user';
        $controllerName = 'admin.user';   
        Route::group(['prefix' => $prefix], function() use($controllerName) {
            Route::get('/',                   [AdminUserController::class, 'index'])->name('admin.user');
            // Route::post('/',               [AdminArticleController::class, 'index']);
            Route::get('/create',             [AdminUserController::class, 'create'])->name($controllerName.'.create');
            Route::post('store',              [AdminUserController::class, 'store']);
            Route::get('/update/{id}',        [AdminUserController::class, 'edit'])->name($controllerName.'.update');
            Route::post('/update/{id}',       [AdminUserController::class, 'update']);
            Route::get('{action}/{id}',       [AdminUserController::class, 'action'])->name($controllerName.'.action');

        });


        //ĐƠN HÀNG
        $prefix = 'cart';
        $controllerName = 'admin.cart';   
        Route::group(['prefix' => $prefix], function() use($controllerName) {
            Route::get('/',                   [AdminCartController::class, 'index'])->name('admin.cart');
            Route::get('view/{id}',           [AdminCartController::class, 'viewCart'])->name('admin.view');
            // Route::post('/',               [AdminArticleController::class, 'index']);
            // Route::get('/create',          [AdminArticleController::class, 'create'])->name($controllerName.'.create');
            // Route::post('store',           [AdminArticleController::class, 'store']);
            // Route::get('/update/{id}',     [AdminArticleController::class, 'edit'])->name($controllerName.'.update');
            // Route::post('/update/{id}',    [AdminArticleController::class, 'update']);
            Route::get('{action}/{id}',       [AdminCartController::class, 'action'])->name($controllerName.'.action');

        });




    });








});
