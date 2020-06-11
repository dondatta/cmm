<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use DB;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Handle the user upload of avatar
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $filename = time() . '.' . $cover->getClientOriginalExtension();
            Image::make($cover)->resize(828, 315)->save( public_path('/uploads/covers/' . $filename ) );

            $userc  = Auth::user();
            $userc->cover = $filename;
            $userc->save();
        }
        //$profiles = Profile::all();
        $user = DB::table('users')
            ->join('profiles', 'profiles.user_id', '=', 'users.id')
            ->select('profiles.*', 'users.avatar','users.cover','users.name')
            ->where('users.id','=',Auth::id())
            ->get();
            //dd($user);

        return view('profiles.index', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$user =  Auth::id();
        return view('profiles.create', array('user' => Auth::user()) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $id = Auth::id();
        $profile = new Profile;
        $profile->user_id = $id;
        $profile->gender = $request->gender;
        $profile->skincolor = $request->skincolor;
        $profile->haircolor = $request->haircolor;
        $profile->hairlength = $request->hairlength;
        $profile->eyecolor = $request->eyecolor;
        $profile->tattoos = $request->tattoos;
        $profile->piercing = $request->piercings;
        $profile->cup = $request->cup;
        $profile->bust = $request->bust;
        $profile->hips = $request->hips;
        $profile->dress = $request->dress;
        $profile->waist = $request->waist;
        $profile->shoe = $request->shoe;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->ethnicity = $request->ethnicity;
        $profile->compensation = $request->compensation;
        $profile->experience = $request->experience;
        $profile->acting = $request->check_0_0;
        $profile->art = $request->check_0_1;
        $profile->bodypaint = $request->check_0_2;
        $profile->cosplay = $request->check_0_3;
        $profile->dance = $request->check_0_4;
        $profile->editorial = $request->check_0_5;
        $profile->erotic = $request->check_0_6;
        $profile->fashion = $request->check_1_0;
        $profile->fetish = $request->check_1_1;
        $profile->fitmodeling = $request->check_1_2;
        $profile->fitness = $request->check_1_3;
        $profile->glamour = $request->check_1_4;
        $profile->hairmakeup = $request->check_1_5;
        $profile->lifestyle = $request->check_1_6;
        $profile->lingerie = $request->check_2_0;
        $profile->parts = $request->check_2_1;
        $profile->performance = $request->check_2_2;
        $profile->pinup = $request->check_2_3;
        $profile->pregnancy = $request->check_2_4;
        $profile->promotional = $request->check_2_5;
        $profile->runway = $request->check_2_6;
        $profile->spokesperson = $request->check_3_0;
        $profile->sports = $request->check_3_1;
        $profile->stunt = $request->check_3_2;
        $profile->swimwear = $request->check_3_3;
        $profile->underwater = $request->check_3_4;
        $profile->save();

        return redirect('profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);

        return view('profiles.show', compact('profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);

        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $profile = Profile::find($id);
        $profile->gender = $request->gender;
        $profile->skincolor = $request->skincolor;
        $profile->haircolor = $request->haircolor;
        $profile->hairlength = $request->hairlength;
        $profile->eyecolor = $request->eyecolor;
        $profile->tattoos = $request->tattoos;
        $profile->piercing = $request->piercings;
        $profile->cup = $request->cup;
        $profile->bust = $request->bust;
        $profile->hips = $request->hips;
        $profile->dress = $request->dress;
        $profile->waist = $request->waist;
        $profile->shoe = $request->shoe;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->ethnicity = $request->ethnicity;
        $profile->compensation = $request->compensation;
        $profile->experience = $request->experience;
        $profile->acting = $request->check_0_0;
        $profile->art = $request->check_0_1;
        $profile->bodypaint = $request->check_0_2;
        $profile->cosplay = $request->check_0_3;
        $profile->dance = $request->check_0_4;
        $profile->editorial = $request->check_0_5;
        $profile->erotic = $request->check_0_6;
        $profile->fashion = $request->check_1_0;
        $profile->fetish = $request->check_1_1;
        $profile->fitmodeling = $request->check_1_2;
        $profile->fitness = $request->check_1_3;
        $profile->glamour = $request->check_1_4;
        $profile->hairmakeup = $request->check_1_5;
        $profile->lifestyle = $request->check_1_6;
        $profile->lingerie = $request->check_2_0;
        $profile->parts = $request->check_2_1;
        $profile->performance = $request->check_2_2;
        $profile->pinup = $request->check_2_3;
        $profile->pregnancy = $request->check_2_4;
        $profile->promotional = $request->check_2_5;
        $profile->runway = $request->check_2_6;
        $profile->spokesperson = $request->check_3_0;
        $profile->sports = $request->check_3_1;
        $profile->stunt = $request->check_3_2;
        $profile->swimwear = $request->check_3_3;
        $profile->underwater = $request->check_3_4;
        $profile->save();

        return redirect('profiles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();

        return redirect('profiles');
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

    	return view('profiles.create', array('user' => Auth::user()) );

    }


}
