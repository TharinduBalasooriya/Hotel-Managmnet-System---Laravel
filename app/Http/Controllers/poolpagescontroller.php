<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class poolpagescontroller extends Controller
{
    public function indexaboutpool(){
        return view('swimmingpool');
    }


    public function indexpoolreg(){
        return view('poolmemberReg');
    }


    public function indexticketissue(){
        return view('poolticketIssue');
    }

    public function Insert(Request $request){


         $Task=new Task;

         $this->validate($request,[

            'firstName'=>'required|max:30|min:3',
            'lastName'=>'required|max:30|min:3',
            'age'=>'required|max:3|min:1',
            'contactNumber'=>'required|max:10',
            

         ]);

         

        $Task->firstName=$request->firstName;
        $Task->lastName=$request->lastName;
        $Task->gender=$request->gender;
        $Task->age=$request->age;
        $Task->homeTown=$request->homeTown;
        $Task->contactNumber=$request->contactNumber;
        $Task->registerDate=$request->registerDate;
        $Task->height=$request->height;
        $Task->weight=$request->weight;
       

        $Task->save();

        $data=Task::all();
        //dd($data);

        return view('poolmemberProf')->with('show',$data);

         
    }


    public function UpdateRec($id) {

        $data=Task::find($id);

        


        return view('memberUpdate')->with('updatedata', $data);
    }

    
    public function updatemember(Request $request){

        $Task=Task::find($request->id);

        $Task->firstName=$request->firstName;
        $Task->lastName=$request->lastName;
        $Task->gender=$request->gender;
        $Task->age=$request->age;
        $Task->homeTown=$request->homeTown;
        $Task->contactNumber=$request->contactNumber;
        $Task->registerDate=$request->registerDate;
        $Task->height=$request->height;
        $Task->weight=$request->weight;
       

        $Task->save();

        $data=Task::all();
        //dd($data);

        return view('poolmemberProf')->with('show',$data);


    }

    public function pooldeleteDB($id){

       
         $data=Task::find($id);
        

         $data->delete();

        return redirect()->back();


     }

    



}