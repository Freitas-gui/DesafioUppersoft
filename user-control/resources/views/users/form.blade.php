@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
