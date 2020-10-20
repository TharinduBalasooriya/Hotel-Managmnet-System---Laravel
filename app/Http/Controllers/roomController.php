<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room_reservation;
use PDF;
class roomController extends Controller
{
    public function save(Request $request){

        $room = new room_reservation;
        $room->customerName = $request->name;
        $room->NIC = $request->nic;
        $room->email = $request->email;
        $room->mobile = $request->mobile;
        $room->roomID = $request->rName;
        $room->roomName = $request->roomName;
        $room->roomCharge = $request->price;
        $room->check_in = $request->cidate;
        $room->check_out = $request->codate;
        $room->save();
        return view('roomsinterface');



    }


    public function viewAll(){

        $allData = room_reservation::all();

        return view('showmemberbookingdetails')->with('cus',$allData);
    }

    public function delete(Request $request){

        $room = room_reservation::find($request->id);

        $room ->delete();
        
        $allData = room_reservation::all();
      

        return view('showmemberbookingdetails')->with('cus',$allData);


    }
    public function view(Request $request){
        $room = room_reservation::find($request->id);

        return view('editReservation')->with('cus',$room);

    }

    public function update(Request $request){

        $room = room_reservation::find($request->id);

        $room->customerName = $request->name;
        $room->NIC = $request->nic;
        $room->email = $request->email;
        $room->mobile = $request->mobile;
        $room->roomID = $request->rName;
        $room->roomName = $request->roomName;
        $room->roomCharge = $request->price;
        $room->check_in = $request->cidate;
        $room->check_out = $request->codate;
        $room->save();

        return redirect()->action('roomController@viewAll');

    }

    public function getAllReservations(){

    $room = room_reservation::all();
    return view('room', compact('room'));  

    }

    public function downloadRoomReport(){

        $room = room_reservation::all();
        $pdf = PDF::loadView('getReservationReport', compact ('room'));
        return $pdf->download('room_report.pdf');


    }

}
