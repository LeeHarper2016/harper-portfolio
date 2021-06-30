<?php

namespace App\Policies;

use App\Models\Position;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PositionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user  | null
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user  | null
     * @param  \App\Models\Position  $position
     * @return mixed
     */
    public function view(?User $user, Position $position)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return !is_null($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return mixed
     */
    public function update(User $user, Position $position)
    {
        return !is_null($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return mixed
     */
    public function delete(User $user, Position $position)
    {
        return !is_null($user);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return mixed
     */
    public function restore(User $user, Position $position)
    {
        return !is_null($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Position  $position
     * @return mixed
     */
    public function forceDelete(User $user, Position $position)
    {
        return !is_null($user);
    }
}
