<?php

namespace App\Policies;

use App\Models\User;
use App\Models\contactFirst;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactFirstPolicy
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
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, contactFirst $contactFirst)
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
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, contactFirst $contactFirst)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, contactFirst $contactFirst)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, contactFirst $contactFirst)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, contactFirst $contactFirst)
    {
        //
    }
}
