<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Clientuser;
use App\Http\Controllers\ValidateClientUserController;


class UsersController extends ValidateClientUserController
{
    public function index(){
        return Clientuser::all();
    }

    public function add(Request $request){
        $this->validationAdd($request);

        return response()->json(Clientuser::create($request->all()),201);
    }

    public function show(int $id){
        $clientuser = Clientuser::find($id);
        if(is_null($clientuser)){
            return response()->json('', 204); # 204 No content
        }
        return response()->json($clientuser);
    }

    public function update(int $id, Request $request){
        $this->validationUpdate($request, $id);

        $clientuser = Clientuser::find($id);
        if (is_null ($clientuser)){
            return response()->json(['error' => 'resource not found'], 404);
        }
        $clientuser->fill($request->all());
        $clientuser->save();
    }

    public function destroy(int $id){
        $amountRemoved = Clientuser::destroy($id);
        if($amountRemoved === 0){
            return response()->json(['error' => 'resource not found'], 404);
        }
        return response()->json('', 204); # 204 No content
    }
}