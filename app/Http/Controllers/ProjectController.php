<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
     * add a Project to the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addProject(Request $request)
    {   
           
           //validate new project and store details to db
           $request->validate([
            'project_name' => ['required', 'string', 'max:255'],
            'project_description' => ['required', 'string', 'max:255'],
            'project_status' => ['required', 'string', 'max:255'],
            ]);

           $data = $request->all();

          //upload testimony image
          if(($request->hasfile('project_photo')) && ($request->project_photo != null))
          {

            $name = $request->project_photo->getClientOriginalName();
            $request->project_photo->move(public_path().'/project-pictures/', $name);

            Project::create([
                'project_name' => $data['project_name'],
                'project_description' => $data['project_description'],
                'project_status' => $data['project_status'],
                'project_photo_url' => $name
                ]);
                
                session()->flash('success','Project Added Successfully');
                return redirect()->back();
        
          }
          else
          {

            //if no image was selected revert to default image
            Project::create([
                'project_name' => $data['project_name'],
                'project_description' => $data['project_description'],
                'project_status' => $data['project_status'],
                'project_photo_url' => $name
                ]);

              session()->flash('success','Project Added Successfully');
              return redirect()->back();


          }
        
    }

   


    /**
     * Display the specified resource. -> to be used on account page
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function getProjects()
    {
        $projects = Project::all();
        return view('admin-dashboard.projects')->with(['projects' => $projects]);
    }

    /**
     * Display the specified resource. -> to be used on project page
     * @return View $view
     */
    public function getProjectsForProjectsPage()
    {
        $projects = Project::all();
        return view('projects')->with(['projects' => $projects]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function deleteProject(Project $project)
    {
        $project->delete();
        
        session()->flash('success','Project Deleted Successfully');
        return redirect()->back();
        
    }


}
