<?php
/*
 * @Author: leogl leo_gl@163.com
 * @Date: 2022-10-26 14:51:33
 * @LastEditors: leogl leo_gl@163.com
 * @LastEditTime: 2022-10-26 22:26:54
 * @FilePath: \weibo\routes\web.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','StaticPagesController@home');
Route::get('/help','StaticPagesController@help');
Route::get('/about','StaticPagesController@about');
