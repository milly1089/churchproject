<?php

namespace App\Http\Controllers;

use App\Models\Bulletin;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;


class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * add a Bulletin to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addBulletin(Request $request)
    {   
           
          //upload bulletin image
          if(($request->hasfile('bulletin')) && ($request->bulletin != null))
          {
            
            //clear all bulletins before uploading a new one
            $file = new Filesystem;
            $file->cleanDirectory(public_path().'/bulletin-files/');
            Bulletin::query()->delete();

            $name = $request->bulletin->getClientOriginalName();
            $request->bulletin->move(public_path().'/bulletin-files/', $name);

            Bulletin::create([
                'bulletin_url' => $name  
                ]);
                
                session()->flash('success','Bulletin Uploaded Successfully');
                return redirect()->back();
        
          }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function getBulletins()
    {
        $bulletins = Bulletin::all();
        return view('admin-dashboard.bulletin')->with(['bulletins' => $bulletins]);
    }


    //get bulletin to be used in the frontend
    public static function getBulletinURL()
    {
        return Bulletin::all()[0]->bulletin_url;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bulletin $bulletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bulletin $bulletin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bulletin  $bulletin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bulletin $bulletin)
    {
        //
    }
}
