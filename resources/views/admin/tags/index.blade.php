@extends('layouts.app')

@section('title', 'Tags')
@section('navbar-backend')

@section('sub-title', 'Tags')
@section('content')
<a href="{{ route('tag.create') }}" class="btn btn-primary btn-sm mb-3">Add New Tag</a>
 <div class="card mb-5">
            <!-- Card Header -->
            <header class="card-header">
              <h2 class="h4 card-header-title">All Tags</h2>
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
                    <th>Tag</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $key => $tag)
                    <tr>
                      <td>{{ $key + $tags->firstitem() }}</td>
                      <td>{{ $tag->name }}</td>
                      <td>
                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-info btn-sm text-uppercase mb-2 mr-2">Edit</a>
                        <form action="{{ route('tag.destroy', $tag->id) }}" method="post">
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
              {{ $tags->links() }}
            </div>
            <!-- Crad Body -->
          </div>



@endsection