<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insert;

class InsertController extends Controller
{
    public function tableInsert(Request $request) {
       
        $Insert=new Insert;

        $Insert->tableNum=$request->tableNum;
        $Insert->CusName=$request->CusName;
        $Insert->NumofGuest=$request->NumofGuest;
        $Insert->date=$request->date;
        $Insert->time=$request->time;
        $Insert->Phone=$request->Phone;
        $Insert->occation=$request->occation;
        $Insert->AssignWaiter=$request->AssignWaiter;
        $Insert->Request=$request->Request;

        $Insert->save();
        
        $data=Insert::all();
   
        return view('ReservationDisplay')->with('display',$data);
    }

    public function tableUpdate($id) {

        $data=Insert::find($id);

        return view('UpdateReservation')->with('updatetasks', $data);
    }

    public function tableDBUpdate(Request $request) {

        $id=$request->id;
        $tableNum=$request->tableNum;
        $CusName=$request->CusName;
        $NumofGuest=$request->NumofGuest;
        $date=$request->date;
        $time=$request->time;
        $Phone=$request->Phone;
        $occation=$request->occation;
        $AssignWaiter=$request->AssignWaiter;
        $Request=$request->Request;
        
        $data=Insert::find($id);
        
        $data->tableNum=$tableNum;
        $data->CusName=$CusName;
        $data->NumofGuest=$NumofGuest;
        $data->date=$date;
        $data->time=$time;
        $data->Phone=$Phone;
        $data->occation=$occation;
        $data->AssignWaiter=$AssignWaiter;
        $data->Request=$Request;

        $data->save();

        $datas=Insert::all();
   
        return view('ReservationDisplay')->with('display',$datas);
    }

    public function tableDeleteData($id) {

        $data=Insert::find($id);
        $data->delete();

        $datas=Insert::all();
   
        return view('ReservationDisplay')->with('display',$datas);

    }
}
