<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // routing the service pages
    public function index() {
        $say = 'Enjoy your stay on my website';
        // return view('pages.index', compact('say')); // include arrays of var to use
        return view('pages.index')->with('title', $say); // add a string of data to view using a variable {varriable as a key for the array, value assigned to key}
    } 

    public function about(){
        $data = array(
            'programmer' => 'Quan',
            'owner' => ['Jyri', 'Ali', 'Jari'],
            'supervisor' => 'Joni'
        );
        return view('pages.about') -> with($data); 
    } 

    public function signin(){
        return view('pages.signin');
    }

}
