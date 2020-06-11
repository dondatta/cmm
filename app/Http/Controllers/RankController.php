<?php

namespace App\Http\Controllers;

use App\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranks = rank::latest()->paginate(5);



        return view('ranks.index',compact('ranks'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ranks.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'networth' => 'required',
            'detail' => 'required',
            'cat' => 'required',
        ]);



        Rank::create($request->all());



        return redirect()->route('ranks.index')

            ->with('success','Rank created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function show(Rank $rank)
    {
        return view('ranks.show',compact('rank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function edit(Rank $rank)
    {
        return view('ranks.edit',compact('rank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rank $Rank)
    {
        $request->validate([

            'name' => 'required',
            'networth' => 'required',
            'cat' => 'required',
            'detail' => 'required',
        ]);



        $Rank->update($request->all());



        return redirect()->route('ranks.index')

            ->with('success','Rank updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rank $rank)
    {
        $rank->delete();



        return redirect()->route('ranks.index')

            ->with('success','Rank deleted successfully');

    }
}
