@extends('layouts.header-n')
@section('title')
@parent
Blog Comments
@endsection
@section('content')

@parent
<!-- Breadcrumbs and Search Bar -->
<div class="card-header py-3">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex align-items-center">
            <ol class="breadcrumb m-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Blog Comments</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card pt-3">
            <div class="card-body">
                <div class="table-responsive" id="user_table_container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Blog ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Submitted At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($comments as $comment)
                                <tr>
                                    <td>{{ $comment->blog_id }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->email }}</td>
                                    <td>{{ $comment->message }}</td>
                                    <td>{{ $comment->created_at->format('d M Y') }}</td>
                                    <td>
                                        <form action="{{ route('admin.blog-comments.approve', $comment->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            <button class="btn btn-success btn-sm">Approve</button>
                                        </form>

                                        <form action="{{ route('admin.blog-comments.delete', $comment->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No pending comments.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
