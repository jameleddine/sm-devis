<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 06/07/15
 * Time: 15:01
 */

namespace App\Http\Controllers;


use Illuminate\View\View;

class HelloControler extends Controller {

    public function Helloworld(){

        return View('home');

    }
    public function about(){

        return View('about');

    }
    public function contact(){
        return View('contact');
    }

} 