@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users') }}">Back<a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                    <form action="{{ url('users/update') }}/{{ $clientUser->id }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control" value="{{ $clientUser->name }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF:</label>
                            <input type="text" name="cpf" class="form-control" value="{{ $clientUser->cpf }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Birth:</label>
                            <input type="date" name="birth" class="form-control" value="{{ $clientUser->birth }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail:</label>
                            <input type="email" name="email" class="form-control" value="{{ $clientUser->email }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone:</label>
                            <input type="text" name="tel" class="form-control" value="{{ $clientUser->tel }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address:</label>
                            <input type="text" name="address" class="form-control" value="{{ $clientUser->address }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">City:</label>
                            <input type="text" name="city" class="form-control" value="{{ $clientUser->city }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">State:</label>
                            <input type="text" name="state" class="form-control" value="{{ $clientUser->state }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>              
                

                @else
                <form action="{{ url('users/add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF:</label>
                            <input type="text" name="cpf" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Birth:</label>
                            <input type="date" name="birth" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone:</label>
                            <input type="text" name="tel" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address:</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">City:</label>
                            <input type="text" name="city" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">State:</label>
                            <input type="text" name="state" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
