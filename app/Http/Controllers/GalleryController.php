<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View $view
     */
    public function getGalleryImages()
    {

        $gallery_images = Gallery::all();
        return view('admin-dashboard.admgallery')->with(['gallery_images' => $gallery_images ]);
    
    }

    /**
     * add a Gallery Image to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addGalleryImage(Request $request)
    {   
       
        $data = $request->all();

        //upload testimony image
        if(($request->hasfile('picture')) && ($request->picture != null))
        {

          $name = $request->picture->getClientOriginalName();
          $request->picture->move(public_path().'/assets/img/', $name);

          Gallery::create([
              'year' => $data['picture_year'],
              'picture_url' => $name,
            ]);
              
              session()->flash('success','Gallery Image Added Successfully');
              return redirect()->back();
      
        }
        else
        {

            session()->flash('success','Please Choose an Image');
            return redirect()->back();


        }
        
    }


    
    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Gallery  $gallery
     * @return View $view
     */
    public function getImagesForGalleryPage()
    {
        $galleryimages = Gallery::all();
        return view('gallery')->with(['galleryimages' => $galleryimages]);
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
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return  View $view
     */
    public function deleteGalleryImage(Gallery $gallery)
    {
        $gallery->delete();
        
        session()->flash('success','Gallery Image Deleted Successfully');
        return redirect()->back();
    }
}
