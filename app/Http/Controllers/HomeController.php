<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLanguage()
    {
        //dd("taher");
        app()->setLocale(request('locale'));
        session()->put('locale', request('locale'));
       // $locale = app()->getLocale();
        //dd($locale);
        return redirect()->back();
    }
}
