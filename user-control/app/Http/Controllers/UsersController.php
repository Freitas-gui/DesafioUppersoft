<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\models\Clientuser;
use\App\Http\Requests\ValidateClientUserRequest;


class UsersController extends Controller
{
    public function index(){
        $clientUsers = Clientuser::get();

        return view('users.list',['clientUsers' => $clientUsers]);
    }

    public function new(){
        return view('users.form');
    }

    public function add( ValidateClientUserRequest $request ){
        $clientUser = new Clientuser;        
        $clientUser= $clientUser->create( $request->all() );
        
        return Redirect::to('/users');
    }

    public function edit( $id ){
        $clientUser = Clientuser::findOrFail( $id );

        return view('users.form', ['clientUser' => $clientUser]);
    }

    public function update( $id, ValidateClientUserRequest $request ){
        $clientUser = Clientuser::findOrFail( $id );
        $clientUser->update( $request->all() );
        
        return Redirect::to('/users');
    }

    public function delete ( $id ){
        $clientUser = Clientuser::findOrFail( $id );
        $clientUser->delete();

        return Redirect::to('/users');

    }
}
