<?php

namespace App\Http\Controllers\UserSide;
use App\Http\Controllers\Controller;
use App\Models\Reservations;
use App\Models\Playgrounds;
use App\Models\User;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id)
    {
        $Playgrounds = Playgrounds::findOrfail($id);
       
        return view('puplicUser.reservation',['Playgrounds'=>$Playgrounds]); 

    }
    public function create(Request $request,$id)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'max:10' ,'min:10'],
            'Start_date' => ['required'],
            'End_date' => ['required'],
        ]);


        $user=$request->user_id;
        $book = Reservations::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'playground_id' => $id,
            // 'desgin_id'=> $id,
        ]);
        $book->save();
        return view('puplicUser.contact'); 
        
    }


    public function profile($id)
    {
        $Users = User::findOrFail($id);
      
        return view('puplicUser.userprofile',['Users'=>$Users]);
    }


    public function profileEdit($id){

        $Users = User::findOrFail($id);

        return view('puplicUser.userprofileEdit',['Users'=>$Users]);
    }

    

    public function profileUpdate(Request $request,$id){
        $userEdit = User::findorFail($id);
        $userEdit->update($request->all());
        $ida= auth()->user()->id;
        return redirect()->route('profile',$ida);


}
    public function ReservstionEdit(Request $request,$id){


        $ReservationE = Reservations::findorFail($id);
        
           return view('puplicUser.userReservationEdit', compact('ReservationE'));
           
    }


    public function ReservstionUpdate(Request $request,$id){

      
        $reservation =  Reservations::findorFail($id);
        $reservation->update($request->all());
        $reservation->Status ='pending';
        $reservation->save();
        $ids= auth()->user()->id;
        // return redirect()->route('profile',$ids);
        // return view('puplicUser.userprofile', compact('ids'));
        return redirect()->route('profile',$ids);



    
}

}