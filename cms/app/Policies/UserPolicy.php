<?php

namespace CMS\Policies;

use CMS\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
    /**
     * Проверка на возможность администрирования
     *
     * @param User $user
     * @return bool
     */
    public function administrate(User $user) {
        return $user->role->name === 'admin';
    }
}
