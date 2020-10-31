<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\models\Clientuser;


class UsersController extends Controller
{
    public function index(){
        $clientUsers = Clientuser::get();

        return view('users.list',['clientUsers' => $clientUsers]);
    }

    public function new(){
        return view('users.form');
    }

    public function add( Request $request ){
        $clientUser = new Clientuser;
        $clientUser= $clientUser->create( $request->all() );
        return Redirect::to('/users');
    }
}
