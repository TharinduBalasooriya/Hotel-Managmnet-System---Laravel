<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_details;
use App\testLogin;

class employeeContoller extends Controller
{
    public function store(Request $request){

        $user = new user_details;
        $user->surname = $request->Surname;
        $user->NIC = $request->NICNumber;
        $user->firstName = $request ->FirstName;
        $user->gender = $request ->gender;
        $user->country = $request ->Country;
        $user->mStatus = $request ->MartialStatus;
        $user->jobRole = $request ->jobRole;
        $user->userName = $request->uN;
        $user->password = $request ->psw;
        $user->bankName = $request ->BankName;
        $user->accountNumber = $request ->AccountNumber;
        $user->address = $request ->Address;
        $user->mobile = $request->mobile;

      
        
        
        $user->save();

        return view('index');





    }

    public function login(Request $request){

        $request->session()->regenerate();
        $allData = user_details::all();
        foreach($allData as $user){
            if($user->userName == $request->uN && $user->password == $request->psw){
                $request->session()->put('userID',$user->id );
                $request->session()->put('userName',$user->userName );
                $request->session()->put('jobRole',$user->jobRole );
                return view('index');
                
            }
        }

        return view('userLogin')->with('message', 'Login Failed');

    }

    public function logout(Request $request){
        $request->session()->forget('userID');
        $request->session()->forget('userName');
        $request->session()->forget('jobRole');
        $request->session()->flush();
        $request->session()->regenerate();
        return view('userLogin');
        
    }

    public function getUserDetails(Request $request){

        $id = session('userID', 'GM');
        $allData =  user_details::find($id);

        return view('employee-profile')->with('user',$allData);
    }

    public function updateUser(Request $request){

        $userId = $request->id;
        $user =  user_details::find($userId);

        
        $user->NIC = $request->NICNumber;
        $user->firstName = $request ->FirstName;
        
      
    
        $user->password = $request ->psw;
        $user->bankName = $request ->BankName;
        $user->accountNumber = $request ->AccountNumber;
        $user->address = $request ->Address;
        $user->mobile = $request->MobileNumber;

        $user->save();
        return view('staffindex');
    }

    public function deleteUser(Request $request){
        $userId = $request->id;
        $user =  user_details::find($userId);
        $user->delete();
        return redirect()->action('employeeContoller@logout');


    }
}
