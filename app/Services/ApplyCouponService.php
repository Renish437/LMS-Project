<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\ApplyCouponRepository;
use App\Repositories\CouponRepository;

class ApplyCouponService{

    protected $applyCouponRespository;

    public function __construct(ApplyCouponRepository $applyCouponRespository)
    {
        $this->applyCouponRespository = $applyCouponRespository;
        
    }
    public function applyCoupon($couponName,$courseIds,$instructorIds){
    return $this->applyCouponRespository->applyCoupon($couponName,$courseIds,$instructorIds);
    }

}