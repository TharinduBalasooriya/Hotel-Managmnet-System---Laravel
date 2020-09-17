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
        $order -> orderType = $request -> orderType;

        $order -> customerName = $request -> customerName;
        $order -> customerMobile = $request -> customerMobile;
        $order -> customerEmail = $request ->customerEmail;
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

    //go to detailed view of order
    public function viewDetails($id){
        $order = Order::find($id);
        $ordeCode = $order -> orderCode;
        $foodList = order_item::whereIn('orderCode', [$ordeCode])->get();
        //Names
        $itemList = testItem::whereIn('id', $foodList)->get();
        $x = 0;
        $quan[0] = 0;
        foreach($foodList as $cItem){
            $quan[$x++] = $cItem -> quantity;
        }
        
        
        

        
       return view('orderDetails')->with('orderData',$order)->with('itemList',$itemList) ->with('quan',$quan);
      

    }

    public  function updateStatus(Request $request) {
        $order = Order::find($request->oid);
        $order->orderStatus = $request->orderStatus;
        $order->save();
        $allData = order::all();
        return view('orderList') -> with('orders',$allData);  
        


    }

    public function deleteOrder(Request $request){
            
            $id = $request->oid;
            $order = Order::find($id);
            $ordeCode = $order -> orderCode;
            order_item::whereIn('orderCode', [$ordeCode])->delete();
            $order->delete();
            $allData = order::all();
            return view('orderList') -> with('orders',$allData); 

    }

}
