@extends('layout')

@section('title','Posts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1">
                <div class="panel" style="display: flex;flex-direction: column;height: 45vw;justify-content: center;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form class="form-horizontal pull-right">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>#</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Extract</th>
                                <th>Content</th>
                                <th>Access</th>
                                <th>Publication Date</th>

                            </tr>

                            </thead>
                            <tbody>
                            @foreach( $posts as $post )
                                <tr>
                                    <td>
                                        <ul class="action-list d-flex">
                                            <li><button class="btn btn-primary" onclick="window.location.href='/posts/{{ $post->id }}/edit'">✏️</button></li>
                                            <form method="post" action="/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <li>
                                                    <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                                </li>
                                            </form>
                                        </ul>
                                    </td>
                                    <td><a href="/posts/{{ $post->id }}">{{ $post->id }}</a></td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user_id }}</td>
                                    <td>{{ $post->extract }}</td>
                                    <td>{{ $post->content}}</td>
                                    <td>{{ $post->access}}</td>
                                    <td>{{ $post->publication}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="panel-footer" style="height: 5vh;"></div>

                </div>
            </div>
        </div>
    </div>
@endsection

