<?php
/**
 * Xử lý định tuyến 
 * 
 * PHP version 7
 * 
 * @category Qtht
 * @package  Routes/web
 * @author   Huy <huygakinh113@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/
 */
use App\lichsu;
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

Route::get(
    '/', 
    function () {
        return view('welcome');
    }
);
Route::group(
    ['prefix'=>'kiemtra'], 
    function () {
        Route::get(
            'list', 
            function () {
                $lists=lichsu::paginate(10);
                foreach ($lists as $list) {
                    echo $list->ten.'</br>';
                }
            }
        );
        Route::get(
            'delete/{id}', 
            function ($id) {
                $del=lichsu::find($id);
                $del->delete();
            }
        );
        Route::get(
            'chunk', 
            function () {
                lichsu::chunk(
                    7,
                    function ($phans) {
                        foreach ( $phans as $phan ) {
                            echo $phan->ten.'</br>';
                        }
                        echo '</br>';
                    }
                );
            }
        );
    }
);
Route::get(
    'test',
    'MyController@getList'
);
Route::post(
    'postTest',
    'MyController@getList'
);
Route::get(
    'testvd', 
    function () {
        return view('testvd');
    }
);
Route::get(
    'lampp', 
    function () {
        return view('lampp');
    }
); 
Route::get(
    'lampp2', 
    function () {
        return view('Lampp2');
    }
); 
Route::post(
    'postSlide',
    [
        'as'=>'lampp', 
        function () {
            return view('lampp');
        }
    ]
);
Route::get(
    'add', 
    function () {
        return view('add');
    }
);
Auth::routes();
Route::group(
    ['prefix'=>'admin'], 
    function () {
        Route::get(
            'home', 
            'HomeController@index'
        )->name('home');
        Route::get(
            'chart', function () {
                return view('admin.chart');
            }
        );
        Route::post(
            'add', 
            'HomeController@getCreate'
        )->name('add');
        Route::get(
            'edit/{id}', 
            'HomeController@getEdit'
        );
        Route::post(
            'postedit', 
            'HomeController@getSaveEdit'
        )->name('edit');
        Route::get(
            'delete/{id}', 
            'HomeController@getDelete'
        )->name('delete');   
    }
);
Route::get(
    'view', 
    function () {
        $ten='huy';
        return view('viewad', compact('ten'));
    }
);
Route::get(
    'viewtest',
    function () {
        return view('vidutest', ['ten'=>'hung']);
    }
);
Route::post(
    'postvd',
    'MyController@getVidu'
);

