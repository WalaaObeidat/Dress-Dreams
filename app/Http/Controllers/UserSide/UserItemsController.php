<?php

namespace App\Http\Controllers\UserSide;
use App\Http\Controllers\Controller;
use App\Models\Playgrounds;
use App\Models\Categories;
use App\Models\UserItems;
use Illuminate\Http\Request;

class UserItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Playgrounds = Playgrounds::get();
        $categories = Categories::findOrFail($id);
        // dd($categories);
        // dd(foreach($categories as $categorie));

        return view('puplicUser.fields',compact('Playgrounds'));
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
     * @param  \App\Models\UserItems  $userItems
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    // $desgin = Categories::findorFail($id);
    $Playgrounds = Playgrounds::where('category_id',$id)->get();

 

    return view('puplicUser.fields',compact('Playgrounds'));
      
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserItems  $userItems
     * @return \Illuminate\Http\Response
     */
    public function edit(UserItems $userItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserItems  $userItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserItems $userItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserItems  $userItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserItems $userItems)
    {
        //
    }
}
