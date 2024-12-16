<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

  public function index(){
    return view('welcome');
  }

  public function solution(){
    return view('solution');
  }

  public function contact(){
    return view('contact');
  }

  public function about(){
    return view('about');
  }

  public function service(){
    return view('service');
  }

  public function lang($locale)
  {
    if ($locale) {
      App::setLocale($locale);
      Session::put('lang', $locale);
      Session::save();
      return redirect()->back();
    } else {
      return redirect()->back();
    }
  }
}
