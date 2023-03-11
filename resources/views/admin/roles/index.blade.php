@extends('admin.layouts.admin-master')

@section('title', 'Pulp Dental Clinic | Roles')

@section('content')
    <h1 class="my-4 text-primary">Roles</h1>
    @if (session('role-deleted'))
        <div class="alert alert-danger">
            {{ session('role-deleted') }}
        </div>
    @elseif (session('role-added'))
        <div class="alert alert-success">
            {{ session('role-added') }}
        </div>
    @elseif (session('role-updated'))
        <div class="alert alert-success">
            {{ session('role-updated') }}
        </div>
    @elseif (session()->has('permission-attached'))
        <div class="alert alert-success">
            {{ session('permission-attached') }}
        </div>
    @elseif (session()->has('permission-detached'))
        <div class="alert alert-danger">
            {{ session('permission-detached') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Add Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTables" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>

                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if ($roles->isNotEmpty())
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->slug }}</td>
                                            <td class="d-flex justify-content-evenly">

                                                {{-- Edit Button --}}
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#editRole{{ $role->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                {{-- Edit Button --}}

                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="editRole{{ $role->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 text-primary"
                                                                    id="exampleModalLabel">Edit Role
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <form
                                                                            action="{{ route('roles.update', $role->id) }}"
                                                                            method="POST"
                                                                            id="editRoleForm{{ $role->id }}">
                                                                            @method('PUT')
                                                                            @csrf

                                                                            <div class="mb-3">
                                                                                <label for="name"
                                                                                    class="form-label">Name</label>
                                                                                <input type="text" name="name"
                                                                                    id="name" class="form-control"
                                                                                    value="{{ $role->name }}">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    @if ($permissions->isNotEmpty())
                                                                        <div class="col-lg-12">
                                                                            <p>Role Permission</p>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered table-striped"
                                                                                    id="rolePermission" width="100%"
                                                                                    cellspacing="0">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Options</th>
                                                                                            <th>ID</th>
                                                                                            <th>Name</th>
                                                                                            <th>Slug</th>
                                                                                            <th>Attach</th>
                                                                                            <th>Detach</th>
                                                                                    </thead>
                                                                                    <tfoot>
                                                                                        <tr>
                                                                                            <th>Options</th>
                                                                                            <th>ID</th>
                                                                                            <th>Name</th>
                                                                                            <th>Slug</th>
                                                                                            <th>Attach</th>
                                                                                            <th>Detach</th>
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                    <tbody>
                                                                                        @foreach ($permissions as $permission)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check d-flex justify-content-center align-items-center">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            type="checkbox"
                                                                                                            value=""
                                                                                                            @foreach ($role->permissions as $role_permission)
                                                                                                    @if ($role_permission->slug == $permission->slug)
                                                                                                    checked
                                                                                                    @endif @endforeach
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>{{ $permission->id }}
                                                                                                </td>
                                                                                                <td>{{ $permission->name }}
                                                                                                </td>
                                                                                                <td>{{ $permission->slug }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <form method="POST"
                                                                                                        action="{{ route('role.permission.attach', $role) }}">
                                                                                                        @method('PUT')
                                                                                                        @csrf

                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="permission"
                                                                                                            value="{{ $permission->id }}">

                                                                                                        <button
                                                                                                            class="btn btn-success"
                                                                                                            @if ($role->permissions->contains($permission)) disabled @endif>
                                                                                                            Attach
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <form method="POST"
                                                                                                        action="{{ route('role.permission.detach', $role) }}">
                                                                                                        @method('PUT')
                                                                                                        @csrf

                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="permission"
                                                                                                            value="{{ $permission->id }}">

                                                                                                        <button
                                                                                                            class="btn btn-danger"
                                                                                                            @if (!$role->permissions->contains($permission)) disabled @endif>
                                                                                                            Detach
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary" type="submit"
                                                                    form="editRoleForm{{ $role->id }}">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}

                                                {{-- Delete Button --}}
                                                <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                                {{-- Delete Button --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
