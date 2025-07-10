<?php 
namespace App\Repositories;

use App\Models\Coupon;
use App\Models\User;

use Illuminate\Support\Facades\Auth;



class CouponRepository
{
   
  
 public function saveCoupon($data,$id = null){

if($id){
    $coupon = Coupon::findOrFail($id);
}else{
    $coupon = new Coupon();
}
$coupon->coupon_name = $data['coupon_name'];
$coupon->coupon_discount = $data['coupon_discount'];
$coupon->coupon_validity = $data['coupon_validity'];
$coupon->status = $data['status'];
$coupon->instructor_id = Auth::user()->id;
$coupon->save();
return $coupon;


 }
}