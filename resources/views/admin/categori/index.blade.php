@extends('layouts.app')

@section('title', 'Category')
@section('navbar-backend')

@section('sub-title', 'Category')
@section('content')
<a href="{{ route('categori.create') }}" class="btn btn-primary btn-sm mb-3">Add New Category</a>
 <div class="card mb-5">
            <!-- Card Header -->
            <header class="card-header">
              <h2 class="h4 card-header-title">Basic table</h2>
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
                    <th>Category</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($category as $key => $categori)
                    <tr>
                      <td>{{ $key + $category->firstitem() }}</td>
                      <td>{{ $categori->name }}</td>
                      <td>
                        <a href="{{ route('categori.edit', $categori->id) }}" class="btn btn-info btn-sm text-uppercase mb-2 mr-2">Edit</a>
                        <form action="{{ route('categori.destroy', $categori->id) }}" method="post">
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
              {{ $category->links() }}
            </div>
            <!-- Crad Body -->
          </div>



@endsection