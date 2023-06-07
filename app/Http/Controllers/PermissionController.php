<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function store(Request $request)
    {
        $id = session('id');
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
           
        Permission::create([
            'name' => $name
        ]);
      

        return redirect('/admin/permissions')->with('flash_message_success', 'Permission crée avec succès.');
    }
        return view('permissions.index');
    }

    public function edit(Request $request, $idPermission)
    {
        $id = session('id');
        $permissions = Permission::where(['id' => $idPermission])->first();
        $roles = Role::all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
           
        Permission::where(['id' => $idPermission])->update([
            'name' => $name
        ]);
      

        return redirect('/admin/permissions')->with('flash_message_success', 'Permission modifié avec succès.');
    }
        return view('permissions.edit')->with(compact('permissions','roles'));
    }

    public function show()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function delete(Request $request, $idPermission)
    {
        $id = session('id');
        $permissions = Permission::where(['id' => $idPermission])->first();
        Permission::where(['id' => $idPermission])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Permission supprimée avec succès!');
    }

    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('flash_message_success', 'Le Role existe.');
        }

        $permission->assignRole($request->role);
        return back()->with('flash_message_success', 'Role assigné.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('flash_message_success', 'Role retiré.');
        }

        return back()->with('flash_message_success', 'Role inexistant.');
    }
}
