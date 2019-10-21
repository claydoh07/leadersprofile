<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Victorygroup;
use \App\Member;

class MembersController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function create($victorygroup)
    {   

    	return view('members.create', compact('victorygroup'));

    }


    public function store(Request $request)
    {

         $data = request()->validate([
            'vgId' => 'required',
            'name' => 'required',
            'contactNumber' => 'required',
            'one2One' => '',
            'victoryGroup' => '',
            'victoryWeekend' => '',
            'discipleshipClass' => '',
            'leadership113' => '',
        ]);

         $member = new Member();
         $member->victorygroup_id = $request->vgId;
         $member->name = $request->name;
         $member->contactNumber = $request->contactNumber;
         $member->one2One = $request->one2One;
         $member->victoryGroup = $request->victoryGroup;
         $member->victoryWeekend = $request->victoryWeekend;
         $member->discipleshipClass = $request->discipleshipClass;
         $member->leadership113 = $request->leadership113;
         $member->save();

         
        return redirect('/vg/' . $member->victorygroup_id );




 }
}
