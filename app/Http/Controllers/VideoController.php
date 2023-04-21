<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function getVideosForFrentEnd()
    {
        $videos = Video::all();
        return view('video-page')->with(['videos' => $videos]);
    }


    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function getVideos()
    {
        $videos = Video::all();
        return view('admin-dashboard.video')->with(['videos' => $videos]);
    }




     /**
     * add a Gallery Image to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addVideo(Request $request)
    {   

        $data = $request->all();

        //upload testimony image
        if(($request->hasfile('video')) && ($request->video != null))
        {

          $name = $request->video->getClientOriginalName();
          $request->video->move(public_path().'/assets/video/', $name);

          Video::create([
              'category' => $data['video_category'],
              'video_url' => $name,
            ]);
              
              session()->flash('success','Video Added Successfully');
              return redirect()->back();
      
        }
        else
        {

            session()->flash('success','Please Choose a video');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }



   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return  View $view
     */
    public function deleteVideo(Video $video)
    {
        $video->delete();
        
        session()->flash('success','Video Deleted Successfully');
        return redirect()->back();
    }
}
