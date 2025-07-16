<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GithubRequest;
use App\Http\Requests\GoogleRequest;
use App\Http\Requests\StripeRequest;
use App\Models\Github;
use App\Models\Google;
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
    public function googleSetting(){
        $google = Google::first();
        return view('backend.admin.setting.google.index', compact('google'));
    }
    public function updateGoogleSettings(GoogleRequest $request){
        Google::updateOrCreate(
            ['id' => 1],
            [
                'client_id' => $request->client_id,
                'secret_key' => $request->secret_key,
                'redirect_url' => $request->redirect_url,
                
            ]
        );
        return back()->with('success', 'Google settings updated successfully');
    }
    public function githubSetting(){
        $github = Github::first();
        return view('backend.admin.setting.github.index', compact('github'));
    }
    public function updateGithubSettings(GithubRequest $request){
        Github::updateOrCreate(
            ['id' => 1],
            [
                'client_id' => $request->client_id,
                'secret_key' => $request->secret_key,
                'redirect_url' => $request->redirect_url,
                
            ]
        );
        return back()->with('success', 'Github settings updated successfully');
    }
}
