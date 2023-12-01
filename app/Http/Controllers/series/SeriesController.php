<?php

namespace App\Http\Controllers\Series;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class SeriesController extends Controller
{
        /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

     public function show(Request $request){

        return view('series.series');

     }

}
