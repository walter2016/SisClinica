<?php
namespace App\Policies;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
class UserPolicy
{
    use HandlesAuthorization;
    public function index(User $user)
    {
        return $user->has_permission('index-user');
    }
/**
* Determine whether the user can view the model.
*
* @param \App\User $user
* @param \App\User $model
* @return mixed
*/
public function view(User $user, User $model)
{
    return $user->has_permission('view-user');
}
/**
* Determine whether the user can create models.
*
* @param \App\User $user
* @return mixed
*/
public function create(User $user)
{
   return $user->has_permission('create-user');
}
/**
* Determine whether the user can update the model.
*
* @param \App\User $user
* @param \App\User $model
* @return mixed
*/
public function update(User $user, User $model)
{

    return ($user->has_permission('update-user') && $user->has_role(config('app.admin_role')))|| $user->id == $model->id;
}
/**
* Determine whether the user can delete the model.
*
* @param \App\User $user
* @param \App\User $model
* @return mixed
*/
public function delete(User $user, User $model)
{
    return $user->has_permission('delete-user');
}
/**
* Determine whether the user can restore the model.
*
* @param \App\User $user
* @param \App\User $model
* @return mixed
*/
public function restore(User $user, User $model)
{
//
}
/**
* Determine whether the user can permanently delete the model.
*
* @param \App\User $user
* @param \App\User $model
* @return mixed
*/
        public function forceDelete(User $user, User $model)
          {
          //
          }
        public function assign_role(User $user)
          {
              return $user->has_permission('assign-role-user');
          }
        public function assign_permission(User $user)
          {
              return $user->has_permission('assign-permission-user');
          }
        public function import(User $user)
          {
              return $user->has_permission('import-user');
          }

        public  function update_password(User $user, User $model){
          return $user->id == $model->id;

        }


}
