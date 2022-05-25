Route::get('/', function () {
    return view('backend.admindashboard');
})->name('/');

Route::group(['prefix'=>'/admin'], function (){
// FOr Product
   Route::group(['prefix'=>'/product'], function (){
     Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');

     Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');

     Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('manage');

     Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');
     Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');
      Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@delete')->name('delete');
 });

// FOr Category
 Route::group(['prefix'=>'/category'], function (){
    Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->name('catstore');

     Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('catcreate');

     Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('catmanage');

     Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('catedit');
     Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->name('catshow');

     Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('catupdate');
     Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@delete')->name('catdelete');
  });
});
