@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
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
                                <th scope="col">CPF</th>
                                <th scope="col">Birth</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>

                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $clientUsers as $u )

                            <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->cpf }}</td>
                                <td>{{ $u->birth }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->tel }}</td>
                                <td>{{ $u->address }}</td>
                                <td>{{ $u->city }}</td>
                                <td>{{ $u->state }}</td>
                                <td>
                                    <a href="users/{{ $u->id }}/edit" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                <form action="users/delete/{{ $u->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
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
