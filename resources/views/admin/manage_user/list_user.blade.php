@extends('admin.layout.dashboard')

@section('dashboard')
    <div class="card">
        <h5 class="card-header">All Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($userData as $users)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->adress}}</td>
                        <td>{{$users->phone}}</td>
                        @if($users->role == 'user')
                            <td><span class="badge bg-label-success me-1">{{$users->role}}</span></td>
                        @else
                            @if($users->role == 'admin')
                                <td><span class="badge bg-label-primary me-1">{{$users->role}}</span></td>
                            @endif
                        @endif
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                     <form method="POST" action="{{ route('users.delete', $users->id) }}" class="dropdown-item">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger ms-1" type="submit"><i class="bx bx-trash me-1"></i>Delete</button>
                                </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
