<?php
namespace App\Policies;
use App\User;
use App\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;
class PermissionPolicy
{
    use HandlesAuthorization;
    public function index(User $user)
    {
        return $user->has_permission('index-permission');
    }
/**
* Determine whether the user can view the permission.
*
* @param \App\User $user
* @param \App\Permission $permission
* @return mixed
*/
public function view(User $user, Permission $permission)
{
    return $user->has_permission('view-permission');
}
/**
* Determine whether the user can create permissions.
*
* @param \App\User $user
* @return mixed
*/
public function create(User $user)
{
    return $user->has_permission('view-permission');
}
/**
* Determine whether the user can update the permission.
*
* @param \App\User $user
* @param \App\Permission $permission
* @return mixed
*/
public function update(User $user, Permission $permission)
{
    return $user->has_permission('update-permission');
}
/**
* Determine whether the user can delete the permission.
*
* @param \App\User $user
* @param \App\Permission $permission
* @return mixed
*/
public function delete(User $user, Permission $permission)
{
    return $user->has_permission('delete-permission');
}
/**
* Determine whether the user can restore the permission.
*
* @param \App\User $user
* @param \App\Permission $permission
* @return mixed
*/
public function restore(User $user, Permission $permission)
{
//
}
/**
* Determine whether the user can permanently delete the permission.
*
* @param \App\User $user
* @param \App\Permission $permission
* @return mixed
*/
public function forceDelete(User $user, Permission $permission)
{
//
}
}