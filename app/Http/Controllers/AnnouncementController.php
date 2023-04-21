<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
   
    /**
     * Display the specified resource. -> announcements
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function getAnnouncements()
    {
        $announcements = Announcement::all();
        return view('admin-dashboard.announcements')->with(['announcements' => $announcements]);
    }


     /**
     * Display the specified resource. -> announcements
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function getAnnouncementsForAnnouncementsPage()
    {
        $announcements = Announcement::all();
        return view('announcements')->with(['announcements' => $announcements]);
    }



    /**
     * add an Announcement to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addAnnouncement(Request $request)
    {   
           
           //validate new employee and store details to db
           $request->validate([
            'announcement_date' => ['required', 'string', 'max:255'],
            'announcement' => ['required', 'string', 'max:255'],
            ]);


           $data = $request->all();

           Announcement::create([
            'date' => $data['announcement_date'],
            'announcement' => $data['announcement'],
           ]);

           session()->flash('success','Announcement Added Successfully');
           return redirect()->back();

    
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function deleteAnnouncement(Announcement $announcement)
    {
        $announcement->delete();
        session()->flash('success','Announcement Deleted Successfully');
        return redirect()->back();
    }
}
