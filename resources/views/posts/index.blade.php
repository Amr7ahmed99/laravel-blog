
@extends('layout.main_layout')

@section('content')
    <section class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $posts as $post)
                        <tr>
                            <th scope="row">{{$post['id']}}</th>
                            <td>{{$post['title']}}</td>
                            <td>{{$post['posted_by']}}</td>
                            <td>{{$post['created_at']}}</td>
                            <td>
                                <a href="/test/view" class="btn btn-info btn-md">View</a>
                                <a href="/test/edit" class="btn btn-primary btn-md">Edit</a>
                                <a href="/test/delete" class="btn btn-danger btn-md">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection