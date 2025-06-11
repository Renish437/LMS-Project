<?php 
namespace App\Repositories;

use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateRespository
{
    
    public function findProfile(){
        $user_id= Auth::user()->id;
        return User::where('id',$user_id)->first();
    }
 public function updatePassword($data){
      $user_id= Auth::user()->id;
    $user =User::where('id',$user_id)->first();

    // Check if current password is correct
    if(!Hash::check($data['current_password'], $user->password)){
        return false;
      
    }
   
    // Update password
    $user->password = Hash::make($data['new_password']);
    $user->save();
    return true;
 
   
   
 }
}