<?php
namespace App\Http\Controllers;


use App\User;
use App\Role;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index', User::class);
        return view('theme.backoffice.pages.user.index',[
            'users' => auth()->user()->visible_users(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->authorize('create', User::class);
        return view('theme.backoffice.pages.user.create',[
            'roles' => auth()->user()->visible_roles(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, User $user)
    {
       $user = $user->store($request);
       return redirect()->route('user.show', $user);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('theme.backoffice.pages.user.show',[
            'user' =>$user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        $view = (isset($_GET['view'])) ? $_GET['view'] : null;

        return view($user->edit_view($view), [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->my_update($request);
        $view = (isset($_GET['view'])) ? $_GET['view'] : null;
        return redirect()->route($user->user_show(), $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();

        alert('Exito','Usuario Eliminado','success');
//         alert()->success('Exito', 'Permisos asignados')->autoclose(3000);
        return redirect()->route('user.index');
    }

    public function is_admin()
    {
        $admin = config('app.admin_role');
        if($this->has_role($admin)){
            return true;
        }else{
            return false;
        }
    }




    public function assign_role(User $user)
    {
        $this->authorize('assign_role', $user);
        return view('theme.backoffice.pages.user.assign_role',[
            'user' =>$user,
            'roles' => Role::all(),
        ]);
    }

    public function role_assignment(Request $request, User $user)
    {
        $this->authorize('assign_role', $user);
        $user->role_assignment($request);
        return redirect()->route('user.show',$user);
    }

    public function assign_permission(User $user)
    {
        $this->authorize('assign_permission', $user);
        return view('theme.backoffice.pages.user.assign_permission',[
            'user' => $user,
            'roles' => $user->roles
        ]);
    }

    public function permission_assignment(Request $request, User $user)
    {
        $this->authorize('assign_permission', $user);
        $user->permissions()->sync($request->permissions);
        alert('Éxito', 'Permisos asignados', 'success');
        return redirect()->route('user.show', $user);
    }


    public function profile()
    {
        $user = auth()->user();
        return view('theme.frontoffice.pages.user.profile',[
            'user' => $user,

        ]);
    }

public function edit_password()

{
  $this->authorize('update_password', auth()->user());
  return view('theme.frontoffice.pages.user.edit_password');
}

public function change_password(ChangePasswordRequest $request)
{
  $request->user()->password =Hash::make($request->password);
  $request->user()->save();
  alert('Éxito', 'Contraseña Actualizada', 'success');
  return redirect()->back();
}


}
