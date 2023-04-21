<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(Request $request)
    {

        //validate new employee and store details to db
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required','email'],
            'phone_number' => ['required','string', 'max:255'],
            'position' => ['required','string', 'max:255'],
        ]);

        $data = $request->all();

        Member::create([
                'first_name' => $data['first_name'],
                'second_name' => $data['last_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'position' => $data['position']
            ]);

            session()->flash('success','Member Added Successfully');
            return redirect()->back();


    }

    public function getMembers(){

        $members = Member::all();
        return view('admin-dashboard.members',compact('members'));
    }


    public function deleteMember(Member $member){
        $member->delete();
        session()->flash('success','Member Deleted Successfully');
        return redirect()->back();
    }

}
