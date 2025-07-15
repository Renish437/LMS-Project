<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StripeRequest;
use App\Models\Stripe;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function stripeSetting()
    {
        $stripeSettings = \App\Models\Stripe::first();
        return view('backend.admin.setting.stripe.index', compact('stripeSettings'));
    }
    public function updateStripeSettings(StripeRequest $request) {
     Stripe::updateOrCreate(
        ['id' => 1],
        [
            'publish_key' => $request->publish_key,
            'secret_key' => $request->secret_key,
        ]
        );
        return back()->with('success', 'Stripe settings updated successfully');
    }
}
