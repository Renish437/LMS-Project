<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CouponRepository;

class CouponService{

    protected $couponRespository;

    public function __construct(CouponRepository $couponRespository)
    {
        $this->couponRespository = $couponRespository;
        
    }
    public function saveCoupon(array $data,  $id = null){
    
     return $this->couponRespository->saveCoupon($data,$id);
    }

}