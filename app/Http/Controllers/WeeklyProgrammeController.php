<?php

namespace App\Http\Controllers;

use App\Models\WeeklyProgramme;
use Illuminate\Http\Request;

class WeeklyProgrammeController extends Controller
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
    public function addWeeklyProgramme(Request $request)
    {   

           //validate new weekly programme and store details to db
           $request->validate([
            'programme_start_date' => ['required', 'string', 'max:255'],
            'programme_end_date' => ['required', 'string', 'max:255'],
            'programme_name' => ['required', 'string', 'max:255'],
            'invited_guests' => ['required', 'string', 'max:255']

            ]);


           $data = $request->all();

           WeeklyProgramme::create([
            'start_date' => $data['programme_start_date'],
            'end_date' => $data['programme_end_date'],
            'programme_name' => $data['programme_name'],
            'invited_guest' => $data['invited_guests'],
           ]);

       
           session()->flash('success','Weekly programme Added Successfully');
           return redirect()->back();

    
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
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\WeeklyProgramme  $weeklyProgramme
     * @return \Illuminate\Http\Response
     */
    public function getWeeklyProgrammes()
    {
        $weeklyProgrammes = WeeklyProgramme::all();
        return view('admin-dashboard.weekly-programme')->with(['weeklyProgrammes' => $weeklyProgrammes]);
    }


      /**
     * Display the specified resource. -> to be used on project page
     * @return View $view
     */
    public function getWeeklyProgrammesForWeeklyProgrammesPage()
    {
        $weeklyProgrammes = WeeklyProgramme::all();
        return view('weeklyprogramme')->with(['weeklyProgrammes' => $weeklyProgrammes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeeklyProgramme  $weeklyProgramme
     * @return \Illuminate\Http\Response
     */
    public function edit(WeeklyProgramme $weeklyProgramme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeeklyProgramme  $weeklyProgramme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeeklyProgramme $weeklyProgramme)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeeklyProgrammes  $weeklyProgrammes
     * @return \Illuminate\Http\Response
     */
    public function deleteWeeklyProgramme(WeeklyProgramme $weeklyprogramme)
    {
        $weeklyprogramme->delete();
        session()->flash('success','WeeklyProgramme Deleted Successfully');
        return redirect()->back();
        
    }
}
