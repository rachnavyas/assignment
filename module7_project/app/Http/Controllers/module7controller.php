<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class module7controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function view_aboutus()
   
    {   
        return view ('aboutus');
    
    }
    public function view_contactus()
   
    {   
        return view ('contactus');
    
    }

    /**
     * Display the specified resource.
     */
    public function register()
    {
        return view('registration');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function img()
    {
        
          return view('img_upload');
    }

    /**
     * Update the specified resource in storage.
     */
    public function store_img(Request $request)
    {
      
        return $request->file('file')->store('images');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
