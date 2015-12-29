<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class public_view_controller extends Controller
{
    public function index(){

        return view('index');
        
    }
    
    public function about(){
        
        return view('about');
        
    }
    
    public function gallery(){
        
        return view('gallery');
        
    }
    
    public function contact(){
        
        return view('contact');
        
    }
    
    public function teachers(){
        
        return view('teachers');
        
    }
    
    public function publication(){
        
        return view('publication');
        
    }
    
}
