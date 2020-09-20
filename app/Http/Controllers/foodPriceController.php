<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testItem;

class foodPriceController extends Controller
{
    public function store(Request $request){

        $item = new testItem;

        $item ->ItemCode =  $request->itemCode;
        $item ->ItemName =  $request->itemName;
        $this->validate($request,[
            'itemName'=>'required|max:100|min:3'
        ]);
        $item ->ItemPrice =  $request->price;
        
        $item ->save();

        return view('index');

    }

    public function viewAll(){

        $allData = testItem::all();
        
        return view('foodPriceTable') -> with('items',$allData);
    }

    public function delete(Request $request){
        $item  = testItem::find($request ->id);
        
        $item -> delete();

        $allData = testItem::all();
        
        $allData = testItem::all();
        
        return view('foodPriceTable') -> with('items',$allData);
       

    }   

    public function view(Request $request){
        $item  = testItem::find($request ->id);
        
        
        return view('foodsPriceUpdate')->with('foodData',$item);
        
        
       

    }
    
    public function update(Request $request){
        $item  = testItem::find($request ->id);
        $item ->ItemCode =  $request->itemCode;
        $item ->ItemName =  $request->itemName;
        $item ->ItemPrice =  $request->price;
        
        $item ->save();
        return redirect()->action('foodPriceController@viewAll');
        
       

    } 

    
}
