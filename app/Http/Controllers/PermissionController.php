<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
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

        Permission::create([
            'name' => Str::title(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')
        ]);

        session()->flash('permission-added', 'Permission added: ' . request('name'));

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
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
    public function update(Permission $permission)
    {
        $permission->name = Str::title(request('name'));
        $permission->slug = Str::of(request('name'))->slug('-');

        if ($permission->isDirty('name')) {
            session()->flash('permission-updated', 'Permission updated: ' . request('name'));

            $permission->save();
        } else {
            session()->flash('permission-updated', 'Nothing has been updated');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        session()->flash('permission-deleted', 'Deleted permission: ' . $permission->name);

        return back();
    }
}
