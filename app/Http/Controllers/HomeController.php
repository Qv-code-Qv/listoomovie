<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

     public function index(Request $request){

        return view('home');

     }

}
