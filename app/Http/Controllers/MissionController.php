<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
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
     * add an Announcement to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addMission(Request $request)
    {   

           //validate new employee and store details to db
           $request->validate([
            'mission_start_date' => ['required', 'string', 'max:255'],
            'mission_end_date' => ['required', 'string', 'max:255'],
            'mission_description' => ['required', 'string', 'max:255'],

            ]);


           $data = $request->all();

           Mission::create([
            'mission_start_date' => $data['mission_start_date'],
            'mission_end_date' => $data['mission_end_date'],
            'mission_description' => $data['mission_description'],
           ]);

           session()->flash('success','Mission Added Successfully');
           return redirect()->back();

    
        }

     /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function getMissions()
    {
        $missions = Mission::all();
        return view('admin-dashboard.missions')->with(['missions' => $missions]);
    }

     /**
     * Display the specified resource. -> to be used on mission page
     * 
     * @return View $view
     */
    public function getMissionsForMissionPage()
    {
        $missions = Mission::all();
        return view('mission')->with(['missions' => $missions]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

  /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function deleteMission(Mission $mission)
    {
        $mission->delete();
        session()->flash('success','Mission Deleted Successfully');
        return redirect()->back();
        
    }
}
