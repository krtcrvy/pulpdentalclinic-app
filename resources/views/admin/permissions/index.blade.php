@extends('admin.layouts.admin-master')

@section('title', 'Pulp Dental Clinic | Permissions')

@section('content')
    <h1 class="my-4 text-primary">Permissions</h1>

    @if (session('permission-deleted'))
        <div class="alert alert-danger">
            {{ session('permission-deleted') }}
        </div>
    @elseif (session('permission-added'))
        <div class="alert alert-success">
            {{ session('permission-added') }}
        </div>
    @elseif (session('permission-updated'))
        <div class="alert alert-success">
            {{ session('permission-updated') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('permissions.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Add Permission</button>
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
                                @if ($permissions->isNotEmpty())
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->slug }}</td>
                                            <td class="d-flex justify-content-evenly">

                                                {{-- Edit Button --}}
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#editPermission{{ $permission->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                {{-- Edit Button --}}

                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="editPermission{{ $permission->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 text-primary"
                                                                    id="exampleModalLabel">Edit Permission
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('permissions.update', $permission->id) }}"
                                                                    method="POST"
                                                                    id="editPermissionForm{{ $permission->id }}">
                                                                    @method('PUT')
                                                                    @csrf

                                                                    <div class="mb-3">
                                                                        <label for="name"
                                                                            class="form-label">Name</label>
                                                                        <input type="text" name="name" id="name"
                                                                            class="form-control"
                                                                            value="{{ $permission->name }}">
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary" type="submit"
                                                                    form="editPermissionForm{{ $permission->id }}">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}

                                                {{-- Delete Button --}}
                                                <form method="POST"
                                                    action="{{ route('permissions.destroy', $permission->id) }}">
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
