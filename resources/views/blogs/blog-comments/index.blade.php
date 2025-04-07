@extends('layouts.header-n')

@section('content')
<div class="container mt-4">
    <h2>Pending Blog Comments</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
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
@endsection
