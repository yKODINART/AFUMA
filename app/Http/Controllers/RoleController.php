<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $id = session('id');
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
           
        Role::create([
            'name' => $name
        ]);

        return redirect('/admin/roles')->with('flash_message_success', 'Role crée avec succès.');
    }
        return view('roles.index');
    }

    public function edit(Request $request, $idrole)
    {
        $id = session('id');
        $permissions = Permission::all();
        $roles = Role::where(['id' => $idrole])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
           
        Permission::where(['id' => $idrole])->update([
            'name' => $name
        ]);
        
        return redirect('/admin/roles')->with('flash_message_success', 'Role modifié avec succès.');
    }
        return view('roles.edit')->with(compact('roles','permissions'));
    }

    public function show()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function delete(Request $request, $idrole)
    {
         $id = session('id');
        $roles = Role::where(['id' => $idrole])->first();
        Role::where(['id' => $idrole])->delete([]);
   
        return redirect()->back()->with('flash_message_success', 'Role supprimée avec succès!');
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
            return back()->with('flash_message_success', 'La Permission existe.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('flash_message_success', 'Permission ajouté.');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('flash_message_success', 'Permission revoké.');
        }
        return back()->with('flash_message_success', 'Permission nexiste pas.');
    }
}
