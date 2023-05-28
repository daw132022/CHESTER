<?php

namespace App\Policies;

use App\Models\Juego;
use App\Models\User;
use Composer\Util\Http\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class JuegoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Juego $juego)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Juego $juego)
    {
        return $user->role_id==1
        ? Response::allow()
        : Response::deny('You are not allowed to perform this action.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Juego $juego)
    {
        return $user->role_id==1
        ? Response::allow()
        : Response::deny('You are not allowed to perform this action.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Juego $juego)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Juego $juego)
    {
        //
    }

    public function before(User $user, string $ability)
    {
        if ($user->isAdministrator()) {
            return true;
        }
    }
}
