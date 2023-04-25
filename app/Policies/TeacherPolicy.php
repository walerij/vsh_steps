<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeacherPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function view(User $user, User $model)
    {
    //'teacher'
        foreach ($model->roles as $role)
            if ($role->name=='teacher')
                return true;
        return false;
    }
}
