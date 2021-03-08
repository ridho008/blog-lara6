@extends('layouts.app')

@section('title', 'Trash Posts')
@section('navbar-backend')

@section('sub-title', 'Trash Posts')
@section('content')
<a href="{{ route('post.create') }}" class="btn btn-primary btn-sm mb-3">Add New Post</a>
 <div class="card mb-5">
            <!-- Card Header -->
            <header class="card-header">
              <h2 class="h4 card-header-title">All Posts</h2>
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
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Tag</th>
                    <th>Category</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $key => $post)
                    <tr>
                      <td>{{ $key + $posts->firstitem() }}</td>
                      <td>
                        <img src="{{ asset('uploads/posts/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 100px;">
                      </td>
                      <td>{{ $post->title }}</td>
                      <td>
                        @foreach($post->tags as $tag)
                          <ul>
                            <li>{{ $tag->name }}</li>
                          </ul>
                        @endforeach
                      </td>
                      <td>{{ $post->categori->name }}</td>
                      <td>
                        <a href="{{ route('post.restore-post', $post->id) }}" class="btn btn-info btn-sm text-uppercase mb-2 mr-2">Restore</a>
                        <form action="{{ route('post.delete-any', $post->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn-sm btn btn-danger text-uppercase mb-2 mr-2">Delete Any</a>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
              {{ $posts->links() }}
            </div>
            <!-- Crad Body -->
          </div>



@endsection