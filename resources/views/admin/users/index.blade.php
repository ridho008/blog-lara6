@extends('layouts.app-backend')

@section('title', 'Users')
@section('navbar-backend')

@section('sub-title', 'Users')
@section('content')
<a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-3">Add New User</a>
 <div class="card mb-5">
            <!-- Card Header -->
            <header class="card-header">
              <h2 class="h4 card-header-title">All Users</h2>
            </header>
            <!-- End Card Header -->

            <!-- Crad Body -->
            <div class="card-body pt-0">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                      <td>{{ $key + $users->firstitem() }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if($user->role === 0)
                          <span class="badge badge-pill badge-primary">Admin</span>
                        @else
                          <span class="badge badge-pill badge-success">Author</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm text-uppercase mb-2 mr-2">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn-sm btn btn-danger text-uppercase mb-2 mr-2">Delete</a>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
              {{ $users->links() }}
            </div>
            <!-- Crad Body -->
          </div>



@endsection