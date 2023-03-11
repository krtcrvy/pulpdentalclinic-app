<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roles.index', [
            'roles' => $roles,
            'permissions' => $permissions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'name' => ['required']
        ]);

        Role::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')
        ]);

        session()->flash('role-added', 'Role added: ' . request('name'));

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role)
    {
        $role->name = Str::ucfirst(request('name'));
        $role->slug = Str::of(request('name'))->slug('-');

        if ($role->isDirty('name')) {
            session()->flash('role-updated', 'Role updated: ' . request('name'));

            $role->save();
        } else {
            session()->flash('role-updated', 'Nothing has been updated');
        }

        return back();
    }

    public function attach_permission(Role $role)
    {
        $role->permissions()->attach(request('permission'));

        session()->flash('permission-attached', 'Permission has been attached');

        return back();
    }

    public function detach_permission(Role $role)
    {
        $role->permissions()->detach(request('permission'));

        session()->flash('permission-detached', 'Permission has been detached');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        session()->flash('role-deleted', 'Deleted role: ' . $role->name);

        return back();
    }
}
