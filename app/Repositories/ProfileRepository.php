<?php 
namespace App\Repositories;

use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class ProfileRepository
{
    use FileUploadTrait;
    public function findProfile(){
        $user_id= Auth::user()->id;
        return User::where('id',$user_id)->first();
    }
 public function createOrUpdateProfile($data,$photo){
  $profile = $this->findProfile();
  // Handle file upload
  if($profile){
    $data['photo'] = $this->uploadFile($photo,'user',$profile->photo);
  }

  $profile->update($data);
  return $profile;
 }
}