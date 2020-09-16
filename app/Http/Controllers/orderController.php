<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\order_item;
use App\testItem;

class orderController extends Controller
{
    //store function for new orders
    public function store(Request $request){
        $order = new order;
        
        $idCollection = $request -> fid;
        $quantities = $request -> qty;

        $order -> orderCode = $request -> orderCode;
        $order -> customerName = $request -> customerName;
        $order -> customerMobile = $request -> customerMobile;
        $x = 0;
        foreach($idCollection as $cid){
            if($quantities[$x] > 0){
                $order_item = new order_item;
                $order_item -> orderCode = $request -> orderCode ;
                $order_item -> ItemId =  $cid;
                $order_item -> quantity = $quantities[$x];
                $order_item -> save();
                
            }
            $x++;
        }
        $order -> save();
        return view('order_managment');
       


    }

    //navigate to add orders page

    public function goToAdd(){

            $allData = testItem::all();
            return view('addOrders') -> with('items',$allData);

    }

    //navigate to orderList

    public function goToOrder(){

        $allData = order::all();
        return view('orderList') -> with('orders',$allData);  
    }


}
