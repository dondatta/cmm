<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use DB;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()) );

    }
    public function profilebg(){
        return view('profilebg', array('user' => Auth::user()) );
    }
    public function update_cover(Request $request){

        //dd($request);
        // Handle the user upload of avatar
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $filename = time() . '.' . $cover->getClientOriginalExtension();
            Image::make($cover)->resize(828, 315)->save( public_path('/uploads/covers/' . $filename ) );

            $user  = Auth::user();
            $user->cover = $filename;
            $user->save();

            //$profiles = Profile::all();
            $user = DB::table('users')
                ->join('profiles', 'users.id', '=', 'profiles.user_id')
                ->select('profiles.*', 'users.avatar','users.cover')
                ->get();

        }
        else echo "nothing here";

        return view('profiles.index', compact('user'));

    }
}
