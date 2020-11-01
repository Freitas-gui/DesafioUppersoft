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
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $clientUser->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ $clientUser->cpf }}">
                            @error('cpf')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birth">Birth:</label>
                            <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror" value="{{ $clientUser->birth }}">
                            @error('birth')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $clientUser->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tel">Telephone:</label>
                            <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{ $clientUser->tel }}">
                            @error('tel')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $clientUser->address }}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $clientUser->city }}">
                             @error('city')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ $clientUser->state }}">
                             @error('state')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>              
                

                @else
                <form action="{{ url('users/add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{old('cpf')}}">
                            @error('cpf')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birth">Birth:</label>
                            <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror" value="{{old('birth')}}">
                            @error('birth')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tel">Telephone:</label>
                            <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{old('tel')}}">
                            @error('tel')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}">
                            @error('city')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{old('state')}}">
                            @error('state')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
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
