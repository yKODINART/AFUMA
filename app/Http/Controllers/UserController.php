<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(User $user, $idUser)
    {
        $users = User::where(['id' => $idUser])->first();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('users.edit', compact('users','roles','permissions'));
    }

    public function add(Request $request)
    {
        $id = session('id');
        if ($request->isMethod('post')) {
            $data = $request->all();
            $nom = $data['name']; 
            $telephone = $data['phone_number'];
            $email = $data['email'];
            $password = $data['password']; 
            $role = $data['role']; 
           
           
                User::create([
                    'name' => $nom,
                    'phone_number' => $telephone,
                    'email' => $email,
                    'token' => getRamdomText(8),
                    'type_user' => 1,
                    'role' => $role,
                    'password' => bcrypt($password),
                ]);
               
                return redirect('/admin/users')->with('flash_message_success', 'Nouvel Utilisateur ajouté avec succès!');
            
            }
            
        return view('users.index');
    }

    public function edit(Request $request,$idUser)
    {
        $id = session('id');
        $users = User::where(['id' => $idUser])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $nom = $data['name']; 
            $telephone = $data['phone_number'];
            $email = $data['email'];
            $password = $data['password']; 
            $role = $data['role']; 

           

            User::where(['id' => $idUser])->update([
                'name' => $nom,
                'phone_number' => $telephone,
                'email' => $email,
                'token' => getRamdomText(8),
                'type_user' => 1,
                'role' => $role,
                'password' => bcrypt($password),
            ]);

            return redirect('/admin/users')->with('flash_message_success', 'Utilisateur modifié avec succès!');
        }
        return view('users.index')->with(compact('users'));
    }

    public function delete(Request $request, $idUser)
    {
        $id = session('id');
        $user = User::where(['id' => $idUser])->first();
        User::where(['id' => $idUser])->delete();
       
        return redirect()->back()->with('flash_message_success', 'Utilisateur supprimé avec succès!');
    }


    public function show()
    {
        $id = session('id');
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('users.index', compact('users','roles','permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('flash_message_success', 'Le Role existe.');
        }

        $user->assignRole($request->role);
        return back()->with('flash_message_success', 'Role assigné.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('flash_message_success', 'Role enlevé.');
        }

        return back()->with('flash_message_success', 'Role inexistant.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('flash_message_success', 'La Permission existe.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('flash_message_success', 'Permission ajouté.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('flash_message_success', 'Permission révoké.');
        }
        return back()->with('flash_message_success', 'Permission inexistante.');
    }

    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('flash_message_success', 'Vous etes admin.');
        } else 
        if ($user->hasRole('superadmin')) {
            return back()->with('flash_message_success', 'Vous etes Super Admin.');
        } 
        $user->delete();

        return back()->with('flash_message_success', 'Utilisateur supprimé.');
    }
}
