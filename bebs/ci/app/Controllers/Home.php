<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function about()
    {
        return view('about');
    }
    public function teashop()
    {
        return view('teashop');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function testimonies()
    {
        return view('testimonies');
    }
    public function contact()
    {
        return view('contact');
    }
    public function admin()
    {
        return view('admin');
    }
    
  
  
    
 
}
