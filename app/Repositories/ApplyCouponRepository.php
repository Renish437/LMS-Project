<?php 
namespace App\Repositories;

use App\Models\Coupon;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;



class ApplyCouponRepository
{
   
  
 public function applyCoupon($couponName,$courseIds,$instructorIds){

try {
    //initilize response data
    $discounts = [];

    foreach ($courseIds as $key => $courseId) {
        $instructorId = $instructorIds[$key];
        //Check coupon validation for each course and instructor
        $coupon = Coupon::where('coupon_name', $couponName)
            ->where('instructor_id', $instructorId)
            ->where('status', 1)
            ->first();

        if ($coupon) {
            $discounts[] = [
                'course_id' => $courseId,
                'instructor_id' => $instructorId,
                'discount' => $coupon->coupon_discount,
                'validity' => $coupon->coupon_validity
            ];
        }

    }
    return $discounts;
} catch (Exception $e) {
 
    return response()->json([
        'status' => 'error',
        'message' => $e->getMessage()
    ],500);
}



 }
}