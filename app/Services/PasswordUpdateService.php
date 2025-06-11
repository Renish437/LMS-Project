<?php 
namespace App\Services;

use App\Models\User;
use App\Repositories\PasswordUpdateRespository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class PasswordUpdateService{

    protected $passwordUpdateRespository;

    public function __construct(PasswordUpdateRespository $passwordUpdateRespository)
    {
        $this->passwordUpdateRespository = $passwordUpdateRespository;;
        
    }
    public function updatePassword(array $data){
      return $this->passwordUpdateRespository->updatePassword($data);
    }


}