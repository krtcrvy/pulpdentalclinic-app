@extends('admin.layouts.admin-master')

@section('title', 'Pulp Dental Clinic | Roles')

@section('content')
    <h1 class="my-4">Roles</h1>
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
                        <table class="table table-bordered" id="dataTables" cellspacing="0">
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
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td><span class="badge rounded-pill text-bg-primary">{{ $role->name }}</span></td>
                                        <td><span class="badge rounded-pill text-bg-primary">{{ $role->slug }}</span></td>
                                        <td class="d-flex justify-content-evenly">

                                            {{-- Edit Button --}}
                                            <a href="#editRole{{ $role->id }}" data-bs-toggle="modal"
                                                class="btn btn-success"><i class='fa fa-edit'></i>Edit</a>
                                            {{-- Edit Button --}}

                                            {{-- Edit Modal --}}
                                            <div class="modal fade" id="editRole{{ $role->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 text-primary"
                                                                id="exampleModalLabel">Edit Role
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="{{ route('roles.update', $role->id) }}"
                                                                method="POST" id="editRoleForm{{ $role->id }}">
                                                                @method('PUT')
                                                                @csrf

                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Name</label>
                                                                    <input type="text" name="name" id="name"
                                                                        class="form-control" value="{{ $role->name }}">
                                                                </div>
                                                            </form>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
