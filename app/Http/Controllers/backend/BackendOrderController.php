<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class BackendOrderController extends Controller
{
    //
      public function adminView(){
       $all_payments = Payment::latest()->get();
        return view('backend.admin.order.index',compact('all_payments'));
    }
    public function adminShow($id){

        $payment_info = Payment::where('id', $id)->with('orders','orders.course','orders.course.category','orders.instructor')->first();
       
        $user_info = User::where('email', $payment_info->email)->first();
        return view('backend.admin.order.show',compact('payment_info','user_info'));
    }
}
