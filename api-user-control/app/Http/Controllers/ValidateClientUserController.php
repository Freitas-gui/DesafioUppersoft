<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Clientuser;
use App\Rules\FullName;

class ValidateClientUserController extends Controller
    /* I made the validations in the controller because the lumen doesn't have support for FormRequest.
        By default, the Lumen base controller class uses a ValidatesRequests that contains the validate method.
    */
{

    public function validationAdd(Request $request){
        $this->validate($request, [
            'name' =>['required','max:50','min:6','string', new FullName],
            'cpf' =>'required|digits:11|unique:clientusers',
            'birth' =>'required',
            'email' =>'required|max:50|email|unique:clientusers',
            'tel' =>'required|numeric',
            'address' =>'required|max:250',
            'city' =>'required|max:250',
            'state' =>'required|max:250',
        ]);
    }

    public function validationUpdate(Request $request, int $id){
        $this->validate($request, [
            'name' =>['max:50','min:6','string', new FullName],
            'cpf' =>'digits:11|unique:clientusers,cpf,'.$id,
            'birth' =>'',
            'email' =>'max:50|email|unique:clientusers,email,'.$id,
            'tel' =>'numeric',
            'address' =>'max:250',
            'city' =>'max:250',
            'state' =>'max:250',
        ]);
    }

}