@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('/users/new') }}"> New client user </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>List of client users</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $clientUsers as $u )

                            <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <a href="users/{{ $u->id }}/edit" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                <form action="users/delete/{{ $u->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Deletar</button>
                                </form>
                                </td>
                            </tr>

                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
