<?php
/*
 * @Author: leogl leo_gl@163.com
 * @Date: 2022-10-26 22:22:11
 * @LastEditors: leogl leo_gl@163.com
 * @LastEditTime: 2022-10-26 22:31:26
 * @FilePath: \weibo\app\Http\Controllers\StaticPagesController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        //return '主页';
        return view('static_pages/home');
    }

    public function help()
    {
        //return '帮助页';
        return view('static_pages/help');
    }

    public function about()
    {
        //return '关于页';
        return view('static_pages/about');
    }
}
