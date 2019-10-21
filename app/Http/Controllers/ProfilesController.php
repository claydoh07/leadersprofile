<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

class ProfilesController extends Controller
{
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
        return view('profiles.index' , compact('user', 'follows', 'postCount', 'followerCount', 'followingCount'));
        //	['user' => $user,
        //]);
    }
    public function edit(User $user)
    {
    	//dd($user); 
    	//dd(User::find($user)); 
    	//$user = User::findOrFail($user);
    	$this->authorize('update', $user->profile);

        return view('profiles.edit' , compact('user'));
    }
    public function show(User $user)
    {
        //dd($user); 
        //dd(User::find($user)); 
        //$user = User::findOrFail($user);

        return view('profiles.show' , compact('user'));
    }

    public function update(User $user)
    {
    	//dd($user); 
    	//dd(User::find($user)); 
    	//$user = User::findOrFail($user);

    	$this->authorize('update', $user->profile);

    	$data = request()->validate([

            'address' => '',
            'birthday' => '',
            'gender' => '',
            'primaryNumber' => '',
            'secondaryNumber' => '',
            'civilStatus' => '',
            'peopleGroup' => '',
            'weddingAnniversary' => '',
            'victoryWeekendDate' => '',
            'facebook' => '',
            'serviceAttended' => '',

            'one2One' => '',
            'victoryWeekend' => '',
            'leadership113' => '',
            'victoryGroup' => '',
            'discipleshipClass' => '',
            'discipleshipCoaching' => '',

            'primaryMinistry' => '',
            'secondaryMinistry' => '',

    		'title' => '',
    		'description' => '',
    		'url' => '',
    		'image' => '',
    	]);
    	//return view('profiles.edit' , compact('user'));
    	//dd($data);

    	if(request('image'))
    	{
    		$imagePath = request('image')->store('profile', 'public');

    		$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
       		$image->save();

       		$imageArray = ['image' => $imagePath];
    	}

    	//dd(array_merge($data,['image' => $imagePath]));  
    	auth()->user()->profile->update(array_merge($data, $imageArray ?? []));
    
    	//dd($data);	
    	return redirect("/profile/{$user->id}/show");
    }
}
