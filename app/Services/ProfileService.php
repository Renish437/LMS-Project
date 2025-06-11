<?php 
namespace App\Services;

use App\Models\User;
use App\Repositories\ProfileRepository;

class ProfileService{

    protected $profileRespository;

    public function __construct(ProfileRepository $profileRespository)
    {
        $this->profileRespository = $profileRespository;
        
    }
    public function saveProfile(array $data, $photo = null){
    
     return $this->profileRespository->createOrUpdateProfile($data,$photo);
    }

}