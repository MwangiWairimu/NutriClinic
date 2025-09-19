@extends('admin.admin')

@section('content')
    <div class="d-flex align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0">
            <i class="bi bi-box-seam"></i> USER MANAGEMENT
        </h2>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if ($user->role == 0)
                        <td>
                            <span class="badge rounded-pill text-bg-success">Customer</span>
                        </td>
                    @else
                        <td>
                            <span class="badge rounded-pill text-bg-danger">Admin</span>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
