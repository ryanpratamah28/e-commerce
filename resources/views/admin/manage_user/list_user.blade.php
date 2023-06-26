@extends('admin.layout.dashboard')

@section('dashboard')
<div class="card">
    <h5 class="card-header">All Users</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->adress }}</td>
                    @if($users->role == 'user')
                    <td><span class="badge bg-label-success me-1">{{$users->role}}</span></td>
                    @else
                    @if($users->role == 'admin')
                    <td><span class="badge bg-label-primary me-1">{{$users->role}}</span></td>
                    @endif
                    @endif
                    <td>
                        <form action="{{ route('dashboard.users.delete', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger d-flex align-items-center">
                                <i class="bx bx-trash me-1"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
