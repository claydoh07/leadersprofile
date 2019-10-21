<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class VictoryGroupsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
    	//dd($user); 
    	//dd(User::find($user)); 
    	//$user = User::findOrFail(\App\User $user);
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = Cache::remember(
            'count.posts.'. $user->id, 
            now()->addSeconds(30), 
            function () use ($user){
                return $user->posts->count();
            });

        $followerCount = Cache::remember(
            'count.posts.'. $user->id, 
            now()->addSeconds(30), 
            function () use ($user){
                return $user->profile->followers->count();
            });
        
        $followingCount = Cache::remember(
            'count.posts.'. $user->id, 
            now()->addSeconds(30), 
            function () use ($user){
                return $user->following->count();
            });
        
        //dd($follows);
        return view('victorygroup.index' , compact('user', 'follows', 'postCount', 'followerCount', 'followingCount'));
        //	['user' => $user,
        //]);
    }

    public function create()
    {
    	return view('victorygroup.create');
    }

    public function store()
    {
        //dd(request()->all());
        $data = request()->validate([
            'name' => '',
            'type' => '',
            'description' => '',
            'image' => ['required','image'],
        ]);
        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->victorygroups()->create([
             'name' => $data['name'],
             'type' => $data['type'],
             'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return redirect('/victorygroup/' . auth()->user()->id);
    }

    public function show(User $user, \App\Victorygroup $victorygroup)
    {

        $members = Member::all()->where('victorygroup_id', $victorygroup->id)->ToArray();
        return view('victorygroup.show' , compact('victorygroup', 'members'));//, ['members' => $members]));
    }


}
