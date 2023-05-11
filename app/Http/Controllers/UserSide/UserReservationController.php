<?php

namespace App\Http\Controllers\UserSide;
use App\Http\Controllers\Controller;
use App\Models\UserReservation;
use App\Models\Playgrounds;
use Illuminate\Http\Request;

class UserReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'max:10' ,'min:10'],
            'Start_date' => ['required'],
            'End_date' => ['required'],
        ]);

dd($request->user_id);
        $data = Playgrounds::findOrfail($id);
      
// dd($price);
        $user=$request->user_id;
        UserReservation::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'number_of_guest' => $request->guest_number,
            'res_date' => $request->res_date,
            'comment' => $request->comment,
            'status' => 'Pending',
            'trip_id' => $id,


        ]);

        return redirect()->route('user.profile.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReservation  $userReservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Playgrounds = Playgrounds::findOrfail($id);
        // dd($Playgrounds);
        return view('puplicUser.reservation',['Playgrounds'=>$Playgrounds]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReservation  $userReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReservation $userReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReservation  $userReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReservation $userReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReservation  $userReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReservation $userReservation)
    {
        //
    }
}
