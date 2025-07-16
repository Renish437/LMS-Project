<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\ApplyCouponRepository;
use App\Repositories\CouponRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\StripeRepository;
use Exception;

class PaymentService
{

    protected $stripeRepository;

    public function __construct(StripeRepository $stripeRepository)
    {
        $this->stripeRepository = $stripeRepository;
    }
    public function processPayment(array $data)
    {
        switch ($data['payment_type']) {
            case 'stripe':
                return $this->stripeRepository->handlePayment($data);
                break;
            case 'paypal':
                return 'paypal';
                break;
            case 'razorpay':
                return 'razorpay';
                break;
            default:
                throw new Exception('Invalid payment type');
        }
    }
}
