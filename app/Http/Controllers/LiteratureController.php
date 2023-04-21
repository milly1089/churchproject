<?php

namespace App\Http\Controllers;

use App\Models\Literature;
use Illuminate\Http\Request;

class LiteratureController extends Controller
{


    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function getLiteratures()
    {
        $literatures = Literature::all();
        return view('admin-dashboard.literature')->with(['literatures' => $literatures]);
    }


     /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function getLiteratureForFrentEnd()
    {
        $literatures = Literature::all();
        return view('literature')->with(['literatures' => $literatures]);
    }


     /**
     * add a Gallery Image to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addLiterature(Request $request)
    {   

        $this->validate($request, [
            'literature' => 'required',
            'cover_page' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $data = $request->all();
        $cover_page = '';

        //upload testimony image
        if(($request->hasfile('literature')) && ($request->literature != null))
        {

            //upload cover image
            if(($request->hasfile('cover_page')) && ($request->cover_page != null))
            {

                $cover_page = $request->cover_page->getClientOriginalName();
                $request->cover_page->move(public_path().'/assets/literature_cover_page/', $cover_page);
                $name = $request->literature->getClientOriginalName();
                $request->literature->move(public_path().'/assets/literature/', $name);

                Literature::create([
                    'category' => $data['literature_category'],
                    'quater' => $data['quater'],
                    'year' => $data['year'],
                    'author' => $data['author'], 
                    'cover_page' => $cover_page ? $cover_page :"default_cover_page.jpg",             
                    'literature_url' => $name,
                    ]);
                    
                    session()->flash('success','Literature Added Successfully');
                    return redirect()->back();
            }
            else
            {
                $cover_page = '';
                $name = $request->literature->getClientOriginalName();
                $request->literature->move(public_path().'/assets/literature/', $name);

                Literature::create([
                    'category' => $data['literature_category'],
                    'quater' => $data['quater'],
                    'year' => $data['year'],
                    'author' => $data['author'], 
                    'cover_page' => $cover_page ? $cover_page :"default_cover_page.jpg",             
                    'literature_url' => $name,
                    ]);
                    
                    session()->flash('success','Literature Added Successfully');
                    return redirect()->back();
            }

          
      
        }
        else
        {

            session()->flash('success','Please Choose a literature');
            return redirect()->back();

        }

        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function show(Literature $literature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function edit(Literature $literature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Literature $literature)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Literature  $literature
     * @return  View $view
     */
    public function deleteLiterature(Literature $literature)
    {
        $literature->delete();
        session()->flash('success','Literature Deleted Successfully');
        return redirect()->back();
    }

 
}
