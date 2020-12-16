<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pos;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function delete(User $user)
    {
        return $user->Role->Permissions->contains(5);
    }
    public function viewCount(User $user)
    {
        return $user->Role->Permissions->contains(6);
    }
    public function create(User $user)
    {
        return $user->Role->Permissions->contains(2);
    }
    public function view(User $user)
    {
        return $user->Role->Permissions->contains(1);
    }
}
