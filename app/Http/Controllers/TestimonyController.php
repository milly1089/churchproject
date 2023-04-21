<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
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
     * add a Testimony to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addTestimony(Request $request)
    {   
           
           //validate new employee and store details to db
           $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'testimony_description' => ['required', 'string', 'max:255'],
            ]);

           $data = $request->all();

          //upload testimony image
          if(($request->hasfile('testimony_picture')) && ($request->testimony_picture != null))
          {

            $name = $request->testimony_picture->getClientOriginalName();
            $request->testimony_picture->move(public_path().'/testimony-pictures/', $name);

            Testimony::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'testimony_description' => $data['testimony_description'],
                'picture_url' => $name
                ]);
                
                session()->flash('success','Testimony Added Successfully');
                return redirect()->back();
        
          }
          else
          {

            //if no image was selected revert to default image
            Testimony::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'testimony_description' => $data['testimony_description'],
                'picture_url' => 'default_testimony_image.png'
                ]);

              session()->flash('success','Testimony Added Successfully');
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
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function getTestimoniesForAboutPage()
    {
        $testimonies = Testimony::all();
        return view('about')->with(['testimonies' => $testimonies]);
    }


    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function getTestimonies()
    {
        $testimonies = Testimony::all();
        return view('admin-dashboard.testimonies')->with(['testimonies' => $testimonies]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function deleteTestimony(Testimony $testimony)
    {
        $testimony->delete();
        
        session()->flash('success','Testimony Deleted Successfully');
        return redirect()->back();
    }
}
