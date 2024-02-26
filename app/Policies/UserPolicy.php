<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;

class UserPolicy
{


  
    public function create(User $user): bool
    {

       return $user ->email === 'user2@gmail.com';

    }


    public function edit(User $user, User $model)
    {

       return (bool) mt_rand(0,1);

    }


}
